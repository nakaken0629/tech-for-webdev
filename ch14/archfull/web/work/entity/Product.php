<?php
class Product
{
  # データに関する処理（データベースに問い合わせる）を担当
  public static function find($id)
  {
    /* データベースの処理 */
    $pdo = new PDO("mysql:host=db;dbname=archless;charset=latin1", 'user1', 'password1234');
    $prepare = $pdo->prepare("select id, name from product where id=:id");
    $prepare->bindParam("id", $id, PDO::PARAM_INT);
    $prepare->execute();
    $result = $prepare->fetch();
    if (!$result) {
      return false;
    }
    return array(
      "name" => $result["name"]
    );
  }
}
