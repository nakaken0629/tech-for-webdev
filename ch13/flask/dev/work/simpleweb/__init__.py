from . import db
from flask import Flask, render_template

app = Flask(__name__)
app.config.from_pyfile('app.cfg')
db.init_app(app)


@app.route("/")
def get_posts():
    return render_template('posts.html')
