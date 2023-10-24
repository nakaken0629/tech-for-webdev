<?php
# 画面に関する処理（リクエストパラメーターの確認、HTTPステータスの返却）を担当
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

/* GETに対応するロジックの実行 */
require_once("controller/index_get.php");
$controller = new IndexContrller();
$result = $controller->get($_REQUEST["id"]);
if (!$result) {
  header("HTTP/1.1 404 Not Found");
  echo "id: {$_REQUEST['id']}は存在しませんでした";
  exit(0);
}
