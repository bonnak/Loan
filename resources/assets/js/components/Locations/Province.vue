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
			    :filter-key="searchQuery"

			    @show-modal="onShowModal">
			  </tbl-grid>
			  <button type="button" class="btn btn-primary" @click.prevent="showFormNew()">Add New</button>
	  </div>
  </div>   
  <modal-box :title="'Province'" 
  						:modal-id="'modal-box-edit'"
  						@close-modal="onCloseModal">
  	<div class="alert alert-danger" v-show="error.has_error">
        {{ error.message }}
    </div>
  	<form class="form-horizontal">   
  		<div class="form-group">
        <label class="col-md-2 control-label">Code</label>
        <div class="col-md-10">
          <input type="text" class="form-control" v-model="form_data.code">
        </div>
      </div>                                 
      <div class="form-group">
        <label class="col-md-2 control-label">Name EN</label>
        <div class="col-md-10">
          <input type="text" class="form-control" v-model="form_data.name_en">
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-2 control-label">Name KH</label>
        <div class="col-md-10">
          <input type="text" class="form-control" v-model="form_data.name_kh">
        </div>
      </div>
      <input type="hidden" v-model="form_data.id">
  	</form>
  	<button type="button" class="btn btn-primary" slot="footer" @click="saveEdit(form_data)">Save</button> 
  </modal-box> 

  <modal-box :title="'Province'" 
  						:modal-id="'modal-box-new'"
  						@close-modal="onCloseModal">
  	<div class="alert alert-danger" v-show="error.has_error">
        {{ error.message }}
    </div>
  	<form class="form-horizontal">                                    
      <div class="form-group">
        <label class="col-md-2 control-label">Code</label>
        <div class="col-md-10">
          <input type="text" class="form-control" v-model="form_data.code">
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-2 control-label">Name EN</label>
        <div class="col-md-10">
          <input type="text" class="form-control" v-model="form_data.name_en">
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-2 control-label">Name KH</label>
        <div class="col-md-10">
          <input type="text" class="form-control" v-model="form_data.name_kh">
        </div>
      </div>
      <input type="hidden" v-model="form_data.id">
  	</form>
  	<button type="button" class="btn btn-primary" slot="footer" @click="insertNew(form_data)">Save</button> 
	</modal-box>  
</template>

<script>
import TblGrid from '../_partials/TblGrid.vue'
import ModalBox from '../ModalBox.vue'

export default{
	components:{
		TblGrid,
		ModalBox
	},

	data(){
		return {
			provinces: [],
			searchQuery: '',
	    columns: ['code', 'name_en', 'name_kh'],
	    form_data: {
	    	id: null,
	    	code: '',
	    	name_en: '',
	    	name_kh: ''
	    },
	    error: {
	    	has_error: false,
	    	message: ''
	    }
		}
	},

	created(){
		this.getProvinces();
	},

	methods: {	
		onShowModal(data){
			this.form_data.id = data.id;
			this.form_data.code = data.code;
			this.form_data.name_en = data.name_en;
			this.form_data.name_kh = data.name_kh;

			$('#modal-box-edit').modal();
		},

		onCloseModal(data){
			this.emptyFormData();
			this.resetError();
		},

		emptyFormData(){
			this.form_data.id = null;
			this.form_data.code = '';
			this.form_data.name_en = '';
			this.form_data.name_kh = '';
		},

		resetError(){
			this.error.has_error = false;
			this.error.message = '';
		},

		emptyProvinces(){
			this.provinces.splice(0, this.provinces.length);
		},

		getProvinces(){
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

		saveEdit(form_data){
			this.$http.put('/api/province/update', form_data)
			.then(
				(response) => {
					$('#modal-box-edit').modal('hide');

					//Update province
					var province = this.provinces.find(function(p){ return p.id == response.data.id; });
					province.code = response.data.code;
					province.name_en = response.data.name_en;
					province.name_kh = response.data.name_kh;

					//Update error status
					this.resetError();
	      },
	      (error) => {
					this.error.has_error = true;
			    this.error.message = error.data.message;
	      }
			);
		},

		showFormNew(){
			$('#modal-box-new').modal();
		},

		insertNew(form_data){
			this.$http.post('/api/province/store', form_data)
			.then(
				(response) => {
					$('#modal-box-new').modal('hide');
					this.emptyProvinces();
					this.getProvinces();
					this.resetError();
	      },
	      (error) => {
	      	this.error.has_error = true;
			    this.error.message = error.data.message;
	      }
			);
		}
	}
}
</script>

<style scoped>
.alert{
	text-align: center;
	line-height: 10px;
	float: none;
}
</style>