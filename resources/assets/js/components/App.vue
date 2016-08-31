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
</template>

<script>
import auth from '../auth'
import Sidebar from './Sidebar.vue'

export default {
	mixins:[auth],

	components: {
		Sidebar
	}
}
</script>