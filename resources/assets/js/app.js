import Vue from 'vue'
import VueRouter from 'vue-router'
import VueValidator from 'vue-validator'
import EmailValidation from './email_validation'
import Dashboard from './components/dashboard.vue'
import UserAccount from './components/user/user_view.vue'


Vue.use(VueRouter)
Vue.use(require('vue-resource'))
Vue.use(VueValidator)

Vue.validator('email', EmailValidation);

Vue.http.interceptors.push({
  request(request){
    request.headers['Authorization'] = 'Bearer ' + localStorage.getItem('token');
    request.headers['Accept'] = 'application/vnd.mob.v1+json'
    request.emulateJSON = true;

    return request
  },

  response(response) {
    return response;
  }
});

var App = Vue.extend({
	data(){
		return {
			auth: {
				user: {
					user_name: '',
					password: ''
				},
				authenticated: false,
				response_text: ''			
			}
		}
	},

	methods: {
		login(){
			this.$http.post('/api/authenticate', this.auth.user)
			.then(
				(response) => {
		      localStorage.setItem('token', response.data.token);

		      this.setRosponse(response);	

		      window.location.href = '/';
		    }, 
		    (err) => {
		    	this.setRosponse(err);		      
		    }
	    );
		},

		setRosponse(response){
			switch(response.status){
    		case 401:
    			this.auth.authenticated = false;
    			this.auth.response_text = 'Username/Password is invalid.';
    			break;

    		case 500:
    			this.auth.authenticated = false;
    			this.auth.response_text = 'Something went wrong while authenticating.';
    			break;

    		case 200:
    			this.auth.authenticated = true;
    			this.auth.response_text = 'Login successfully.';
    			break;
    	}
		}
	}
});

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