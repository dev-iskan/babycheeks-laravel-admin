<template>
  <div class="product-body__product-filter d-flex justify-space-between mh-2">
    <div class="select is-rounded" v-if="selected">
      <select v-model="selected" @change="selectOrder">
        <option
          v-for="(name, value) in sortings"
          :key="value"
          :value="value"
        >{{name}}</option>
      </select>
    </div>
  </div>

</template>

<script>
  export default {
    props: {
      category: {
        type: Object,
        required: true
      },
      sortings: {
        type: Object,
        required: true
      },
      query: {
        type: [Object, Array],
        required: true
      }
    },
    data () {
      return {
        selected: null
      }
    },
    created () {
      this.selected = typeof this.query['sort'] === 'string' ? this.query['sort'] : 'created;asc'
    },

    methods: {
      selectOrder () {
        const query = Object.assign({}, this.query)
        query.sort = this.selected

        this.createQueryAndRedirect(query)
      },

      createQueryAndRedirect (obj) {
        const queryString = Object.keys(obj).map(key => `${encodeURIComponent(key)}=${encodeURIComponent(obj[key])}`).join('&')
        window.location.href =`/c/${this.category.slug}${queryString ? '?'+queryString : ''}`
      }
    }
  }
</script>

<style lang="scss" scoped>

</style>
