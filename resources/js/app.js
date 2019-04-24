import './bootstrap'
import './custom.js'
import Vuelidate from 'vuelidate'
import Vuesweetalert from 'vue-sweetalert2'
window.Vue = require('vue');

Vue.component('brand-swiper', () => import(/* webpackChunkName: "js/brand-swiper" */ './components/BrandSwiper'))
Vue.component('contact-us', () => import(/* webpackChunkName: "js/contact-us" */  './components/ContactUs'))
Vue.component('order-modal', () => import(/* webpackChunkName: "js/order-modal" */  './components/OrderModal'))
Vue.component('product-swiper', () => import(/* webpackChunkName: "js/product-swiper" */  './components/ProductSwiper'))
Vue.component('filters', () => import(/* webpackChunkName: "js/filters" */  './components/Filters'))
Vue.component('sort-dropdown', () => import(/* webpackChunkName: "js/sort-dropdown" */  './components/SortDropdown'))
Vue.component('search-dropdown', () => import(/* webpackChunkName: "js/search-dropdown" */  './components/SearchDropdown'))
Vue.use(Vuelidate)
Vue.use(Vuesweetalert)
const app = new Vue({
    el: '#app',
});
