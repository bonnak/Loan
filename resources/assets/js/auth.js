export default {

  // User object will let us check authentication status
  user: {
    authenticated: false
  },

  response: {
    text: '',
    code: ''
  },

  // Send a request to the login URL and save the returned JWT
  login(context, creds, redirect) {
    context.$http.post('/api/authenticate', creds)
    .then(
      (response) => {
        localStorage.setItem('token', response.data.token);

        this.user.authenticated = true;

        this.response = { text: response.data.text, code: response.status};

        // Redirect to a specified route
        if(redirect) {
          context.$route.router.go(redirect);       
        }
      }, 
      (err) => {
        context.error = err; 

        this.response = { text: err.data.error, code: err.status};
      }
    );
  },

  // To log out, we just need to remove the token
  logout() {
    localStorage.removeItem('token');
    this.user.authenticated = false;
  },

  checkAuth() {
    var jwt = localStorage.getItem('token');
    if(jwt) {
      this.user.authenticated = true
    }
    else {
      this.user.authenticated = false      
    }

    return this.user.authenticated;
  },

  // The object to be passed as a header for authenticated requests
  getAuthHeader() {
    return {
      'Authorization': 'Bearer ' + localStorage.getItem('token')
    }
  }
}