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
	      <table class="table datatable">
	          <thead>
	              <tr>
                  <th>Code</th>
                  <th>Name_EN</th>
                  <th>Name_KH</th>
	              </tr>
	          </thead>
	          <tbody>
	              <tr v-for="province in provinces" v-demo>
                  <td>{{ province.code }}</td>
                  <td>{{ province.name_en }}</td>
                  <td>{{ province.name_kh }}</td>                  
	              </tr>               
	          </tbody>
	      </table>
	  </div>
  </div>
</template>

<script>
// import { onresize } from '../../ui/actions.js'

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
				// this.$nextTick(function () {
	   //      onresize();
	   //    });
      },
      (error) => {
        console.log(error);
      }
		);
	}
}
</script>