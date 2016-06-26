<template>
	<form class="form-horizontal">
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
                      <input type="text" class="form-control" v-model="user.user_name" debounce="500"/>
                  </div>                                            
                  <span class="help-block text-danger" v-show="validation.user_exist">This user name already exist.</span>
              </div>
          </div>
          <div class="form-group">                                        
            <label class="col-md-3 col-xs-12 control-label">Email</label>
            <div class="col-md-6 col-xs-12">
                <div>
                    <input type="email" class="form-control" v-model="user.email"/>
                </div>            
            </div>
        	</div>
          <div class="form-group">
              <label class="col-md-3 col-xs-12 control-label">Full Name</label>
              <div class="col-md-6 col-xs-12">                                            
                  <div>
                      <input type="text" class="form-control" v-model="user.full_name"/>
                  </div>                                            
              </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 col-xs-12 control-label">Role</label>
            <div class="col-md-6 col-xs-12">                                                                                            
                <select class="form-control"  v-model="user.role_id">
                    <option value="1">Adminstrator</option>
                    <option value="2">Accountant</option>
                </select>
            </div>
        	</div>						
			</div>
			<div class="panel-footer">
        <button class="btn btn-default" @click.stop.prevent="clearInput">Clear</button>                                    
        <button class="btn btn-primary pull-right" v-on:click.stop.prevent="saveUser">Save</button>
      </div>
		</div>
	</form>
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
			},
      validation: {
        user_exist: false
      }
		}
	},

	methods: {
		saveUser(){			
			var resource = this.$resource('/api/user');

			resource.save(this.user).then(function(response){
				var user = response.data.user;
				
        this.$dispatch('add-new-user', { user : user, view: 'user_grid'});

        this.clearInput();
			});
		},

    clearInput(){
      this.user.user_name = '';
      this.user.email = '';
      this.user.full_name = '';
      this.user.role_id = '';
    },

  	closeForm(){
  		this.$dispatch('switch-view', 'user_grid');

      this.clearInput();
  	},

    checkUserNameExist(user_name){
      this.$http.get('/api/user/' + user_name)
      .then((response) => {
        this.validation.user_exist = response.data;
      });
    }
	},

  watch: {
    'user.user_name' : function(val){
      this.checkUserNameExist(val);
    }
  } 
}
</script>

<style>
</style>