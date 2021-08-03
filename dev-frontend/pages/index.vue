<template>
  <div>
    <h1>Brewary List</h1>
    <filterBrewery @filter="filterBrewery($event)" />
    <v-data-table
      :headers="headers"
      :items="desserts"
      :items-per-page="5"
      class="elevation-1"
    />
  </div>
</template>

<script>
import FilterBrewery from '@/components/filter-brewery'
export default {
  components: {
    FilterBrewery
  },
  data: () => ({
    headers: [
      { text: 'ID', value: 'id' },
      { text: 'Name', align: 'start', value: 'name' },
      { text: 'Type', value: 'type' }
    ],
    desserts: []
  }),
  methods: {
    filterBrewery (event) {
      console.log(event)
    }
  }
}
</script>

<style lang="scss" scoped>

</style>
