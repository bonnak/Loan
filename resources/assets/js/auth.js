import { getCookie, setCookie, deleteCookie } from './functions';

export default {

  response: {
    text: '',
    code: ''
  },

  // Send a request to the login URL and save the returned JWT
  login(context, creds, redirect) {
    var rest = context.$http.post('/api/authenticate', creds);

    rest.then(
      (response) => {
        setCookie('token', response.data.token);

        this.response = { text: response.data.text, code: response.status};

        // Redirect to a specified route
        if(redirect) {
          //context.$route.router.go(redirect);  
          window.location.href = redirect;     
        }
      }, 
      (err) => {
        this.response = { text: err.data.error, code: err.status};
      }
    );

    return rest;
  },

  // To log out, we just need to remove the token
  logout() {
    deleteCookie('token');
    window.location.href = '/';  
  },

  checkAuth() {
    var jwt = getCookie('token');
    if(jwt) {
      return true;
    }

    return false;
  },

  // The object to be passed as a header for authenticated requests
  getAuthHeader() {
    return {
      'Authorization': 'Bearer ' + getCookie('token')
    }
  }
}