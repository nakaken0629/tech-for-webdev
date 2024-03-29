Feature: 商品検索を行う

Background:
  * url 'http://dev:8080'

Scenario: show products
  Given path 'json/products.json'
  When method get
  Then status 200
  And match response contains
    """
[
    { id: 0, name: "おしゃれなカバン", price: 32000, photo: "bag.jpg" },
    { id: 1, name: "かわいい洋服", price: 18000, photo: "clothes.jpg" },
    { id: 2, name: "キレイなスカーフ", price: 3800, photo: "scarf.jpg" },
]
      """
