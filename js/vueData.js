

	var app = new Vue({
		el: '#app',
		data: {
			title:'',
			details: '',
			error: false,
			successText:'',
			selectedNote: 0,
			errorText: '',
			search:'',
			noteLists: []

		},
		mounted(){		

			/*data fetch from database from API via axios*/

			let vm = this;	
			vm.fetchNotes();
		},
		methods: {
			searchData(){
				let vm = this;					

				axios.get('http://localhost/vuejs/api/search.php?search='+vm.search)
				.then(function (response) {
					vm.noteLists = response.data;
									
					
					/*alert (JSON.stringify(response.data.data[0].id));*/
					//alert(JSON.stringify(response,null, 4));
				})
				.catch(function(error) {
					console.log(error);
				})	

			},
			noteAdd(){
				/*alert('message?: DOMString');*/
				let title = this.title;
				let details = this.details;
				var vm = this;

				if(title.length> 0 && details.length > 0){

					/*let singleNote ={
						'title': title,
						'details': details,
						'author_id': 1
					}*/
					const singleNote = new URLSearchParams();
					singleNote.append('title', title);
					singleNote.append('details', details);
					singleNote.append('author_id', 1);

					axios.post('http://localhost/vuejs/api/add-note.php', singleNote)
					.then(function (response) {
						vm.fetchNotes();
						
					})
					.catch(function (error) {
						console.log(error);
					});

					
					this.successText = "Successfully Added Note";
					this.title ="";
					this.details ="";
					this.errorText ="";
					

				}
				else{
					this.error= true;
					this.successText="";
					this.errorText="Error Happends, please input correctly!"
					return;
				}
			},
			editNote(noteIndex){
				/*alert(noteIndex);*/
				$('#editModal').modal('show');

				let vm = this;	
				vm.selectedNote = noteIndex;

				axios.get('http://localhost/vuejs/api/show-note.php?id='+noteIndex)
				.then(function (response) {
					console.log(response);
					vm.title = response.data.data[0].title;
					vm.details = response.data.data[0].details;					
					
					/*alert (JSON.stringify(response.data.data[0].id));*/
					//alert(JSON.stringify(response,null, 4));
				})
				.catch(function(error) {
					console.log(error);
				})				
			},	

			
			updateNote(){				
				let title = this.title;
				let details = this.details;
				var vm = this;
				if(title.length> 0 && details.length > 0){
					const singleNote = new URLSearchParams();
					singleNote.append('title', title);
					singleNote.append('details', details);
					singleNote.append('author_id', 1);
					singleNote.append('id', vm.selectedNote);

					axios.post('http://localhost/vuejs/api/edit-note.php', singleNote)
					.then(function (response) {						
						vm.successText = "Note Update Successfully";
						vm.title ="";
						vm.details ="";
						vm.errorText ="";
						$('#editModal').modal('hide');	
						vm.fetchNotes();					
					})
					.catch(function (error) {
						console.log(error);
					});

				}
				else{
					this.error= true;
					this.successText="";
					this.errorText="Error Happends, please input correctly!"
					return;
				}
			},

			deleteNote(noteIndex){
				/*alert(noteIndex);*/
				var vm = this;

				const singleNote = new URLSearchParams();
				singleNote.append('id', noteIndex);					

				axios.post('http://localhost/vuejs/api/delete-note.php', singleNote)
				.then(function (response) {
					vm.fetchNotes();
				})
				.catch(function (error) {
					console.log(error);
				});

				
				/*vm.noteLists.data.splice(noteIndex, 1);*/				
				this.successText = "Delete Note Successfully!!";
				this.title ="";
				this.details ="";
				this.errorText ="";
			},		

			fetchNotes(){
				var vm = this;	
				axios.get('http://localhost/vuejs/api/notes.php')
				.then(function (response) {
					vm.noteLists = response.data;
					console.log(response.data);
					/*alert(response.data);*/

				})
				.catch(function (error) {
					console.log(error);
				})
			}		

			
		}
		
	})

