import { createApp } from 'vue'

import * as VueRouter from 'vue-router'
import HomePage from './views/www/HomePage.vue'
import SleepingObjects from './views/www/SleepingObjects.vue'
import MainPage from './views/www/MainPage.vue'
import Pages from './views/www/Pages.vue'
import Contact from './views/www/Contact.vue'
import Navigation from './views/Navigation.vue'

const routes = [
    {path: '/', component: MainPage},
    {path: '/webbuilder', component: MainPage},
    {path: '/home', component: HomePage},
    {path: '/sleeping', component: SleepingObjects},
    {path: '/pages', component: Pages},
    {path: '/contact', component: Contact},
]
const router = VueRouter.createRouter({
  // 4. Provide the history implementation to use. We are using the hash history for simplicity here.
  history: VueRouter.createWebHashHistory(),
  routes, // short for `routes: routes`
})
 
const app = createApp()

app.component('website-builder', Navigation)

app.use(router)

app.mount('#app')
