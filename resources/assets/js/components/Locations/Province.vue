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
	      <table class="table datatable_simple">
	          <thead>
	              <tr>
                  <th>Code</th>
                  <th>Name_EN</th>
                  <th>Name_KH</th>
                  <th>Action</th>
	              </tr>
	          </thead>
	          <tbody>
	              <tr v-for="province in provinces" v-render-plugin>
                  <td>{{ province.code }}</td>
                  <td>{{ province.name_en }}</td>
                  <td class="kh">{{ province.name_kh }}</td>   
                  <td>
                  	<button class="btn btn-info btn-tb-action active" @click.prevent="showModal()"><span class="fa fa-pencil"></span></button>
                  </td>               
	              </tr>               
	          </tbody>
	      </table>
	  </div>
  </div>
</template>

<script>
export default{
	data(){
		return {
			provinces: [],
			v_test: 0
		}
	},

	created(){
		this.$http.get('/api/provinces')
		.then(
			(response) => {
				this.provinces = response.data.provinces;
      },
      (error) => {
        console.log(error);
      }
		);
	},

	methods: {
		showModal(){
			$('#modal-box').modal();
		}		
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