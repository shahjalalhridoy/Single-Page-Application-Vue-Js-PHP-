<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">


	<meta name="keywords" content="Chikut anonymous content writing, secret writer, note status, share your own words">
	<meta name="description" content="Chikut anonymous content writing, secret writer, note status, share your own words">
	<meta name="author" content="Chirkut">


	<title>Chirkut | চিরকুট</title>
	<link rel="icon" href="images/logo3.png" type="image/png" sizes="16x16"> 

	<link rel="stylesheet" href="css/main.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/color.css">
	<link rel="stylesheet" href="css/responsive.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
	<link rel="stylesheet" type="text/css" href="css/custom2.css">



	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
	<script type="text/javascript" src="js/vue.js"></script>

	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.min.js"></script>
	<link rel="stylesheet" href="css/style.css">

	<link rel="stylesheet" type="text/css" href="https://static.addtoany.com/menu/page.js">


<link rel="stylesheet" type="text/css" href="css/bootstrap-colorselector.css" />

<script src="js/bootstrap-colorselector.js "></script>


<!-- <link href="lib/bootstrap-3.0.3/css/bootstrap.min.css" rel="stylesheet" /> -->

<link href="lib/bootstrap-colorselector-0.2.0/css/bootstrap-colorselector.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="css/docs.css" />
<link rel="stylesheet" type="text/css" href="css/prettify.css" />


<style type="text/css">
	@media (min-width: 1800px)
.container, .container-lg, .container-md, .container-sm, .container-xl {
    max-width: 1989px;
}
</style>
</head>
<body>
	<div class="theme-layout" id="app">
		<div class="postoverlay"></div>
		<div class="responsive-header">
			<div class="mh-head first Sticky">
				<span class="mh-btns-left">
					<a class="" href="#menu"><i class="fa fa-align-justify"></i></a>
				</span>
				<span class="mh-text">
					<a href="newsfeed.html" ><img src="images/logo.gif" alt=""></a>
				</span>
				<span class="mh-btns-right">
					<a class="fa fa-sliders" href="#shoppingbag"></a>
				</span>
			</div>
			<div class="mh-head second">
				<form class="mh-form">
					<input placeholder="search" />
					<a href="#/" class="fa fa-search"></a>
				</form>
			</div>
			<nav id="shoppingbag">
			</nav>
		</div>

<!-- 		<div class="topbar stick">
	<div class="logo">চিরকুট
		<a title="" href="#"><img src="images/logo.gif" alt=""></a>
	</div>
</div> -->

<div class="" style="padding: 12px 25px; color: #19AAF8">

	<h3><img src="images/logo3.png" alt="চিরকুট" style="height: 30px;"> চিরকুট</h3>


</div>

<section>
	<div class="gap gray-bg">
		<div class="container" style="max-width: 1800px">
			<div class="row">
				<div class="col-lg-12">
					<div class="row merged20" id="page-contents">	
						<div class="col-lg-6">
							<aside class="sidebar static left">
								<div class="widget">




									<div class="accordion-container">
										<div class="accordion" style="margin: 15px;">


											<button style="background: #F8EB98" class="btn btn collapsed"><i class="fa fa-chevron-down rotate"></i> Chirkut Post </button>

										</div>


										<div class="accordion-panel" style="padding: 10px;">
											<div class="central-meta new-pst">


												<div class="newpst-input">
													<form method="post">
														<textarea rows="2" placeholder="write something" v-model="details" class="postNote"></textarea>
														<div class="attachments">
															<ul>
																<li>

		<!-- <input type="color" id="favcolor" v-model="title" value="#ff0000"> -->
		<style type="text/css">
			div#colorselector_1_chosen {

    display: none !important;
}
.dropdown.dropdown-colorselector {
    float: left; !important;
    padding-left: 70%;
    !important;
}
		</style>
		<div class="">
        <select id="colorselector_1" v-model="title">
          <option value="#A0522D" data-color="#A0522D">sienna</option>
          <option value="#CD5C5C" data-color="#CD5C5C" selected="selected">indianred</option>
          <option value="#FF4500" data-color="#FF4500">orangered</option>
          <option value="17" data-color="#008B8B">darkcyan</option>
          <option value="18" data-color="#B8860B">darkgoldenrod</option>
          <option value="68" data-color="#32CD32">limegreen</option>
          <option value="42" data-color="#FFD700">gold</option>
          <option value="77" data-color="#48D1CC">mediumturquoise</option>
          <option value="107" data-color="#87CEEB">skyblue</option>
          <option value="46" data-color="#FF69B4">hotpink</option>
          <option value="47" data-color="#CD5C5C">indianred</option>
          <option value="64" data-color="#87CEFA">lightskyblue</option>
          <option value="13" data-color="#6495ED">cornflowerblue</option>
          <option value="15" data-color="#DC143C">crimson</option>
          <option value="24" data-color="#FF8C00">darkorange</option>
          <option value="78" data-color="#C71585">mediumvioletred</option>
          <option value="123" data-color="#000000">black</option>
        </select>
      </div>
		

      															<button type="submit" v-on:click="noteAdd">Post</button>
																</li>
															</ul>
														</div>
													</form>
												</div>

											</div>
										</div>
									</div>
								</div>
							</aside>
						</div>	

						<div class="col-lg-6">
							<aside class="sidebar static left">
								<div class="widget">
									<div class="top-search" style="float: left;
									margin:11px;
									text-align: left;
									width: 50%;">
									<form method="post" class="">
										<input type="text" placeholder="Search Chirkut" v-model="search" class="search-form"  @input="searchData">
									</form>
								</div>
								<div class="float-right" style="padding: 2%; color: #19AAF8">
									<a href="#">চিরকুট কি?</a> |
									<a href="#">যোগাযোগ</a>
								</div>
							</div>


						</aside>
					</div>	

				





									<!-- add post new box -->
	<div class="col-lg-12">
	<div class="user-post">
		<div class="container-fluid">
			<div class="row" >
				<div class="snote" >
					<ul>
						<li  v-for="(noteList, index) in noteLists.data">
							<a v-bind:href="'details.php?id=' +noteList.id" target="_blank" v-bind:style="{ background: `${noteList.title}` }" >
								<h4 style="align-items: center;font: 20px 'Roboto'">Chirkut #{{noteList.id}}</h4><hr />
								<p>
									<div v-if="noteList.details<70">
										<p style="align-items: center;font: 16px 'Roboto'">
											{{noteList.details}}
										</p>
									</div>
									<div v-else>
										<p style="align-items: center;font: 16px 'Roboto'">
											{{ noteList.details.substring(0,70)+" .." }}
										</p>
									</div>
								</p>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>



</div>

<!-- centerl meta -->

</div>	
</div>
</div>
</div>
</div>	
</section>

	<!-- <footer>
		
	</footer> -->
	<!-- footer -->
	<div class="bottombar">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<span class="copyright">| Chirkut ©2020 All rights reserved | Brainbirds Product</span>
					<!-- <i><img src="images/credit-cards.png" alt=""></i> -->
				</div>
			</div>
		</div>
	</div>
</div>


<script src="js/main.min.js"></script>
<script src="js/script.js"></script>
<script src="js/map-init.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8c55_YHLvDHGACkQscgbGLtLRdxBDCfI"></script>

<!-- <script src="js/vueData.js"></script> -->





<script type="text/javascript">	

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

				axios.get('http://localhost/chirkut/api/search.php?search='+vm.search)
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

				/*alert(title);*/
				if(details.length > 0){

					/*let singleNote ={
						'title': title,
						'details': details,
						'author_id': 1
					}*/
					
					const singleNote = new URLSearchParams();
					singleNote.append('title', title);
					singleNote.append('details', details);
					singleNote.append('author_id', 1);
					



					axios.post('http://localhost/chirkut/api/add-note.php', singleNote)
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

				axios.get('http://localhost/chirkut/details.php?id='+noteIndex)
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

					axios.post('http://localhost/chirkut/api/edit-note.php', singleNote)
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

				axios.post('http://localhost/chirkut/api/delete-note.php', singleNote)
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
				axios.get('http://localhost/chirkut/api/notes.php')
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

</script>


<script type="text/javascript">
	document.querySelectorAll('input[type=color]').forEach(function(picker) {

		var targetLabel = document.querySelector('label[for="' + picker.id + '"]'),
		codeArea = document.createElement('span');

		codeArea.innerHTML = picker.value;
		targetLabel.appendChild(codeArea);

		picker.addEventListener('change', function() {
			codeArea.innerHTML = picker.value;
			targetLabel.appendChild(codeArea);
		});
	});
</script>


<script type="text/javascript">
	
	$(document).ready(function(){
  $(".accordion-panel").hide();//Hide accordions 

  /* Show all/Hide all accordions onclick */
  $(".control").click(function(){
    $(".accordion-panel").stop();//Stops user from spamming button
    /* Toggle text in button and panel */
    if ($(".control").text() == "Collapse All") {
    	$(".control").text("Hide All");
      $(".accordion-panel").slideDown("slow");//Show all panels
      $(".fa-chevron-down").addClass("up"); 
  }else {
  	$(".control").text("Collapse All");
      $(".accordion-panel").slideUp("slow");//Hide all panels
      $(".fa-chevron-down").removeClass("up"); 

  }
});

  /* Slide accordion panel down onclick */
  $(".accordion").click(function(){
  	/* Select only the accordion clicked on */
  	$(this).parent().find(".fa-chevron-down").toggleClass("up"); 
  	$(this).parent().find(".accordion-panel").slideToggle("slow");
  	panelCheck();
  });

  /* Checks if all panels are closed */
  function panelCheck(){
  	/* Panels are all hidden */
  	if ($('.fa-chevron-down').hasClass("up") == false) {
  		$(".control").text("Collapse All");
  	}else{
  		$(".control").text("Hide All");
  	}
  }

});
</script>


<!--  <script src="lib/jquery-1.10.2/jquery-1.10.2.min.js"></script> -->
  <script src="lib/bootstrap-3.0.3/js/bootstrap.min.js"></script>
  <script src="lib/bootstrap-colorselector-0.2.0/js/bootstrap-colorselector.js"></script>
  <script src="lib/google-code-prettify/prettify.js"></script>

  <script>
      $(function() {

        window.prettyPrint && prettyPrint();

        $('#colorselector_1').colorselector();
        $('#colorselector_2').colorselector({
          callback : function(value, color, title) {
            $("#colorValue").val(value);
            $("#colorColor").val(color);
            $("#colorTitle").val(title);
          }
        });

        $("#setColor").click(function(e) {
          $("#colorselector_2").colorselector("setColor", "#008B8B");
        })

        $("#setValue").click(function(e) {
          $("#colorselector_2").colorselector("setValue", 18);
        })

      });
    </script>




</body>	

</html>