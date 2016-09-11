<template>
  <div class="login-container">        
    <div class="login-box animated fadeInDown">
      <div class="login-logo"></div>
      <div class="login-body">
        <div class="login-title"><strong>Welcome</strong>, Please login</div>
        <form action="index.html" class="form-horizontal" method="post">
          <div class="form-group" v-show="!valid_creds && valid_creds !== null">
            <span class="col-md-12 help-block text-danger" style="text-align: center;">Your username or password are invalid</span>
          </div>
          <div class="form-group">
            <div class="col-md-12">
              <input type="text" class="form-control" placeholder="Username" v-model="credential.user_name"/>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-12">
              <input type="password" class="form-control" placeholder="Password" v-model="credential.password"/>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-6">
              <a href="#" class="btn btn-link btn-block">Forgot your password?</a>
            </div>
            <div class="col-md-6">
              <button class="btn btn-info btn-block" @click.prevent="login()">Log In</button>
            </div>
          </div>
        </form>
      </div>
    </div>            
  </div>
</template>

<script>
import auth from '../auth'
  
export default {
  data(){
    return {
      credential: {
        user_name: '',
        password: ''
      },

      valid_creds: null
    }
  },

  methods:{
    login(){
      auth.login(this, this.credential, '/')
      .then(
        (response) => {
          this.valid_creds = true;
        }, 
        (err) => {
          this.valid_creds = false;
        }
      );
    }
  }
}
</script>