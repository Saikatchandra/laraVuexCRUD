/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

// import ElementPlus from 'element-plus';
// import 'element-plus/dist/index.css'
// // import App from './App.vue'

import {store} from './store/store.js';

window.Vue = require('vue').default;


Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('student-form-component', require('./components/Student/StudentFormComponent.vue').default);


// const app = new Vue({
//     el: '#vue-app',
// });
// app.use(ElementPlus)


import Vue from 'vue';
import ElementUI from 'element-ui';
import 'element-ui/lib/theme-chalk/index.css';


Vue.use(ElementUI);

const app = new Vue({
    store,
        el: '#vue-app',
    });