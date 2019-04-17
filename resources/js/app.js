require('./bootstrap');
require('./custom.js')
import Vuelidate from 'vuelidate'
window.Vue = require('vue');

const files = require.context('./', true, /\.vue$/i)
files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// Vue.component('brand-swiper', require('./components/BrandSwiper.vue').default)
// Vue.component('contact-us', require('./components/ContactUs.vue').default)
Vue.use(Vuelidate)

const app = new Vue({
    el: '#app',
});
