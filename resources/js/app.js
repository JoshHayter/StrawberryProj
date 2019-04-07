
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
var uikitsrc = require('uikit');

import Client from 'shopify-buy';
import vSelect from 'vue-select';

window.client = Client.buildClient({
  domain: 'vinyly.myshopify.com',
  storefrontAccessToken: 'eef4905d224af6c79a6b303186d1fd8d'
});

window.Vue = require('vue');



/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));
Vue.component('v-select', vSelect);
Vue.component('store-component', require('./components/StoreComponent.vue').default);
Vue.component('vinyl-component', require('./components/VinylComponent.vue').default);
Vue.component('cart-component', require('./components/CartComponent.vue').default);
Vue.component('cart-item-component', require('./components/CartItemComponent.vue').default);


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',

    data: {
      showCartModal: false,
      checkout: { lineItems: [] },

    }


});
