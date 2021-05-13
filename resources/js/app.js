/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('body-registro-component', require('./components/bodyRegister.vue').default);
Vue.component('header-component', require('./components/header.vue').default);
Vue.component('body-login-component', require('./components/bodyLogin.vue').default);

const routes = [
	// { path: '/', name:'index', component: Index },
    { path: '/registro', name:'registro'},
    // { path: '/pricing', name:'pricing', component: Pricing }

];

// const router = new VueRouter({
//     routes, // short for routes: routes
//     mode: 'history'
// });


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
window.onload = function(){
    const app = new Vue({
        el: '#app',
    });

   

}


