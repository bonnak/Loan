<template>
	<component :is="currentView" 
						 :users.sync="users"
						 @switch-view="onSwitchView"
						 @add-new-user="onAddNewUser"
						 keep-alive>						
	</component>
</template>

<script>
import user_grid from './user_list.vue'
import user_form from './user_form.vue'

export default{
	data: function () {
		return {	
			currentView: 'user_grid'
		}
	},

	components: {
		user_grid,
		user_form
	},

	ready: function() {  	
  },

  methods: {
  	onSwitchView(view){
  		this.currentView = view;
  	},

  	onAddNewUser(data){
  		this.currentView = data.view;

  		this.$broadcast('reload-users');
  	}
  }
}
</script>