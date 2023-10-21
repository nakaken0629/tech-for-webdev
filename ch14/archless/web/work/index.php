<?php
	/* 送信されたデータの取得 */
	if (!(array_key_exists("id", $_REQUEST))) {
		header("HTTP/1.1 400 Bad Request");
		echo "id is required";
		exit(0);
	}
	$id = (int) $_REQUEST["id"];

	/* ロジックの処理 */
	$now = time();
	$begin_time = strtotime(date("y/m/d 10:00:00"));
	$end_time = strtotime(date("y/m/d 20:00:00"));
	if ($now < $begin_time or $end_time > $now) {
		header("HTTP/1.1 400 Bad Request");
		echo "out of service";
		exit(0);
	}

	/* データベースの処理 */
	$pdo = new PDO("mysql:host=db;dbname=archless;charset=latin1", 'user1', 'password1234');
    $prepare = $pdo->prepare("select id, name from product where id=:id");
    $prepare->bindParam("id", $id, PDO::PARAM_INT);
    $prepare->execute();
	$result = $prepare->fetch();
	if (!$result) {
		header("HTTP/1.1 404 Not Found");
		echo "id: {$id} is not exist";
		exit(0);
	}
?>

<!-- HTMLの生成 -->
<html>
  <body>
	<p>id: <?= $id ?></p>
	<p>名前: <?= $result["name"] ?></p>
  </body>
</html>
