<template>
  <div>
    <h1>Brewary List</h1>
    <filterBrewery @filter="filterBrewery($event)" />
    <v-progress-linear
      v-if="load"
      indeterminate
      color="green"
    />
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
    desserts: [],
    load: true
  }),
  mounted () {
    this.getBrewaries()
  },
  methods: {
    async getBrewaries () {
      this.load = true
      const { data } = await this.$axios.get('/api/brewery', {
        headers: {
          'Content-Type': 'application/json'
        }
      })
      this.loadBreweries(data)
    },
    async getBrewariesByFilter (filters) {
      this.load = true
      const { data } = await this.$axios.get('/api/brewery-filter', {
        headers: {
          'Content-Type': 'application/json'
        },
        params: {
          name: filters.name,
          type: filters.type
        }
      })
      this.loadBreweries(data)
    },
    loadBreweries (data) {
      this.desserts = []
      for (const el of data) {
        const item = {
          id: el.id,
          name: el.name,
          type: el.brewery_type
        }
        this.desserts.push(item)
      }
      this.load = false
    },
    filterBrewery (event) {
      this.getBrewariesByFilter(event)
    }
  }
}
</script>

<style lang="scss" scoped>

</style>
