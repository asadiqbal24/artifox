<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous"/>
		<link rel="stylesheet" type="text/css" href="{{asset('usercss/css/homepage.css')}}">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<title>HomePage</title>
		<link rel="stylesheet" type="text/css" href="{{asset('usercss/canvas_style/styles/fontselect-default.css')}}" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		
		<style type="text/css">
			.preLoadedtext{
				cursor: pointer !important;
			}
			#drop {
		width: 500px;
		height: 340px;
		background-color: #ddd;
		border: 1px solid #aaa;
		border-radius: 12px;
		margin: 3px;
		}
		#drop div.element {
		display: block;
		padding: 3px;
		padding-top: 16px;
		margin: 0;
		}
		#drop div.element form,
		#drop div.element button,
		#drop div.element input,
		#drop div.element label {
		width: 100%;
		height: 100%;
		}
		#dialog-settings {
		font-size: 62.5%;
		}
		#dialog-settings label,
		#dialog-settings input {
		display: block;
		}
		#dialog-settings input.text {
		margin-bottom: 12px;
		width: 95%;
		padding: .4em;
		}
		#dialog-settings select {
		margin-bottom: 12px;
		width: 95%;
		}
		#dialog-settings fieldset {
		padding: 0;
		border: 0;
		margin-top: 25px;
		}
		.ui-dialog .ui-state-error {
		padding: .3em;
		}
		.validateTips {
		border: 1px solid transparent;
		padding: 0.3em;
		}
		.loadedText{
		cursor: grab !important;
		}
		.square {
		height: 50px;
		width: 50px;
		background-color: #555;
		}
		.circle {
		height: 50px;
		width: 50px;
		background-color: #555;
		border-radius: 50%;
		}
		..elements {
		margin: 3px;
		padding: 6px;
		border: 1px solid #ccc;
		border-radius: 6px;
		background: #666;
		position: relative;
		}
		.elements div.element {
		display: inline-block;
		padding: 3px;
		padding-right: 6px;
		margin: 0;
		}
		.side-handle {
		display: inline-block;
		width: 10px;
		height: 20px;
		margin-bottom: -5px;
		cursor: grab;
		}
		.top-handle {
		position: absolute;
		top: 0;
		left: 50%;
		margin-left: -8px;
		cursor: grab;
		}
		.top-settings {
		position: absolute;
		top: 0;
		left: 0;
		cursor: pointer;
		}
		.top-delete {
		position: absolute;
		top: 0;
		left: 100%;
		margin-left: -16px;
		cursor: pointer;
		}
		.font48{
		font-size: 48px !important;
		}
		.fontTypeListTR{
		background-color: white;
		}
		.fontTypeList{
		padding: 5px;
		}
		</style>
	</head>
	<body>
		<header>
			<div id="brand"><a href="/"><img src="{{asset('usercss/images/logo.png')}}" class="logo-width"></a></div>
			<nav>
				<ul>
					<li><a href=""><strong>Design Online Center</strong></a> </li>
				</ul>
			</nav>
			<div id="search-space">
				<form>
						<input type="text" class="input" name="search" placeholder="Search..">
					</form>
				</div>
		</header>
		<section class="mt-5 mb-3">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-end">
						<a href="#" class="back-to-website-button">Back to Website</a>
						<a href="#" class="back-to-website-button">Back to Esty</a>
					</div>
					<div class="col-lg-12 mt-3">
						<h5 class="h5"><strong>You are Working On:</strong></h5>
					</div>
					<div class="col-lg-12">
						<label class="label">HCO1 - 19MM Heart Tag with Heart Cut-Out </label>
					</div>
					
					<!-- <div class="dropdown">
						<button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
						Dropdown button
						</button>
						<ul class="dropdown-menu">
							<li><a class="dropdown-item" href="#">Link 1</a></li>
							<li><a class="dropdown-item" href="#">Link 2</a></li>
							<li><a class="dropdown-item" href="#">Link 3</a></li>
						</ul>
					</div> -->
					
				</div>
				<div class="row mt-3 silver-row">
					<div class="col-lg-6 col-md-6 col-sm-12">
						<div class="row ">
							<div class="col-lg-4 col-md-4 col-sm-4 first-column-space">
							<div id="text">
								<img src="{{asset('usercss/images/textorange.png')}}" class="t-width"><label>Text</label>
							</div>	
							</div>
							<div class="col-lg-4 col-md-4 col-sm-4 first-column-space ">
							<div id="images">
								<img src="{{asset('usercss/images/blackdot.png')}}" class="t-width"><label>Images</label>
							</div>
							
						</div>
						<div class="col-lg-4 col-md-4 col-sm-4 first-column-space ">
							<div id="more">
								<img src="{{asset('usercss/images/blackcircle.png')}}" class="t-width"><label>More</label>
							</div>
						</div>	
						</div>
						
						
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 undo-redo-zoom">

						<div class="row">
							<div class="col-lg-4 col-md-4 col-sm-4 undo-margin-right">
							<img src="{{asset('usercss/images/undo.png')}}" class="undo-width"><label>UNDO</label>
						</div>
							<div class="col-lg-4 col-md-4 col-sm-4 undo-margin-right">
							<img src="{{asset('usercss/images/redo.png')}}" class="redo-width"><label>REDO</label>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-4 undo-margin-right">
							<img src="{{asset('usercss/images/zoom.png')}}" class="zoom-width"><label>ZOOM</label>
						</div>
						</div>
						
						
						
					</div>
					
				</div>
				
			</div>
			
		</section>
		<section class="mt-5 mb-3">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-6">
						<!-- By Default Text Class Open -->
						<div class="text">
							<div class="col-lg-12">
								<h5><strong >Text Option:</strong></h5>
							</div>
							<div class="col-lg-12">
								<label class="loadedText loadedlabel-wrapper element ui-widget-content ui-corner-all">Click to Edit</label>
							</div>
							<div class="col-lg-12 mt-3">
								<input type="text" class="input-orange preLoadedtext" readonly value="HOOVEKNITS" name="search" placeholder="HOOVEKNITS"><img src="{{asset('usercss/images/delete.png')}}" class="delete-margin">
							</div>
							<div class="col-lg-12 mt-3">
								<input type="text" class="input-orange preLoadedtext" readonly value="Hand Made Love" name="search" placeholder="Hand Made Love"><img src="{{asset('usercss/images/delete.png')}}" class="delete-margin">
							</div>
							<div class="col-lg-12 mt-3">
								<input type="text" class="input-orange preLoadedtext" name="search" placeholder="Add New Text Field" style="color: #f6921e;">
							</div>
							<div class="col-lg-12 mt-5">
								<h5 class="graphic-font-size"><strong>Graphic Design Services</strong></h5>
							</div>
							<div class="col-lg-12 mt-3 ">
								<p>For Just $5.00 one of our designer can update<br> this template for you within 24 hour</p>
							</div>
							<div class="col-lg-12 mt-3 ">
								<h5 class="get-started"><strong>Get Started</strong></h5>
							</div>
							
						</div>
						<!--  Text Class Ends -->
						<!-- Image Class Section -->
						<div class="image" style="display: none;">
							<div class="col-lg-12">
								<h5><strong>Image Option:</strong></h5>
							</div>
							<div class="col-lg-12 mt-3">
								<label>Please Note Images Have to be in Vector Format</label>
							</div>
							<div class="col-lg-12 mt-3">
								<div class="row">
									<div class="col-lg-4 col-md-4 text-center">
										<div class="col-lg-12 file-design">
											<input type="file" name="picture" class="picture">
										</div>
										<label class="mt-1 bottom-label">Computer</label>
										
									</div>
									<div class="col-lg-4 col-md-4 text-center">
										<div class="col-lg-12 file-design-2">
											<input type="file" name="picture" class="picture">
										</div>
										<label class="mt-1 bottom-label">Phone</label>
										
									</div>
									<div class="col-lg-4 col-md-4 text-center">
										<div class="col-lg-12 file-design-search">
											<input type="file" name="picture" class="picture">
										</div>
										<label class="mt-1 bottom-label ">Icon Libaray</label>
									</div>
									
								</div>
							</div>
							<div class="col-lg-12 mt-3">
								<p>Please ensure you have the right to use any image you upload </p>
							</div>
							<div class="col-lg-12 mt-5">
								<h5 class="graphic-font-size"><strong>Graphic Design Services</strong></h5>
							</div>
							<div class="col-lg-12 mt-3 ">
								<p>For Just $5.00 one of our designer can update<br> this template for you within 24 hour</p>
							</div>
							<div class="col-lg-12 mt-3 ">
								<h5 class="get-started"><strong>Get Started</strong></h5>
							</div>
							
						</div>
						<!-- Image Class Section Ends -->
						<!-- More Class Section Start -->
						<div class="more" style="display:none;">
							<div class="col-lg-12 mb-3">
								<h5><strong>More Option:</strong></h5>
							</div>
							
							<div class="col-lg-12">
								<div class="row">
									<div class="col-lg-4 col-md-4 text-center">
										<div class="col-lg-12 file-design-qrcode">
											<button id="qrcode"></button>
										</div>
										<label class="mt-1 bottom-label">Qr Code</label>
										
									</div>
									<div class="col-lg-4 col-md-4 text-center">
										<div class="col-lg-12 file-design-heart">
											<button id="cut-of"></button>
										</div>
										<label class="mt-1 bottom-label">Cut-Out</label>
										
									</div>
									<div class="col-lg-4 col-md-4 text-center">
										<div class="col-lg-12 file-design-circle">
											<input type="file" name="picture" class="picture">
										</div>
										<label class="mt-1 bottom-label">Hole Config</label>
									</div>
									
								</div>
							</div>
							<div class="col-lg-12 mt-3">
								<p>Please ensure you have the right to use any image you upload </p>
							</div>
							<div class="col-lg-12 mt-5">
								<h5 class="graphic-font-size"><strong>Graphic Design Services</strong></h5>
							</div>
							<div class="col-lg-12 mt-3 ">
								<p>For Just $5.00 one of our designer can update<br> this template for you within 24 hour</p>
							</div>
							<div class="col-lg-12 mt-3 ">
								<h5 class="get-started"><strong>Get Started</strong></h5>
							</div>
							
						</div>
						<!-- More Class Section Ends -->
					</div>
					<div class="col-lg-8 col-md-6 mt-3 mb-3" id="divID"  style="height: 415px;background: #e0dddd;border-radius: 1%;">
						<div id="textEditor" class="col-lg-5" style="margin-top: 15px;background-color: #868383;padding: 5px;border-radius: 10px;display: none;">
							<center>
							<div class="col-lg-12" style="margin: 0 auto;">
								<button class="btn btn-sm btn-default btn-round bg-white" style="border-radius:20px;" id="defaultFont"></button>
								<!-- <button class="btn btn-sm btn-default btn-round bg-white" style="border-radius:20px;">8</button> -->
								<!-- <div class="dropdown btn btn-sm btn-default btn-round bg-white" style="border-radius:20px;">
										<button class="dropdown-toggle" style="border: 0px;background-color: transparent;" type="button" data-toggle="dropdown">8
												<span class="caret"></span>
										</button>
												<ul class="dropdown-menu">
													<li><a href="#">10</a></li>
													<li><a href="#">11</a></li>
													<li><a href="#">12</a></li>
												</ul>
								</div> -->
								<select class="btn btn-sm btn-default btn-round bg-white" id="fontList" style="border-radius:20px;">
									<option value="8px">8</option>
									<option value="10px">10</option>
									<option value="24px">24</option>
									<option value="48px">48</option>
								</select>
								<button id="boldB" class="btn btn-sm btn-default btn-round bg-white" style="border-radius:20px;"><strong>B</strong></button>
								<button id="italicB" class="btn btn-sm btn-default btn-round bg-white" style="border-radius:20px;"><i>I</i></button>
								<button id="deleteElem" class="btn btn-sm btn-default btn-round bg-white" style="border-radius:20px;"><img style="width:15px;" src="{{asset('usercss/images/delete.png')}}"></button>
								<button class="btn btn-sm btn-default btn-round bg-white" style="border-radius:20px;">More <i class="fa fa-chevron-right"></i></button>
							</div>
							<div class="col-lg-12 mt-1">
								<input type="text" style="border-radius:10px;" value="" id="selectedText" class="form-control">
							</div>
							<hr style="height: 2px;opacity: 1;background-color: white;">
							<div class="col-lg-12 mt-1">
								<div class="row">
									<div class="col-md-5">
										<table cellspacing="1" cellpadding="1" style="border-collapse: separate;border-spacing: 0 0.1em">
											<tr class="fontTypeListTR">
												<td class="fontTypeList">All Fonts (90)</td>
											</tr>
											<tr class="fontTypeListTR">
												<td class="fontTypeList">Bold (90)</td>
											</tr>
											<tr class="fontTypeListTR">
												<td class="fontTypeList">Script (90)</td>
											</tr>
											<tr class="fontTypeListTR">
												<td class="fontTypeList">Fun (90)</td>
											</tr>
											<tr class="fontTypeListTR">
												<td class="fontTypeList">Classic (90)</td>
											</tr>
										</table>
									</div>
									<div class="col-md-5">
									<ul id="fonttList" style="background-color: white;width: 170px;border-radius: 5px;display: inline-block;padding-left: 0px;height: 170px;max-height: 170px;overflow-y: auto;"></ul>
								</div>
							</div>
						</div>
						</center>
					</div>
				</div>
			</div>
			
		</div>
		
	</section>
	<div id="myModal" class="modal">
		<!-- Modal content -->
		<div class="modal-content">
			<span class="close">&times;</span>
			<p>Some text in the Modal..</p>
		</div>
	</div>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
	<!-- 		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script> -->
	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js" type="text/javascript"></script>
	<script>
	
	// Get the modal
	var modal = document.getElementById("myModal");
	// Get the button that opens the modal
	var btn = document.getElementById("qrcode");
	// Get the <span> element that closes the modal
			var span = document.getElementsByClassName("close")[0];
			// When the user clicks the button, open the modal
			btn.onclick = function() {
			modal.style.display = "block";
			}
			// When the user clicks on <span> (x), close the modal
					span.onclick = function() {
					modal.style.display = "none";
					}
					// When the user clicks anywhere outside of the modal, close it
					window.onclick = function(event) {
					if (event.target == modal) {
					modal.style.display = "none";
					}
					}
			</script>
			<script type="text/javascript">
			$(document).ready(function(){
			$('#text').click(function() {
			$(this).data('clicked', true);
			if($('#text').data('clicked')) {
			$(".image").hide();
			$(".more").hide();
			$(".text").show();
			}
			});
			$('#images').click(function() {
			$(this).data('clicked', true);
			if($('#images').data('clicked')) {
			$('.image').css('display','block');
			$(".image").show();
			$(".text").hide();
			$(".more").hide();
			}
			});
			$('#more').click(function() {
			$(this).data('clicked', true);
			if($('#more').data('clicked')) {
			$('.more').css('display','block');
			$(".more").show();
			$(".text").hide();
			$(".image").hide();
			}
			});
			});
			</script>
			<script type="text/javascript">
				/*
			var ctx = document.getElementById('myCanvas');
			if (ctx.getContext) {
			ctx = ctx.getContext('2d');
			//Loading of the home test image - img1
			var img1 = new Image();
			//drawing of the test image - img1
			img1.onload = function () {
			//draw background image
			ctx.drawImage(img1, 0, 0,250,250);
			//draw a box over the top
			ctx.fillStyle = "rgba(200, 0, 0, 0.5)";
			};
			img1.src = 'image.png';
			}*/
			$('#add_new_text').click(function(){
			/*    var canvas = document.getElementById("myCanvas");
				var ctx = canvas.getContext("2d");
				ctx.font = "30px Arial";
				ctx.fillText(document.getElementById("Box").value,10,50);*/
				$('#divID').append('<p new label-wrapper ui-widget-content ui-corner-all" data-item-type="label" id="textData">'+document.getElementById("Box").value+'</p>');
			})
			</script>
			<script src="{{asset('usercss/canvas_style/jquery.fontselect.js')}}"></script>
			<script>
			$(function(){
			/*        $('#font').fontselect();*/
					var fonts = [
			"Aclonica",
			"Allan",
			"Annie+Use+Your+Telescope",
			"Anonymous+Pro",
			"Allerta+Stencil",
			"Allerta",
			"Amaranth",
			"Anton",
			"Architects+Daughter",
			"Arimo",
			"Artifika",
			"Arvo",
			"Asset",
			"Astloch",
			"Bangers",
			"Bentham",
			"Bevan",
			"Bigshot+One",
			"Bowlby+One",
			"Bowlby+One+SC",
			"Brawler",
			"Buda:300",
			"Cabin",
			"Calligraffitti",
			"Candal",
			"Cantarell",
			"Cardo",
			"Carter One",
			"Caudex",
			"Cedarville+Cursive",
			"Cherry+Cream+Soda",
			"Chewy",
			"Coda",
			"Coming+Soon",
			"Copse",
			"Corben:700",
			"Cousine",
			"Covered+By+Your+Grace",
			"Crafty+Girls",
			"Crimson+Text",
			"Crushed",
			"Cuprum",
			"Damion",
			"Dancing+Script",
			"Dawning+of+a+New+Day",
			"Didact+Gothic",
			"Droid+Sans",
			"Droid+Sans+Mono",
			"Droid+Serif",
			"EB+Garamond",
			"Expletus+Sans",
			"Fontdiner+Swanky",
			"Forum",
			"Francois+One",
			"Geo",
			"Give+You+Glory",
			"Goblin+One",
			"Goudy+Bookletter+1911",
			"Gravitas+One",
			"Gruppo",
			"Hammersmith+One",
			"Holtwood+One+SC",
			"Homemade+Apple",
			"Inconsolata",
			"Indie+Flower",
			"IM+Fell+DW+Pica",
			"IM+Fell+DW+Pica+SC",
			"IM+Fell+Double+Pica",
			"IM+Fell+Double+Pica+SC",
			"IM+Fell+English",
			"IM+Fell+English+SC",
			"IM+Fell+French+Canon",
			"IM+Fell+French+Canon+SC",
			"IM+Fell+Great+Primer",
			"IM+Fell+Great+Primer+SC",
			"Irish+Grover",
			"Irish+Growler",
			"Istok+Web",
			"Josefin+Sans",
			"Josefin+Slab",
			"Judson",
			"Jura",
			"Jura:500",
			"Jura:600",
			"Just+Another+Hand",
			"Just+Me+Again+Down+Here",
			"Kameron",
			"Kenia",
			"Kranky",
			"Kreon",
			"Kristi",
			"La+Belle+Aurore",
			"Lato:100",
			"Lato:100italic",
			"Lato:300",
			"Lato",
			"Lato:bold",
			"Lato:900",
			"League+Script",
			"Lekton",
			"Limelight",
			"Lobster",
			"Lobster Two",
			"Lora",
			"Love+Ya+Like+A+Sister",
			"Loved+by+the+King",
			"Luckiest+Guy",
			"Maiden+Orange",
			"Mako",
			"Maven+Pro",
			"Maven+Pro:500",
			"Maven+Pro:700",
			"Maven+Pro:900",
			"Meddon",
			"MedievalSharp",
			"Megrim",
			"Merriweather",
			"Metrophobic",
			"Michroma",
			"Miltonian Tattoo",
			"Miltonian",
			"Modern Antiqua",
			"Monofett",
			"Molengo",
			"Mountains of Christmas",
			"Muli:300",
			"Muli",
			"Neucha",
			"Neuton",
			"News+Cycle",
			"Nixie+One",
			"Nobile",
			"Nova+Cut",
			"Nova+Flat",
			"Nova+Mono",
			"Nova+Oval",
			"Nova+Round",
			"Nova+Script",
			"Nova+Slim",
			"Nova+Square",
			"Nunito:light",
			"Nunito",
			"OFL+Sorts+Mill+Goudy+TT",
			"Old+Standard+TT",
			"Open+Sans:300",
			"Open+Sans",
			"Open+Sans:600",
			"Open+Sans:800",
			"Open+Sans+Condensed:300",
			"Orbitron",
			"Orbitron:500",
			"Orbitron:700",
			"Orbitron:900",
			"Oswald",
			"Over+the+Rainbow",
			"Reenie+Beanie",
			"Pacifico",
			"Patrick+Hand",
			"Paytone+One",
			"Permanent+Marker",
			"Philosopher",
			"Play",
			"Playfair+Display",
			"Podkova",
			"PT+Sans",
			"PT+Sans+Narrow",
			"PT+Sans+Narrow:regular,bold",
			"PT+Serif",
			"PT+Serif Caption",
			"Puritan",
			"Quattrocento",
			"Quattrocento+Sans",
			"Radley",
			"Raleway:100",
			"Redressed",
			"Rock+Salt",
			"Rokkitt",
			"Ruslan+Display",
			"Schoolbell",
			"Shadows+Into+Light",
			"Shanti",
			"Sigmar+One",
			"Six+Caps",
			"Slackey",
			"Smythe",
			"Sniglet:800",
			"Special+Elite",
			"Stardos+Stencil",
			"Sue+Ellen+Francisco",
			"Sunshiney",
			"Swanky+and+Moo+Moo",
			"Syncopate",
			"Tangerine",
			"Tenor+Sans",
			"Terminal+Dosis+Light",
			"The+Girl+Next+Door",
			"Tinos",
			"Ubuntu",
			"Ultra",
			"Unkempt",
			"UnifrakturCook:bold",
			"UnifrakturMaguntia",
			"Varela",
			"Varela Round",
			"Vibur",
			"Vollkorn",
			"VT323",
			"Waiting+for+the+Sunrise",
			"Wallpoet",
			"Walter+Turncoat",
			"Wire+One",
			"Yanone+Kaffeesatz",
			"Yanone+Kaffeesatz:300",
			"Yanone+Kaffeesatz:400",
			"Yanone+Kaffeesatz:700",
			"Yeseva+One",
			"Zeyada"
			];
			var li = '';
				for(i=0;i<fonts.length;i++){
						if(fonts[i].length > 6){
							fonts[i] = fonts[i].substring(0, 6);
						}
					if(i==0){
						li = '<li style="border: 1px solid;border-radius: 30px;display:inline-block;margin-right: 2px;margin-left: 2px;width:65px;margin-top:5px;">'+fonts[i]+'</li>';
					}else{
						li = li + '<li style="border: 1px solid;border-radius: 30px;display:inline-block;margin-right: 2px;margin-left: 2px;width:65px;margin-top:5px;">'+fonts[i]+'</li>';
					}
				}
							$('#fonttList').append(li);
			});
				
			function loadFont(th) {
					document.getElementById("textData").style.fontFamily = $(th).data('value');
			}
			
			</script>
			<script type="text/javascript">
				
			var tmpElement;
			$(document).ready(function() {
			$('.loadedText').draggable({
			helper: "clone",
			revert: "invalid"
			});
			
			$('#divID').droppable({
			accept: ".loadedText",
			drop: function(e, u) {
			var a = u.helper.clone();
			console.log("INFO: Accepted: ", a.data("item-type"));
			/*      a.appendTo("#divID");*/
			makeId(a.find(a.data("item-type")));
			a.removeClass("loadedText");
			a.find(".side-handle").remove();
			var handle, set, rem;
			handle = $("<span>", {
				title: "Double-click to resize",
				class: "top-handle ui-icon ui-icon-grip-dotted-horizontal"
				});
				set = $("<span>", {
					title: "Click to Edit settings",
					class: "top-settings ui-icon ui-icon-gear"
					})
					.click(function() {
					var $wrpr = $(this).parent();
					var elType = $wrpr.data("item-type");
					var $tElem = $wrpr.find(elType);
					var inText = $tElem.text().trim();
					var elId = $tElem.attr("id");
					var elTitle = $tElem.attr("title");
					var elClass = $tElem.attr("class");
					var elEvent = false,
					elScript = "";
					switch (true) {
					case $tElem.is("[onblur]"):
					elEvent = "onBlur";
					break;
					case $tElem.is("[onclick]"):
					elEvent = "onClick";
					break;
					case $tElem.is("[onchange]"):
					elEvent = "onChange";
					break;
					case $tElem.is("[onfocus]"):
					elEvent = "onFocus";
					break;
					}
					if (elEvent) {
					elScript = $tElem.attr(elEvent);
					}
					if (elType == "input[type='text']") {
					inText = $(this).parent().find(elType).attr("placeholder");
					}
					tmpElement = $(this).parent().find(elType);
					console.log("INFO: Editing " + tmpElement.prop("outerHTML"));
					$("#dialog-settings #idValue").val(elId);
					$("#dialog-settings #titleValue").val(elTitle);
					$("#dialog-settings #classValue").val(elClass);
					$("#dialog-settings #innerText").val(inText);
					if (elEvent) {
					$("#dialog-settings #eventType").val(elEvent);
					$("#dialog-settings #eventValue").val(elScript)
					}
					$("#dialog-settings").dialog("open");
					});
					rem = $("<span>", {
						title: "Click to Delete element",
						class: "top-delete ui-icon ui-icon-close"
						})
						.click(function() {
						$(this).parent().remove();
						});
						a.append(handle, set, rem);
						a.addClass('dropped').draggable({
						containment: "#divID"
						}).dblclick(function() {
						// Enabled Resize on element when double clicked
						var thisEl = $(this).data("item-type");
						$(this).resizable({
						alsoResize: ".dropped " + thisEl
						});
						});
						}
						});
						$("#dialog-settings").dialog({
						autoOpen: false,
						height: 425,
						width: 350,
						modal: true,
						buttons: {
						"Update": saveEl,
						Cancel: function() {
						$(this).dialog("close");
						}
						},
						close: function() {
						$("#dialog-settings form")[0].reset();
						$("#dialog-settings .text").removeClass("ui-state-error");
						},
						open: function() {
						console.log("INFO: Settings Dialog opened.");
						}
						});
						$("#dialog-settings form").submit(saveEl);
						function saveEl() {
						var target = tmpElement,
						data = {};
						$("#dialog-settings .text").removeClass("ui-state-error");
						$("#dialog-settings .text").each(function(k, v) {
						data[$(v).data("attr-name")] = $(v).val();
						});
						if (data.id == null || data.id == "undefined" || data.id == "") {
						var c = $("#divID " + target.parent().data("item-type")).length;
						data.id = target.parent().data("item-type") + "-" + c;
						}
						if (validId(data.id)) {
						target.attr({
						id: data.id,
						title: data.title,
						class: data.class
						});
						if ($("#eventType").val() != "") {
						target.attr($("#eventType").val(), $("#eventValue").val());
						} else {
						target.attr({
						onBlur: "",
						onClick: "",
						onChange: "",
						onFocus: ""
						});
						}
						if (target.parent().data("item-type") == "input[type='text']") {
						target.attr("placeholder", data.text);
						} else {
						target.text(data.text);
						}
						$("#dialog-settings").dialog("close");
						console.log("INFO: Element " + data.id + " updated.");
						} else {
						$("#idValue").addClass("ui-state-error");
						updateTips("ID must be unique.");
						}
						return false;
						}
						function validId(str) {
						var valid = true;
						$("#divID div").each(function(k, v) {
						var el = $(v).data("item-type");
						var target = $(v).find(el);
						if (target.find("[id='" + str + "']").length) {
						valid = false;
						console.log("ERROR: Invalid Element ID.");
						}
						});
						return valid;
						}
						function updateTips(t) {
						$(".validateTips").text(t)
						.addClass("ui-state-highlight");
						setTimeout(function() {
						$(".validateTips").removeClass("ui-state-highlight", 1500);
						})
						}
						function makeId(t, str) {}
						$(document).click(function() {
						if ($(".dropped").length) {
						// Disabled Resize on all elements when #divID
						$(".ui-resizable").resizable("destroy");
						}
						});
						});
							$('.preLoadedtext').click(function(){
								var val = $(this).val();
								$('#divID').append('<span ondblclick="openeditor(this)" class="loadedText loadedlabel-wrapper element ui-widget-content ui-corner-all ui-draggable ui-draggable-handle ui-draggable-dragging dropped" data-item-type="label" id="textData">'+val+'</span>');
								$(".loadedText").draggable();
								});
							var globalSelectedText;
							function openeditor(th){
								globalSelectedText = th;
								$('#selectedText').val($(th).html());
								$('#textEditor').toggle(100);
							}
							$('#boldB').click(function(){
							
								if ($(globalSelectedText).css('font-weight') == 'bold' || $(globalSelectedText).css('font-weight') == '700') {
								$(globalSelectedText).css('font-weight','normal');
								} else {
								$(globalSelectedText).css('font-weight','bold');
								}
								});
						$('#italicB').click(function(){
								if ($(globalSelectedText).css('font-style') == 'italic') {
								$(globalSelectedText).css('font-style','normal');
								} else {
								$(globalSelectedText).css("font-style", "italic");
								}
						});
						$('#underlineB').click(function(){
							$(globalSelectedText).css("text-decoration", "underline");
							});
						$('#fontList').change(function(){
								$(globalSelectedText).css({ 'font-size': $(this).val() });
						});
						$('#selectedText').keyup(function(){
								$(globalSelectedText).html($(this).val());
						});
						$('#deleteElem').click(function(){
								$(globalSelectedText).remove();
									$('#selectedText').val('');
														$('#textEditor').toggle(100);
						});
						$(document).ready(function(){
							var fontFamily = window.getComputedStyle(document.body,null).getPropertyValue("font-family");
							if(fontFamily.length > 10){
								fontFamily = fontFamily.substring(0, 10)+'...';
							}
							$('#defaultFont').html(fontFamily);
						})
						</script>
					</body>
				</html>