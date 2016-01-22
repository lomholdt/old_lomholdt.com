
new Vue({
	el: '#app',
	data: {
		message: "If you can see this, Vue.js is running..."
	},

	created: function(){
		this.hentVasketider();

	},

	methods: {
		hentVasketider: function(){
			console.log("Called hentVasketider()");

			var result = $.ajax({
				method: "GET",
				url: 'http://77.75.165.217:2001/Status.asp',
				// url: 'http://swapi.co/api/people/1/?format=json',
				// url: 'http://saniva.dk/vasketur.html',
				dataType: "json"
			});

			console.log(result);


		}

	}
})




