export default {
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
		      //localStorage.setItem('token', response.data.token);

		      this.setCookie("token", response.data.token, 30);

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
		},

		setCookie(cname, cvalue, exdays) {
	    var d = new Date();
	    d.setTime(d.getTime() + (exdays*24*60*60*1000));
	    var expires = "expires="+d.toUTCString();
	    document.cookie = cname + "=" + cvalue + "; " + expires;
		}
	}
}