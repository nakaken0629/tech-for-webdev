<template>
  <div class="box">
    <h3>{{ props.name }}</h3>
    <hr>
    <p>値段：¥{{ props.price }}</p>
    <p><img class="photo" :src="'/image/' + props.photo" /></p>
  </div>
</template>

<script setup>
import { defineProps } from "vue"
const props = defineProps(['id', 'name', 'price', 'photo'])
</script>

<style scoped>
  div.box {
    float: left;
    width: 320px;
    margin: 8px;
    padding: 8px;
    background-color: #ffffdd;
  }
  img.photo {
    width: 316px;
    height: 240px;
    object-fit: contain;
  }
</style>