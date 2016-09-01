<template>
	<!-- START PAGE CONTAINER -->
  <div class="page-container">    

    <!-- START PAGE SIDEBAR -->
    <sidebar></sidebar>
    <!-- END PAGE SIDEBAR -->

    <!-- PAGE CONTENT -->
    <div class="page-content">
		  <!-- START BREADCRUMB -->
		  <ul class="breadcrumb">
		      <li><a href="#">Home</a></li>                    
		      <li class="active">Dashboard</li>      
		  </ul>
		  <!-- END BREADCRUMB -->  

		  <router-view></router-view>

		</div>
    <!-- END PAGE CONTENT -->
  </div>
  <!-- END PAGE CONTAINER -->

  <!-- LOGOUT BOX-->
  <Logout></Logout>
  <!-- END LOGOUT BOX-->
</template>

<script>
import store from '../vuex/store'
import Sidebar from './Sidebar.vue'
import Logout from './Logout.vue'

export default {

	store,

	components: {
		Sidebar,
		Logout
	}
}
</script>