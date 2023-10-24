<?php
require("Entity/Product.php");

# ロジックに関する処理（データを取得する、描画するHTMLテンプレートを選択する）を担当
class IndexContrller
{
  function get($id)
  {
    $result = Product::find($id);
    if (!$result) {
      return false;
    }
    include("template/index_get.php");
    return true;
  }
}
