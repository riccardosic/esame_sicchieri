import Vue from 'vue'
import App from './App.vue'
import VueRouter from 'vue-router'

import Home from '@/components/Home.vue'
import Detail from '@/components/Detail.vue'
import Create from '@/components/Create.vue'

Vue.use(VueRouter)
Vue.config.productionTip = false

const routes = [
  {
    path:'/home',
    name:'list',
    component: Home
  },
  {
    path:'/detail/:id',
    name:'detail',
    component: Detail
  },
  {
    path:'/create',
    name:'create',
    component: Create
  },
  {
    path:'/edit/:id',
    name:'edit',
    component: Create
  },
  {
    path:'/',
    redirect:''
  }
]

const router = new VueRouter({
    mode:'history',
    routes
})

new Vue({
  render: h => h(App),
  router
}).$mount('#app')
