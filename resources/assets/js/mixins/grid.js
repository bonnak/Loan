export default {
	data: function(){
		return {
			pagination: {
        current_page: '',
        from: '',
        to: '',
        per_page: '',
        last_page: '',
        total: '',
        next_page_url: '',
        prev_page_url: ''
      },
			check_all: false,
			checked_list: []
		}
	},

	methods: {
		onSelectAll(data_set){
  		if(this.check_all === true){
  			data_set.forEach(
          function(data){
    				this.checked_list.push(data.id + '');
    			}.bind(this)
        );
  		}
  		else{
  			this.checked_list.splice(0);
  		}
  		
  	},

  	onSelectItems(){
  		this.check_all = false;
  	},

  	setPagination(pagination){
  		this.pagination.current_page = pagination.current_page;
  		this.pagination.from = pagination.from;
  		this.pagination.to = pagination.to;
  		this.pagination.per_page = pagination.per_page;
  		this.pagination.total = pagination.total;
  		this.pagination.last_page = pagination.last_page;
  		this.pagination.next_page_url = pagination.next_page_url;
  		this.pagination.prev_page_url = pagination.prev_page_url;
  	},

  	fetchData(api_url, success){
      this.$http.get(
        api_url
      ).then(success);
  	},
  	
		previous(){
			if(this.pagination.current_page === 1) return;

  		this.fetchData(this.pagination.prev_page_url, this.success);	
  	},

  	next(){
			if(this.pagination.current_page === this.pagination.last_page) return;

  		this.fetchData(this.pagination.next_page_url, this.success);
  	},

  	goTo(page){
      var api = (this.pagination.next_page_url !== null ? 
                          this.pagination.next_page_url : 
                          this.pagination.prev_page_url);

      api = api.substr(0, api.indexOf('?'));

  		this.fetchData(api + '?page=' + page, this.success);
  	}
	}
}