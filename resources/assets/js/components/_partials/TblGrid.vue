<template>
	<table class="table datatable_simple">
    <thead>
      <tr>
        <th v-for="key in columns"
          @click="sortBy(key)"
          :class="[{active: sortKey == key}, fnSortOrder(sortOrders[key])]">
          {{key | capitalize}}
        </th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <tr v-for="
        entry in data
        | filterBy filterKey
        | orderBy sortKey sortOrders[sortKey]"
        v-render-plugin>

        <td v-for="key in columns">
          {{entry[key]}}
        </td>
        <td>
        	<button class="btn btn-info btn-tb-action active" @click.prevent="showModal(entry)"><span class="fa fa-pencil"></span></button>
        </td> 
      </tr>
    </tbody>
  </table>
  <!-- Pagination-->
  <div class="dataTables_paginate paging_simple_numbers" v-if="perPage">
  	<a class="paginate_button previous disabled">Previous</a>
  	<span>
  		<a class="paginate_button current">1</a>
  		<a class="paginate_button">2</a>
  		<a class="paginate_button">3</a>
  		<a class="paginate_button">4</a>
  		<a class="paginate_button">5</a>
  		<a class="paginate_button">6</a>
  	</span>
  	<a class="paginate_button next">Next</a>
 	</div>
 	<!-- End pagination-->
</template>

<script>
export default	{
  props: {
    data: Array,
    columns: Array,
    filterKey: String,
    perPage: { type: Number, default: null }
  },

  data() {
  	var sortOrders = {};
    this.columns.forEach(function (key) {
      sortOrders[key] = 0;
    });
    return {
      sortKey: '',
      sortOrders: sortOrders
    }
  },

  methods: {
    sortBy: function (key) {
    	var self = this;
    	this.columns.forEach(function (k) {
    		if(k != key){
    			self.sortOrders[k] = 0;
    		}
	    });   	

      this.sortOrders[key] = !this.sortOrders[key] ?  1 : this.sortOrders[key] * -1;
			this.sortKey = key; 
    },

    showModal(data){    	
			this.$dispatch('show-modal', data);
		},

		fnSortOrder(sort_order){
			if(sort_order > 0){
				return 'sorting_asc';
			}
			else if(sort_order < 0){
				return 'sorting_desc';
			}

			return '';
		}
  }
}
</script>

<style scoped>
.btn-tb-action{
	display: flex;
	align-items: center;
  justify-content: center;
  width: 32px;
  height: 32px;  
}

.btn-tb-action .fa, 
.btn-tb-action .glyphicon{
	margin-right: 0;
}
</style>