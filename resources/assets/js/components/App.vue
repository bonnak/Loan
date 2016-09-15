<template>
  <div class="page-container">
  	<sidebar></sidebar>
  	<div class="page-content">
  		<v-nav></v-nav>
  		<router-view></router-view>
  	</div>
  </div>
  <signout></signout>
  <modal-box></modal-box>
</template>

<script>
import { initJoliPlugins } from '../ui/plugins.js'
import { initJoliActions } from '../ui/actions.js'
import Sidebar from './Sidebar.vue'
import VNav from './VNav.vue'
import Signout from './Signout.vue'
import ModalBox from './ModalBox.vue'

export default {
  components: { 
  	Sidebar,
  	VNav,
  	Signout,
    ModalBox
  },

  ready(){
  	initJoliPlugins();
  	initJoliActions();
	}
}
</script>

<style>
.kh{
  font-family: "Hanuman";
  font-size: 14px
}
</style>
