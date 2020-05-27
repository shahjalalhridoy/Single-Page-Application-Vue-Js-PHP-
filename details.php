<?php
include 'Note.php';
if(isset($_REQUEST['id'])){
	$id = $_REQUEST['id'];
	$note = new Note();
	$noteData = $note->findNotes($id);
	//echo json_encode(['status'=> 'success', 'data'=> $noteData]);
	json_encode(['status'=> 'success', 'data'=> $noteData]);
	/*print_r($noteData);*/
}
?>

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

	<link rel="stylesheet" href="../css/main.min.css">
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/color.css">
	<link rel="stylesheet" href="../css/responsive.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css">


	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<!-- <script type="text/javascript" src="js/vue.js"></script> -->

	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.min.js"></script>
	<link rel="stylesheet" href="css/style.css">

	<link rel="stylesheet" type="text/css" href="https://static.addtoany.com/menu/page.js">

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
					<a href="newsfeed.html" title=""><img src="images/logo.gif" alt=""></a>
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
			
		</div>


		<div class="" style="padding: 12px 25px; color: #19AAF8">

			<h3><img src="images/logo3.png" alt="চিরকুট" style="height: 30px;"> চিরকুট</h3>


		</div>

		<section>
			<div class="gap gray-bg">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="row merged20" id="page-contents">
								<div class="col-lg-12">
									<aside class="sidebar static right">
										<div class="widget">

											<div class="float-right" style="padding: 2%; color: #19AAF8">
												<a href="https://chirkut.brainbirdsbd.com/">হোম পেজ</a> |
												<a href="#">চিরকুট কি?</a> |
												<a href="#">যোগাযোগ</a>
											</div>
										</div>
									</aside>
								</div>	

								<!-- <div class="col-sm-12" >
									<div class="widget">
										<div  style="padding: 4% 10px 5px; color: #19AAF8">
											<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5ea42a73ed545736"></script>
											<div class="addthis_inline_share_toolbox"></div>
										</div>
									</div>
								</div> -->

<?php
															$i=1;
															foreach ($noteData as $row) {
																$id= $row->id;
																?>

							<div class="col-lg-12">
							<aside class="sidebar static left">
								<div class="col-lg-12">
								<div class="widget">
									<div class="top-search" style="float: left;
									margin:11px;
									text-align: left;
									width: 50%;">
									
										<h4 style="align-items: center;font: 22px 'Roboto'; color: <?php echo $row->title; ?>">Chirkut #<?php echo $row->id; ?></h4>
									
								</div>
								<div class="float-right" style="padding: 2%; color: #19AAF8">
									<div  style="padding: ; color: #19AAF8">
											<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5ea42a73ed545736"></script>
											<div class="addthis_inline_share_toolbox"></div>
										</div>
								</div>
							</div>


						</aside>
					</div>	



								<!-- add post new box -->
								<div class="col-lg-12">

											<div class="user-post">	

												<div class="container-fluid">
													<div class="row" >
														<style type="text/css">
															@import url(https://fonts.googleapis.com/css?family=Gloria+Hallelujah);
															@import "compass/css3";

															* {
																-webkit-box-sizing: border-box; 
																-moz-box-sizing: border-box; 
																box-sizing: border-box; 
															}

															::-moz-selection {
																background: #C6FF91;
																text-shadow: none;
															}

															::selection {
																background: #C6FF91;
																text-shadow: none;
															}

															.clearfix:before,
															.clearfix:after {
																content: " ";
																display: table;
															}

															.clearfix:after {
																clear: both;
															}

															.clearfix {
																*zoom: 1;
															}
															body {
																/* background: url(https://i.imgur.com/2BdQt0g.jpg);  */
																margin:0;
																padding:0; 
															}

															.wrapper {
																margin: 60px auto 0 auto; 
															}

															/* Note styles */
															.note-wrap {
																width: 100%;
																min-height: 235px;
																padding: 35px; 
																margin: 0 22px 44px 22px;
																position: relative;
																font-size: 30px;
																vertical-align: top;
																display: inline-block;
																font-family: Englebert, Arial;
																color:#4b453c;
																background: #F7E999;
																line-height: 34px; 
																text-align: center;
																box-shadow: 0 4px 5px rgba(0, 0, 0, 0.2);
																&:before  {
																	display: block;
																	content: ""; 
																	background: rgba(227, 200, 114, 0.40);
																	width: 130px;
																	height: 28px;
																	box-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);
																	border-radius: 6px/18px 0;
																	position: absolute;
																	top: -13px;
																	left: 50px;
																	-webkit-transform: rotate(-2deg);
																	-moz-transform: rotate(-2deg);
																	-o-transform: rotate(-2deg);
																	-ms-transform: rotate(-2deg);
																	transform: rotate(-2deg);
																}
																& a {
																	color:#6b824f;
																	text-decoration: none;
																	font-size: 20px; 
																	-webkit-transition: all 0.4s ease;
																	-moz-transition: all 0.4s ease;
																	-o-transition: all 0.4s ease;
																	-ms-transition: all 0.4s ease;
																	transition: all 0.4s ease;
																	&:hover {
																		color:#D83A25;
																	}
																}
															}

															.note-yellow {
																background: #F7E999;
																-webkit-transform: rotate(2deg);
																-moz-transform: rotate(2deg);
																-o-transform: rotate(2deg);
																-ms-transform: rotate(2deg);
																transform: rotate(2deg);
															}
															.note-blue {
																background: #b9dcf4;
																-webkit-transform: rotate(-2deg);
																-moz-transform: rotate(-2deg);
																-o-transform: rotate(-2deg);
																-ms-transform: rotate(-2deg);
																transform: rotate(-2deg);
															}
															.note-pink {
																background: #FFBDA3;
																-webkit-transform: rotate(1deg);
																-moz-transform: rotate(1deg);
																-o-transform: rotate(1deg);
																-ms-transform: rotate(1deg);
																transform: rotate(1deg);
															}
															.note-green {
																background: #CAF4B9;
																-webkit-transform: rotate(-1deg);
																-moz-transform: rotate(-1deg);
																-o-transform: rotate(-1deg);
																-ms-transform: rotate(-1deg);
																transform: rotate(-1deg);
															}

														</style>

														<div class="wrapper clearfix">
															

								<!-- <h4 style="align-items: center;font: 22px 'Gloria Hallelujah'; color: <?php echo $row->title; ?>">Chirkut #<?php echo $row->id; ?>
																	
								<div class="widget">
									<div  style="padding: 4% 10px 5px; color: #19AAF8">
											<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5ea42a73ed545736"></script>
											<div class="addthis_inline_share_toolbox"></div>
									</div>
								</div>
								</h4><hr /> -->

																<aside class="note-wrap note-yellow" style="background: <?php echo $row->title; ?>">

																	<p style="font: 20px 'Roboto', cursive; color: black"><?php echo $row->details; ?></p>
																	<!-- <a href="http://youtu.be/vFYaFT0q6Uw">The Mighty Boosh</a> -->
																</aside>
															<?php }
															?>


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


<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/main.min.js"></script>
<script src="js/script.js"></script>
<script src="js/map-init.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8c55_YHLvDHGACkQscgbGLtLRdxBDCfI"></script>

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

				axios.get('http://localhost/chirkut/api/show-note.php?id='+noteIndex)
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







</body>	

</html>