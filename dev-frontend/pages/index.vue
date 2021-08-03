<template>
  <div>
    <h1>Brewery List</h1>
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
    >
      <!-- eslint-disable-next-line -->
      <template #item.action="{ item }">
        <v-btn color="primary" @click="viewItem(item.id)">
          View
        </v-btn>
      </template>
    </v-data-table>
    <PopUp :show="show" :data="brewery" @closed-popup="show=$event" />
  </div>
</template>

<script>
import FilterBrewery from '@/components/filter-brewery'
import PopUp from '@/components/pop-up'
export default {
  components: {
    FilterBrewery,
    PopUp
  },
  data: () => ({
    headers: [
      { text: 'ID', value: 'id' },
      { text: 'Name', align: 'start', value: 'name' },
      { text: 'Type', value: 'type' },
      { text: 'Action', value: 'action' }
    ],
    desserts: [],
    load: true,
    show: false,
    brewery: {}
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
    },
    async viewItem (id) {
      this.show = false
      this.brewery = {}
      const { data } = await this.$axios.get('/api/brewery/' + id, {
        headers: {
          'Content-Type': 'application/json'
        }
      })
      this.brewery = data
      this.show = true
    }
  }
}
</script>

<style lang="scss" scoped>

</style>
