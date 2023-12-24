<template>
  <div>
    <h1>商品一覧</h1>
    <p>
      <button @click="fetchProductItems">商品検索</button>
      テストコメント <input type="text" value="">
    </p>
  </div>
  <ProductItem v-for="item in items" :key="item.id" :id="item.id" :name="item.name" :price="item.price"
    :photo="item.photo">
  </ProductItem>
</template>

<script setup>
import { ref } from 'vue'
import ProductItem from './components/ProductItem.vue'

let items = ref([])

let fetchProductItems = () => {
  items.value = [
    { id: 0, name: "おしゃれなカバン", price: 32000, photo: "bag.jpg" },
    { id: 1, name: "かわいい洋服", price: 18000, photo: "clothes.jpg" },
    { id: 2, name: "キレイなスカーフ", price: 3800, photo: "scarf.jpg" },
  ]
}
</script>
