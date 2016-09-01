<template>
	<div class="message-box animated fadeIn" v-bind:class="{ 'open': is_open }" data-sound="alert" id="mb-signout">
    <div class="mb-container">
	    <div class="mb-middle">
	        <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
	        <div class="mb-content">
	            <p>Are you sure you want to log out?</p>                    
	            <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
	        </div>
	        <div class="mb-footer">
	            <div class="pull-right">
	                <a class="btn btn-success btn-lg" @click.stop.prevent="logout()">Yes</a>
	                <button class="btn btn-default btn-lg mb-control-close">No</button>
	            </div>
	        </div>
	    </div>
		</div>
	</div>
</template>

<script>
import auth from '../auth'

export default {
	data(){
		return {
			is_open: false
		}
	},

	methods: {
		logout(){
			//auth.logout();

			this.is_open = false;

			//this.$route.router.go('login');
		}
	}
}
</script>