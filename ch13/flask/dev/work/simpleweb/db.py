import click
import mysql.connector

from flask import current_app, g


def get_db():
    if 'db' not in g:
        g.db = mysql.connector.connect(
            user=current_app.config['USER'],
            password=current_app.config['PASSWORD'],
            host=current_app.config['HOST'],
            database=current_app.config['DATABASE']
        )

    return g.db


def close_db(e=None):
    db = g.pop('db', None)

    if db is not None:
        db.close()


def init_db():
    db = get_db()

    with current_app.open_resource('schema.sql') as f:
        with db.cursor() as cursor:
            cursor.execute(f.read().decode('utf8'))


@click.command('init-db')
def init_db_command():
    init_db()
    click.echo('データベースを初期化しました')


def init_app(app):
    app.teardown_appcontext(close_db)
    app.cli.add_command(init_db_command)
