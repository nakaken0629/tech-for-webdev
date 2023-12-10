"use client"

// import styles from './page.module.css'
import ProductItem from './productItem';
import { useState } from 'react';

export default function Home() {
  const [items, setItems]: any[] = useState([])

  return (
    <>
      <h1>商品一覧</h1>
      <p>
        <button onClick={fetchProductItems}>商品検索</button>
        テストコメント <input name="testComment" type="text"></input>
      </p>
      {items.map((item : any) => {
        return (
          <ProductItem name={item.name} price={item.price} photo={item.photo} />
        )
      })}
    </>
  )

  function fetchProductItems() {
    setItems(
      [,
        { id: 0, name: "おしゃれなカバン", price: 32000, photo: "bag.jpg" },
        { id: 1, name: "かわいい洋服", price: 18000, photo: "clothes.jpg" },
        { id: 2, name: "キレイなスカーフ", price: 3800, photo: "scarf.jpg" },
      ]
    )
  }
}
