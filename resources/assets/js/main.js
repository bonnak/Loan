import Vue from 'vue'
import VueRouter from 'vue-router'
import App from './components/App.vue'
import { currency } from './currency'

Vue.use(VueRouter)

Vue.filter('currency', currency)

const router = new VueRouter({
  saveScrollPosition: true,
  transitionOnLoad: true,
  linkActiveClass: 'is-active'
});

router.map({
	'/a':{
		component: { template: 'A'}
	},

	'/b': {
		component: { template: 'B' }
	}
});

router.start(App, '#app');
