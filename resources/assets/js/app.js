import Vue from 'vue'
import VueRouter from 'vue-router'
import Dashboard from './components/dashboard.vue'
import UserAccount from './components/user/user_view.vue'


Vue.use(VueRouter);
Vue.use(require('vue-resource'))

var App = Vue.extend({});

var router = new VueRouter();

router.map({
  '/': {
    component: Dashboard
  },
  '/auth/user': {
    component: UserAccount
  }
});

router.start(App, 'body');