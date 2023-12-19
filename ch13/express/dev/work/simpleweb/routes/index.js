const mysql = require('mysql2/promise');
const createConnection = require('../db.js')

var express = require('express');
var router = express.Router();

const readPosts = async(connection) => {
  const sql = "select posted_at, article from post";
  const [posts, fields] = await connection.execute(sql);
  return posts;
}

/* GET home page. */
router.get('/', async (req, res, next) => {
  const connection = await createConnection();
  const posts = await readPosts(connection);
  connection.close();
  res.render('index', { posts: posts });
});

/* GET home page. */
router.post('/', async (req, res, next) => {
  const connection = await createConnection();
  article = req.body.article;
  const sql = "insert into post (posted_at, article) values (now(), ?)";
  connection.execute(sql, [article]);
  const posts = await readPosts(connection);
  connection.close();
  res.render('index', { posts: posts });
});

module.exports = router;
