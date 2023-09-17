<?php
/* データベースへの接続を行う */
$pdo = new PDO("mysql:host=db;dbname=simpleweb", 'user1', 'password1234');
if ($_SERVER["REQUEST_METHOD"] === "POST" && $_POST["article"]) {
    /* もし記事が投稿されていたら、データベースに投稿を登録する */
    $prepare = $pdo->prepare("insert into post (posted_at, article) values (now(), :article)");
    $prepare->bindParam("article", $_POST["article"], PDO::PARAM_STR);
    $prepare->execute();
}
/* データベースに登録されている投稿の一覧を取得する */
$query = $pdo->query("select id, posted_at, article from post order by posted_at desc");
$rows = $query->fetchAll();

/* UTC（世界標準時）をJST（日本時間）に変換する関数 */
function utc2jst($value) {
    $date = new DateTime($value);
    $date->setTimeZone(new DateTimeZone('Asia/Tokyo'));
    return $date;
}
?>

<!DOCTYPE html>
<html>

<head>
    <!-- スタイルシートを定義する（https://simplecss.org/） -->
    <link rel="stylesheet" href="simple.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <header>
        <h1>シンプルなWebアプリケーション</h1>
    </header>
    <main>
        <form action="." method="post">
            <p><textarea name="article" rows=3 cols=50 placeholder="入力してください"></textarea></p>
            <p><input type="submit" name="post" value="ポストする"></p>
        </form>
        <div>
            <!-- 先頭で取得した投稿の一覧を表示する -->
            <?php foreach ($rows as $row) { ?>
                <hr>
                <p><?= utc2jst($row['posted_at'])->format('Y年m月d日 H時i分s秒') ?></p>
                <p><?= htmlspecialchars($row['article'], ENT_QUOTES) ?></p>
            <?php } ?>
        </div>
    </main>
    <footer>
        <p>simple web application</p>
    </footer>
</body>

</html>