<template>
	<div class="panel panel-default">
		<div class="panel-heading">                                
	      <h3 class="panel-title">Province</h3>
	      <ul class="panel-controls">
	          <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
	          <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
	          <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
	      </ul>                                
	  </div>
	  <div class="panel-body">
	      <tbl-grid
			    :data="provinces"
			    :columns="columns"
			    :filter-key="searchQuery">
			  </tbl-grid>
	  </div>
  </div>  
</template>

<script>
import TblGrid from '../_partials/TblGrid.vue'

export default{
	components:{
		TblGrid
	},

	data(){
		return {
			provinces: [],
			searchQuery: '',
	    columns: ['code', 'name_en', 'name_kh']
		}
	},

	created(){
		this.$http.get('/api/provinces')
		.then(
			(response) => {
				var self = this;				
				response.data.provinces.forEach(function(el){
					self.provinces.$set(self.provinces.length, el);
				});
      },
      (error) => {
        console.log(error);
      }
		);
	},

	methods: {	
	}
}
</script>

<style>
.btn-tb-action{
	display: flex;
	align-items: center;
  justify-content: center;
  width: 32px;
  height: 32px;
  border-radius: 50%;  
}

.btn-tb-action .fa, 
.btn-tb-action .glyphicon{
	margin-right: 0;
}
</style>