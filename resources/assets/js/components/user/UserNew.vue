<template>
  <validator name="validation">
  	<form class="form-horizontal" novalidate>
  		<div class="panel panel-default">
  			<div class="panel-heading">
          <h3 class="panel-title">User Form</h3>
          <ul class="panel-controls">
              <li><a @click.stop.prevent="closeForm" class="panel-remove"><span class="fa fa-times"></span></a></li>
          </ul>
        </div>
  			<div class="panel-body">							
  					<div class="form-group">
              <label class="col-md-3 col-xs-12 control-label">User Account</label>
              <div class="col-md-6 col-xs-12">                                            
                  <div>
                      <input type="text" 
                            class="form-control" 
                            v-model="user.user_name" 
                            debounce="500" 
                            v-validate:user_name="{
                              required: {rule: true, message: 'Required' }, 
                              exist: { rule: true }
                            }"
                            initial="off"/>
                  </div> 
                  <div v-if="$validation.user_name.invalid">
                    <span class="help-block text-danger" v-for="error in $validation.user_name.errors">
                      {{ error.message }}
                    </span>
                  </div>
              </div>
            </div>
            <div class="form-group">                                        
              <label class="col-md-3 col-xs-12 control-label">Email</label>
              <div class="col-md-6 col-xs-12">
                  <div>
                      <input type="email" 
                            class="form-control" 
                            v-model="user.email"
                            v-validate:email="{
                              required: {rule: true, message: 'Required' },
                              email: { rule: true, message: 'Invalid email address'}
                            }"
                            initial="off"/>
                  </div>  
                  <div v-if="$validation.email.invalid">
                    <span class="help-block text-danger" v-for="error in $validation.email.errors">
                      {{ error.message }}
                    </span>
                  </div>          
              </div>
          	</div>
            <div class="form-group">
              <label class="col-md-3 col-xs-12 control-label">Full Name</label>
              <div class="col-md-6 col-xs-12">                                            
                  <div>
                      <input type="text" 
                            class="form-control" 
                            v-model="user.full_name"
                            v-validate:full_name="{
                              required: {rule: true, message: 'Required' }
                            }"
                            initial="off"/>
                  </div>
                  <div v-if="$validation.full_name.invalid">
                    <span class="help-block text-danger" v-for="error in $validation.full_name.errors">
                      {{ error.message }}
                    </span>
                  </div>                                            
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 col-xs-12 control-label">Role</label>
              <div class="col-md-6 col-xs-12">  
                <div>                                                                                         
                  <select class="form-control" 
                          v-model="user.role_id" 
                          v-validate:role="{
                            required: {rule: true, message: 'Required' }
                          }" 
                          initial="off">
                      <option value="1">Adminstrator</option>
                      <option value="2">Accountant</option>
                  </select>
                </div>  
                <div v-if="$validation.role.invalid">
                  <span class="help-block text-danger" v-for="error in $validation.role.errors">
                    {{ error.message }}
                  </span>
                </div> 
              </div>              
          	</div>						
  			</div>
  			<div class="panel-footer">
          <button class="btn btn-default" @click.stop.prevent="clearInput">Clear</button>                                    
          <button class="btn btn-primary pull-right" v-on:click.stop.prevent="saveUser">Save</button>
        </div>
  		</div>
  	</form>
  </validator>
</template>

<script>
export default{
	data: function () {
		return {	
			user: {		
				user_name : '',
				email: '',
				full_name: '',
				role_id: ''
			}
		}
	},

	methods: {
		saveUser(){			
			var resource = this.$resource('/api/user');

			resource.save(this.user).
      then((response) => {          
          // this.$dispatch('add-new-user', { view: 'UserList' });
          this.clearInput();          
  		});
		},

    clearInput(){
      // Clear input fields.
      this.user.user_name = '';
      this.user.email = '';
      this.user.full_name = '';
      this.user.role_id = '';
    },

  	closeForm(){
  		this.$dispatch('switch-view', 'UserList');
      this.clearInput();
  	},

    checkUserNameExist(user_name){
      return this.$http.get('/api/user/' + user_name)
      .then(
        (response) => {
          return response.data > 0 ? Promise.reject('User already exist') : Promise.resolve();
        },
        (error) => {
          return Promise.reject('unexpected error');
        }
      );
    }
	},

  validators: {
    exist (user_name){
      return user_name == '' ? true : this.vm.checkUserNameExist(user_name);
    }
  } 
}
</script>

<style>
</style>