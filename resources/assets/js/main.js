import Vue from 'vue'
import VueRouter from 'vue-router'
import VueResource from 'vue-resource'
import App from './components/App.vue'
import Signin from './components/Signin.vue'
import { currency } from './currency'
import auth from './auth';
import RenderPlugin from './directives/RenderPlugin';

Vue.use(VueRouter)
Vue.use(VueResource)

Vue.filter('currency', currency)

Vue.directive('RenderPlugin', RenderPlugin);

Vue.http.headers.common['Authorization'] = 'Bearer ' + auth.getAuthHeader().Authorization;

const router = new VueRouter({
  saveScrollPosition: true,
  transitionOnLoad: true,
  linkActiveClass: 'is-active'
});

router.map({
	'/location':{
		component: require('./components/locations/Index.vue')
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
