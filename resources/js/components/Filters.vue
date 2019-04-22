<template>
  <div v-if="Object.keys(filters).length">
    <ul
    class="mb-2"
    v-for="(values, key) in mappings"
    :key="key"
    >
      <!-- Special for Akbar -->
      <p class="d-flex justify-space-between field-0">
        <span class="title is-6">{{key | title}}</span>
        <span><a href="#" class="is-size-7" v-if="query[key]" @click.prevent="resetFilter(key)">Сбросить</a></span>
      </p>

      <!--  -->

      <li
        v-for="(name, value) in values"
        :key="value"
      >
        <div class="field">
          <input
            class="is-checkradio is-info is-small"
            :id="name"
            v-model="filters[key]"
            :value="value"
            @change.prevent.stop="selectFilter($event, key)"
            type="checkbox">
          <label :for="name">{{name}}</label>
        </div>
      </li>
    </ul>
  </div>
</template>

<script>

  const titles = {
    genders: 'Пол',
    brands: 'Бренд',
    ages: 'Возраст'
  }
  export default {
    props: {
      category: {
        type: Object,
        required: true
      },
      mappings: {
        type: Object,
        required: true
      },
      query: {
        type: [Object, Array],
        required: true
      }
    },

    filters: {
      title (key) {
        return titles[key]
      }
    },

    data () {
      return {
        filters: {
          genders: [],
          ages: [],
          brands: []
        }
      }
    },

    created () {
      const query = Object.assign({}, this.query)
      //split string into array
      const newQuery = Object.keys(query).reduce((acc, key) => ({...acc, ...{[key]: query[key].split(';')}}), {})
      // merge objects into filters
      this.filters = Object.assign({}, this.filters, newQuery)
    },

    methods: {
      resetFilter (key) {
        // copy query
        const query = Object.assign({}, this.query)
        // delete key
        delete query[key]

        this.createQueryAndRedirect(query)
      },

      selectFilter (e, key) {
        const filter =  Object.keys(this.filters).reduce((accm, key) => {
          if(this.filters[key].length) {
            return {...accm, ...{[key]: this.filters[key].join(';')}}
          }
          return {...accm}
        }, {})

        this.createQueryAndRedirect(filter)
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
