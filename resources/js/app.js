import './bootstrap';
import '../css/app.css'

import { createApp } from 'vue';
import App from './components/App.vue';
import Navbar from './components/Navbar.vue';
import Networks from './components/Networks.vue'
import HomeAulasVue from './components/VueComponents/HomeAulasVue.vue'
import AulaVue from './components/VueComponents/AulaVue.vue'

import 'primeicons/primeicons.css'

const app = createApp();

app.component('app', App)
app.component('navbar', Navbar)
app.component('networks', Networks)
app.component('homeaulasvue', HomeAulasVue)
app.component('aulavue', AulaVue)

app.mount('#app');
