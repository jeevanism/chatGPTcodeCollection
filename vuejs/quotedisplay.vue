<template>
  <div>
    <h1>Random Buddha Quote</h1>
    <p>{{ quote }}</p>
  </div>
</template>

<script setup>
import { ref, onMounted } from 'vue'

const quote = ref('')

onMounted(async () => {
  const response = await fetch('https://buddha-api.com/api/random')
  const data = await response.json()
  quote.value = data.quote
})
</script>


