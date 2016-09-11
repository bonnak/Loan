import Vue from 'vue'
import VueRouter from 'vue-router'
import VueResource from 'vue-resource'
import App from './components/App.vue'
import Signin from './components/Signin.vue'
import { currency } from './currency'
import auth from './auth';

Vue.use(VueRouter)
Vue.use(VueResource)

Vue.filter('currency', currency)

const router = new VueRouter({
  saveScrollPosition: true,
  transitionOnLoad: true,
  linkActiveClass: 'is-active'
});

router.map({
	'/':{
		component: { template: 'A'}
	}
});

router.start({

	data() {
		return {
			current_view: ''
		}    
  },

  components: {
    Signin,
    App
  },

  ready(){
  	if(auth.checkAuth()){
  		this.current_view = 'App';
  	}
  	else{
  		this.current_view = 'Signin';
  	}
  }
}, '#app');
