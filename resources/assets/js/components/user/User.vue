<template>
	<component :is="currentView" 
						 @switch-view="onSwitchView"
						 @add-new-user="onAddNewUser"
						 keep-alive>						
	</component>
</template>

<script>
import UserList from './UserList.vue'
import UserNew from './UserNew.vue'

export default{
	data: function () {
		return {	
			currentView: 'UserList'
		}
	},

	components: {
		UserList,
		UserNew
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