import Router from 'vue-router'
import Home from './views/Home.vue'
import About from './views/About.vue'
import Err404 from './views/NotFound404.vue'
import User from './views/User.vue'
import UserDetailOriginal from './views/UserDetailOriginal.vue'

export default new Router({
  mode: 'history',
  routes: [
    {
      path: '/Err404',
      name: 'Err404',
      component: Err404
    },
    {
      path: '/',
      name: 'home',
      component: Home
    },
    {
      path: '/about',
      name: 'about',
      component: About
    },
    {
      path: '/user',
      name: 'user',
      component: User
    },
    {
      path: '/UserDetailOriginal/:id',
      name: 'userDetail',
      component: UserDetailOriginal
    },
  ]
});