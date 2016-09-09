<template>
  <div class="page-container">
  	<sidebar></sidebar>
  	<div class="page-content">
  		<router-view></router-view>
  	</div>
  </div>
</template>

<script>
import { initJoliPlugins } from '../ui/plugins.js'
import { initJoliActions } from '../ui/actions.js'
import Sidebar from './Sidebar.vue'

export default {
  components: { 
  	Sidebar
  },

  ready(){
  	initJoliPlugins();
  	initJoliActions();

		console.log('App ready');
	}
}
</script>
