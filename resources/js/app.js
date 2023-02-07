import './bootstrap';
import vue from 'vue'
window.vue = vue;

import App from './components/App.vue';

// Importamos Axios
import Vueaxios from 'vue-axios';
import axios from 'axios';

// Importamos vue-ruoter
import VueRouter from 'vue-router';
import { routes } from './routes';
import Vue from 'vue';
Vue.use(VueRouter);
Vue.use(Vueaxios, axios);
const router = new VueRouter({
    mode:'history',
    routes:routes
});

const app = new Vue({
    el:'#app',
    router:router,
    render:h =>(App)

});
