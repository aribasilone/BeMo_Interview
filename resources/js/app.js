import App from './components/App.vue'
import Main from './components/Main.vue'
import ContactUs from './components/ContactUs.vue'
import VueRouter from 'vue-router'
import Dash from './components/Dash.vue'
import VueMeta from 'vue-meta'
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');


window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('App', App);
Vue.component('Main', Main);
Vue.component('ContactUs', ContactUs);
Vue.component('Dash', Dash);

// Vue.component('Footer', require('./components/Footer.vue'));

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.use(VueRouter);
Vue.use(VueMeta);

const router = new VueRouter({
    routes: [
      { path: '/', component: Main },
      { path: '/contact-us', component: ContactUs }
    ]
})

const app = new Vue({
    el: '#app',
    router
});
