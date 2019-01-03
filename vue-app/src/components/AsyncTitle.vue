<template>
  <h1>{{ title }}</h1>
</template>

<script>
  import axios from 'axios'

  export default {
    name: 'AsyncTitle',
    data() {
      return {
        title: "Loading title..."
      }
    },
    mounted() {
      axios.get('https://baconipsum.com/api/?type=all-meat&sentences=1&start-with-lorem=1')
        .then(r => {
          this.title = r.data[0]
        })
    }
  }
</script>

<style scoped>
  h1 {
    margin: 2em;
  }
</style>
