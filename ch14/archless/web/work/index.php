<?php
if ($_SERVER["REQUEST_METHOD"] != "GET") {
  header("HTTP/1.1 405 Method Not Allowed");
  echo "{$_SERVER['REQUEST_METHOD']}メソッドは認められていません";
  exit(0);
}

/* 送信されたパラメータの取得 */
if (!(array_key_exists("id", $_REQUEST))) {
  header("HTTP/1.1 400 Bad Request");
  echo "idを指定してください";
  exit(0);
}
$id = (int) $_REQUEST["id"];

/* データベースの処理 */
$pdo = new PDO("mysql:host=db;dbname=archless;charset=latin1", 'user1', 'password1234');
$prepare = $pdo->prepare("select id, name from product where id=:id");
$prepare->bindParam("id", $id, PDO::PARAM_INT);
$prepare->execute();
$result = $prepare->fetch();
if (!$result) {
  header("HTTP/1.1 404 Not Found");
  echo "{$id}というidを持つ商品は存在しません";
  exit(0);
}
?>

<!-- HTMLの生成 -->
<html>

<body>
  <h1>アーキテクチャなし</h1>
  <p>id: <?= $id ?></p>
  <p>名前: <?= $result["name"] ?></p>
</body>

</html>