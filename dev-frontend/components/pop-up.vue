<template>
  <div>
    <v-row justify="space-around">
      <v-col cols="auto">
        <v-dialog
          v-model="dialog"
          transition="dialog-bottom-transition"
          max-width="800"
          @click:outside="close()"
        >
          <v-card>
            <v-toolbar
              color="primary"
              dark
            >
              Brewery Info
            </v-toolbar>
            <v-card-text>
              <div>
                <form>
                  <v-container>
                    <v-row>
                      <v-col cols="12" md="4">
                        <v-text-field
                          v-model="item.id"
                          label="ID"
                          disabled
                        />
                      </v-col>
                      <v-col cols="12" md="4">
                        <v-text-field
                          v-model="item.name"
                          label="Name"
                          disabled
                        />
                      </v-col>
                      <v-col cols="12" md="4">
                        <v-text-field
                          v-model="item.brewery_type"
                          label="Type"
                          disabled
                        />
                      </v-col>
                    </v-row>
                    <v-row>
                      <v-col cols="12" md="4">
                        <v-text-field
                          v-model="item.street"
                          label="Street"
                          disabled
                        />
                      </v-col>
                      <v-col cols="12" md="4">
                        <v-text-field
                          v-model="item.city"
                          label="City"
                          disabled
                        />
                      </v-col>
                      <v-col cols="12" md="4">
                        <v-text-field
                          v-model="item.state"
                          label="State"
                          disabled
                        />
                      </v-col>
                    </v-row>
                    <v-row>
                      <v-col cols="12" md="4">
                        <v-text-field
                          v-model="item.postal_code"
                          label="Postal code"
                          disabled
                        />
                      </v-col>
                      <v-col cols="12" md="4">
                        <v-text-field
                          v-model="item.country"
                          label="Country"
                          disabled
                        />
                      </v-col>
                      <v-col cols="12" md="4">
                        <v-text-field
                          v-model="item.phone"
                          label="Phone"
                          disabled
                        />
                      </v-col>
                    </v-row>
                    <v-row>
                      <v-col>
                        <v-text-field
                          v-model="item.website_url"
                          label="Website url"
                          disabled
                        />
                      </v-col>
                    </v-row>
                  </v-container>
                </form>
              </div>
            </v-card-text>
            <v-card-actions class="justify-end">
              <v-btn
                text
                @click="close()"
              >
                Close
              </v-btn>
            </v-card-actions>
          </v-card>
        </v-dialog>
      </v-col>
    </v-row>
  </div>
</template>

<script>
export default {
  props: {
    data: {
      type: Object,
      default: () => null
    },
    show: {
      type: Boolean,
      default: false
    }
  },
  data: () => ({
    dialog: false,
    item: {}
  }),
  watch: {
    show (value) {
      this.dialog = value
      this.item = this.data
    }
  },
  methods: {
    close () {
      this.dialog = false
      this.$emit('closed-popup', this.dialog)
    }
  }
}
</script>

<style lang="scss" scoped>

</style>
