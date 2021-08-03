<template>
  <div>
    <form @submit.prevent="onSubmit()">
      <v-container>
        <v-row>
          <v-col
            cols="12"
            md="4"
          >
            <v-text-field
              v-model="name"
              label="Name"
            />
          </v-col>
          <v-col
            cols="12"
            md="4"
          >
            <v-select
              v-model="type"
              :items="items"
              label="Type"
            />
          </v-col>
          <v-col
            cols="12"
            md="4"
            class="d-flex align-center justify-space-between"
          >
            <v-btn
              class="w-50"
              color="primary"
              type="submit"
            >
              filter
            </v-btn>
            <v-btn
              class="w-50"
              color="error"
              @click="clear"
            >
              clear
            </v-btn>
          </v-col>
        </v-row>
      </v-container>
    </form>
  </div>
</template>

<script>

export default {
  data: () => ({
    name: '',
    type: null,
    items: [
      'micro',
      'nano',
      'regional',
      'brewpub',
      'large',
      'planning',
      'bar',
      'contract',
      'proprietor',
      'closed'
    ]
  }),
  methods: {
    clear () {
      this.name = ''
      this.type = null
    },
    onSubmit () {
      const filterData = {
        name: this.name,
        type: this.type
      }
      this.$emit('filter', filterData)
    }
  }
}
</script>

<style lang="scss" scoped>
.w-50{
  width: calc(50% - 10px);
}
</style>
