<template>
  <div class="message-box animated fadeIn open" data-sound="alert" id="mb-signout">
    <form class="form-horizontal" v-on:submit.prevent="submit">  
      <div class="mb-container" style="top: 25%">
          <div class="mb-middle">
              <div class="mb-title"><span class="fa fa-sign-in"></span> User <strong>Authentication</strong></div>
              <div class="mb-content">
                  <div class="form-group">
                    <span class="col-md-12 help-block" :class="auth.user.authenticated ? 'text-success' : 'text-danger'" style="text-align: center;">{{ auth.response.text }}</span>
                  </div>
                  <div class="form-group">                      
                      <label class="col-md-3 control-label">User Account</label>
                      <div class="col-md-6">                                            
                          <div>
                              <input type="text" class="form-control" v-model="credentials.user_name"/>
                          </div>                                            
                      </div>
                  </div>               
                  <div class="form-group">
                      <label class="col-md-3 control-label">Password</label>
                      <div class="col-md-6">                                            
                          <div>
                              <input type="password" class="form-control" v-model="credentials.password"/>
                          </div>                                            
                      </div>
                  </div>
              </div>
              <div class="mb-footer">
                  <div style="margin-left: 400px;">
                      <button type="submit" class="btn btn-success btn-lg">Log in</button>
                  </div>
              </div>
          </div>
      </div>
    </form>
  </div>
</template>

<script>
import auth from '../auth'

export default {
  data() {
    return {
      credentials: {
        user_name: '',
        password: ''
      },

      auth
    }
  },

  methods: {
    submit() {
      auth.login(this, this.credentials, '/');
    }
  },

  route: {
    activate: function (transition) {
      if(auth.checkAuth()){
        var path = transition.from.path === undefined ? '/' : transition.from.path; 
        transition.redirect(path);
      }  
      else{
        transition.next();
      }    
    }
  }

}
</script>