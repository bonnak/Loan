import { getCookie } from './g_function'

import Vue from 'vue'
import VueRouter from 'vue-router'
import VueResource from 'vue-resource'
import VueValidator from 'vue-validator'
import NProgress from 'nprogress'

Vue.use(VueRouter)
Vue.use(VueResource)
Vue.use(VueValidator)

import App from './components/App.vue'
import Login from './components/Login.vue'
import auth from './auth'
import EmailValidation from './email_validation'
import Dashboard from './components/dashboard.vue'
import UserAccount from './components/user/User.vue'

// Vue.http.headers.common['Authorization'] = 'Bearer ' + getCookie('token');

//Vue.validator('email', EmailValidation);


Vue.http.interceptors.push((request, next) => { 
  request.headers['Authorization'] = auth.getAuthHeader().Authorization;
  request.headers['Accept'] = 'application/vnd.mob.v1+json';
  request.emulateJSON = true;

  NProgress.inc(0.2);

  next((response) => {
    NProgress.done()
    return response
  })
});

var router = new VueRouter();

router.beforeEach(function (transition) {
  if (transition.to.adminOnly && !auth.checkAuth()) {
    transition.redirect('/login');
  } else {  
    transition.next();
  }
});

router.map({
  '/login': {
    component: Login
  },
  
  '/': {
    component: Dashboard,
    adminOnly: true
  },
  '/user': {
    component: UserAccount,
    adminOnly: true
  }

  // not found handler
  // '*': {
  //   component: require('./components/not-found.vue')
  // }
});

router.redirect({
  '*': '/'
});

router.start(App, 'app');