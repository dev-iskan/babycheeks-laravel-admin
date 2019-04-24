<template>
  <div class="navbar-end is-hidden-mobile is-hidden-tablet-only">
    <div
      class="dropdown field d-flex align-center"
      :class="{'is-active': loaded}"
    >
      <p class="control has-icons-left has-icons-right dropdown-trigger">
        <input
          v-model="query"
          class="input"
          type="text"
          placeholder="Поиск продуктов"
          aria-haspopup="true"
          aria-controls="dropdown-menu"
        >
        <span class="icon is-small is-left">
          <i class="fas fa-search"></i>
        </span>
      </p>
      <div class="dropdown-style dropdown-menu" id="dropdown-menu" role="menu">
        <div class="dropdown-content" v-if="filteredProducts.length">
          <a
            class="dropdown-item"
            :href="`/p/${product.slug}`"
            v-for="product in filteredProducts"
            :key="product.slug"
          >
            {{product.name}}
          </a>
        </div>
        <div class="dropdown-content" v-else>
          <span class="dropdown-item">Нет таких товаров</span>
        </div>
      </div>
    </div>

  </div>
</template>

<script>
  import debounce from 'lodash.debounce'
  export default {
    data () {
      return {
        query: '',
        loaded: false,
        products: []
      }
    },
    watch: {
      query(val) {
        if(val === '') this.loaded = false
        this.searchProducts(this, val)
      }
    },
    computed: {
      filteredProducts () {
        return this.products
      }
    },

    methods: {
      searchProducts: debounce((app, query) => {
        axios.get(`/api/search?q=${query}`)
          .then(response => {
            app.products = response.data.data
            if(query) app.loaded = true
          }).catch((err) => {

          });
      }, 1000)
    },
    created () {
    }
  }

</script>

<style lang="scss" scoped>

</style>
