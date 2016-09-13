import Vue from 'vue'
import VueRouter from 'vue-router'
import VueResource from 'vue-resource'
import App from './components/App.vue'
import Signin from './components/Signin.vue'
import { currency } from './currency'
import auth from './auth';
import { onresize } from './ui/actions.js';

Vue.use(VueRouter)
Vue.use(VueResource)

Vue.filter('currency', currency)

Vue.directive('demo', {
  bind: function () {
    console.log('demo bound!');
  },
  update: function (newValue, oldValue) {
    console.log('show:  ');
    onresize();
  },
  unbind: function () {
    // do clean up work
    // e.g. remove event listeners added in bind()
  }
});

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
