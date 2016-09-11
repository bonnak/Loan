<template>
	<div class="panel panel-default">
    <component :is="current_view"></component>
	</div>
</template>

<script>
import Province from './Province.vue'

export default{
	components:{
		Province
	},
	
	data(){
		return{
			current_view: 'Province'
		}
	}
}
</script>