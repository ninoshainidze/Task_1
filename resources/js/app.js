
require('./bootstrap');

window.Vue = require('vue').default;

import router from './router.js';
import VueRouter from 'vue-router';
Vue.use(VueRouter);


Vue.component('apartment-component', require('./view/AdminPages/AdminPage.vue').default);


import { required, alpha, max, min, between } from 'vee-validate/dist/rules';
import { extend, localize, ValidationProvider, ValidationObserver } from 'vee-validate';
import { i18n } from './i18n.js';
import en from "vee-validate/dist/locale/en.json";
import ka from "vee-validate/dist/locale/ka.json";
import ru from "vee-validate/dist/locale/ru.json";

import { BootstrapVue } from 'bootstrap-vue';
import "bootstrap/dist/css/bootstrap.min.css";
import "bootstrap-vue/dist/bootstrap-vue.css";
Vue.use(BootstrapVue)


import App from './App.vue'

import AOS from "aos";
import "aos/dist/aos.css";

localize({
  en,
  ka,
  ru
});

extend('required', required);
extend('alpha', alpha);
extend('max', max);
extend('min', min);
extend('between', between);

Vue.component('ValidationProvider', ValidationProvider);
Vue.component('ValidationObserver', ValidationObserver);

const app = new Vue({
  el: '#app',
  components: {
    App
  },
  created() {
    AOS.init({
      duration:1200
    });
    const getHTMLTag = document.documentElement;
    getHTMLTag.setAttribute("lang", i18n.locale);
  },

  i18n,
  router,
  // router: new VueRouter(routes)
});
