from datetime import datetime
from . import db
from flask import Flask, render_template, request
from simpleweb.db import get_db

app = Flask(__name__)
app.config.from_pyfile('app.cfg')
db.init_app(app)


@app.route("/", methods=['GET', 'POST'])
def posts():
    if request.method == 'POST':
        insert_sql = "insert into post (posted_at, article) values (%s, %s)"
        insert_data = [
            datetime.now().strftime("%Y-%m-%d %H:%M:%S"),
            request.form['article']
        ]
        with get_db().cursor() as cursor:
            cursor.execute(insert_sql, insert_data)
            get_db().commit()

    select_sql = "select posted_at, article from post"
    with get_db().cursor(buffered=True) as cursor:
        cursor.execute(select_sql)
        posts = []
        for (posted_at, article) in cursor:
            posts.append({
                "posted_at": posted_at,
                "article": article
            })
    return render_template('posts.html', posts=posts)
