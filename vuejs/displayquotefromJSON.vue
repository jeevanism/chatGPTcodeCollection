<template>
  <div class="container">
    <div class="square" v-for="(quote, index) in quotes" :key="index">
      <p>{{ quote.quote }}</p>
      <span>- {{ quote.author }}</span>
    </div>
  </div>
</template>

<script setup>
import { ref, onMounted } from 'vue'

const quotes = ref([])

onMounted(async () => {
  const response = await fetch('buddha_quotes.json')
  const data = await response.json()
  quotes.value = data
})
</script>

<style>
.container {
  display: flex;
  flex-wrap: wrap;
}

.square {
  width: 200px;
  height: 200px;
  background-color: #eee;
  margin: 10px;
  padding: 20px;
  box-sizing: border-box;
  display: flex;
  flex-direction: column;
  justify-content: center;
  text-align: center;
}
</style>
