<template>
  <div
    class="dropdown field d-flex align-center"
    :class="{'is-active': loaded, 'is-hidden-desktop': mobile, 'px-1': mobile,  'is-hidden-touch': !mobile, 'is-hidden-desktop-only': !mobile}"
  >
    <p class="control has-icons-left has-icons-right dropdown-trigger">
      <input
        v-model="query"
        type="text"
        class="input"
        placeholder="Поиск продуктов"
        aria-haspopup="true"
        aria-controls="dropdown-menu">
      <span class="icon is-small is-left">
        <i class="fas fa-search"></i>
      </span>
      <span v-if="query" @click="query = ''" class="icon is-small is-right has-text-danger cursor">
        <i class="fas fa-window-close"></i>
      </span>
    </p>
    <div class="dropdown-style dropdown-menu" id="dropdown-menu" role="menu">
      <div class="dropdown-content" v-if="filteredProducts.length">
        <a class="dropdown-item" :href="`/p/${product.slug}`" v-for="product in filteredProducts" :key="product.slug">
          {{product.name}}
        </a>
      </div>
      <div class="dropdown-content" v-else>
        <span class="dropdown-item">Нет таких товаров</span>
      </div>
    </div>
  </div>
</template>

<script>
  import debounce from 'lodash.debounce'
  export default {
    data() {
      return {
        query: '',
        loaded: false,
        products: []
      }
    },
    props: {
      mobile: Boolean
    },
    watch: {
      query(val) {
        if (val === '') this.loaded = false
        this.searchProducts(this, val)
      }
    },
    computed: {
      filteredProducts() {
        return this.products
      }
    },

    methods: {
      searchProducts: debounce((app, query) => {
        axios.get(`/api/search?q=${query}`)
          .then(response => {
            app.products = response.data.data
            if (query) app.loaded = true
          }).catch((err) => {

          });
      }, 400)
    }
  }

</script>

<style lang="scss" scoped>
  .cursor {
    pointer-events: auto!important;
    cursor: pointer;
  }
</style>
