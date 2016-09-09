<template>
  <div class="page-container">
  	<sidebar></sidebar>
  	<div class="page-content">
  		<v-nav></v-nav>
  		<router-view></router-view>
  	</div>
  </div>
</template>

<script>
import { initJoliPlugins } from '../ui/plugins.js'
import { initJoliActions } from '../ui/actions.js'
import Sidebar from './Sidebar.vue'
import VNav from './VNav.vue'

export default {
  components: { 
  	Sidebar,
  	VNav
  },

  ready(){
  	initJoliPlugins();
  	initJoliActions();
	}
}
</script>
