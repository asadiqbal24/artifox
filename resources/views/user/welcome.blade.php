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
		<meta name="csrf-token" content="{{ csrf_token() }}">

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
		.closeImageButton{
			height: 18px;border-radius: 30px;background-color: white;color: black;padding-top: 0px;padding-bottom: 0px;padding-left: 2px;padding-right: 2px;font-size: 10px;			
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
							<div id="text" style="cursor: pointer;">
								<img src="{{asset('usercss/images/textorange.png')}}" class="t-width"><label>Text</label>
							</div>	
							</div>
							<div class="col-lg-4 col-md-4 col-sm-4 first-column-space ">
							<div id="images" style="cursor: pointer;">
								<img src="{{asset('usercss/images/blackdot.png')}}" class="t-width"><label>Images</label>
							</div>
							
						</div>
						<div class="col-lg-4 col-md-4 col-sm-4 first-column-space ">
							<div id="more" style="cursor: pointer;">
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
											<input type="file" name="picture" id="uploadImage" style="width:100%" class="picture" accept="image/*" onchange="loadFile(event)">
										</div>


										<label class="mt-1 bottom-label">Computer</label>
										
									</div>
									<div class="col-lg-4 col-md-4 text-center">
										<div class="col-lg-12 file-design-2">
											<input type="file" name="picture" class="picture" accept="image/*" style="width:100%">
										</div>
										<label class="mt-1 bottom-label">Phone</label>
										
									</div>
									<div class="col-lg-4 col-md-4 text-center">
										<div class="col-lg-12 file-design-search iconLibraryToggle" >
											<input type="button" class="picture" style="width:100%">
										</div>
										<label class="mt-1 bottom-label ">Icon Libaray</label>
									</div>
									
								</div>
							</div>
							<div class="col-lg-12 mt-3">
								<p>Please ensure you have the right to use any image you upload </p>
							</div>

							<div class="col-lg-12 mt-3">

									<div id="iconEditor" class="col-lg-12" style="margin-top: 15px;background-color: #868383;padding: 5px;border-radius: 10px;display: none;">

											<div class="col-lg-12" style="margin: 0 auto;">
												<div class="row">
													<div class="col-md-10"><label>Enter Keyword</label></div>
													<div class="col-md-2"><button class="closeIconDiv iconLibraryToggle"  style="background: transparent;border: 0px;">
														<img src="{{asset('icons/closeBtn.png')}}" style="width:50%">
													</button></div>
												</div>
											</div>
											<div class="col-lg-12" style="margin: 0 auto;margin-top: 5px;">
												
												<div class="row">
													<div class="col-lg-9">
														<input type="text" name="searchIcon" placeholder="Search Here" class="form-control" id="searchIcon" style="width: 100%;">
													</div>
													<div class="col-lg-3">
														<button class="btn btn-default" id="searchIconBtn" style="background-color: white;">Search</button>
													</div>
												</div>
																				
											</div>		

											<div class="col-lg-12" style="margin: 0 auto;margin-top: 5px;" id="iconSearchResult">



											</div>					
									</div>								

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
										<div class="col-lg-12 file-design-qrcode qrToggle" id="qrToggle">
											<button id="qrcode"></button>
										</div>
										<label class="mt-1 bottom-label">Qr Code</label>
										
									</div>
									<div class="col-lg-4 col-md-4 text-center">
										<div class="col-lg-12 file-design-heart cutOfftoggle" id="cutOfftoggle">
											<button id="cut-of"></button>
										</div>
										<label class="mt-1 bottom-label">Cut-Out</label>
										
									</div>
									<div class="col-lg-4 col-md-4 text-center">
										<div class="col-lg-12 file-design-circle">
											<input type="file" name="picture" class="picture" style="width:100%">
										</div>
										<label class="mt-1 bottom-label">Hole Config</label>
									</div>
									
								</div>
							</div>

							<div class="col-lg-12 mt-3">

									<div id="qrCodeDiv" class="col-lg-12" style="margin-top: 15px;background-color: #868383;padding: 5px;border-radius: 10px;display: none;">

											<div class="col-lg-12" style="margin: 0 auto;">
												<div class="row">
													<div class="col-md-10"><label>Create Your QR Code</label></div>
													<div class="col-md-2"><button class="closeQRButton" style="background: transparent;border: 0px;">
														<img src="{{asset('icons/closeBtn.png')}}" style="width:50%">
													</button></div>
												</div>
											</div>
											<div class="col-lg-12" style="margin: 0 auto;margin-top: 5px;">
												
												<div class="row">
													<div class="col-lg-12">
														<input type="text" name="qrURL" placeholder="Add URL Here" class="form-control" id="qrURL" style="width: 100%;">
													</div>
													<div class="col-lg-12 mt-2">
														<button class="btn back-to-website-button btn-block" style="color: white !important;" id="addQRBtn"><strong>Add QR code</strong></button>
													</div>
												</div>
																				
											</div>		

									</div>								

							</div>


							<div class="col-lg-12 mt-3">

									<div id="cutShapesDiv" class="col-lg-12" style="margin-top: 15px;background-color: #868383;padding: 5px;border-radius: 10px;display: none;">

											<div class="col-lg-12" style="margin: 0 auto;">
												<div class="row">
													<div class="col-md-10"><label>Cut-Out Shapes</label></div>
													<div class="col-md-2"><button class="closecutShapeButton cutOfftoggle" style="background: transparent;border: 0px;">
														<img src="{{asset('icons/closeBtn.png')}}" style="width:50%">
													</button></div>
												</div>
											</div>
											<div class="col-lg-12" style="margin: 0 auto;margin-top: 5px;">
												
												<div class="row">
													
													@foreach($cutShapes as $c)

													<div class="col-lg-2" style="background-color:white;margin: 5px;padding: 5px;">
														<img onclick="loadIcon(this)" class="newloadedIcon" src="{{asset('storage/'.$c)}}" style="width: 50px;height: 50px;">
													</div>


													@endforeach	

												</div>
																				
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
									<ul id="fonttList" style="background-color: white;width: 170px;border-radius: 5px;display: inline-block;padding-left: 0px;height: 170px;max-height: 170px;overflow-y: auto;overflow-x: hidden;">
										
										  <li><font onclick="changeFont('Times New Roman')" style="font-size: 13px;cursor: pointer;" face = "Times New Roman" size = "5">Times New Roman</font></li>
									      <li><font onclick="changeFont('Verdana')" style="font-size: 13px;cursor: pointer;" face = "Verdana" size = "5">Verdana</font></li>
									      <li><font onclick="changeFont('Comic sans MS')" style="font-size: 13px;cursor: pointer;" face = "Comic sans MS" size =" 5">Comic Sans MS</font></li>
									      <li><font onclick="changeFont('WildWest')" style="font-size: 13px;cursor: pointer;" face = "WildWest" size = "5">WildWest</font></li>
									      <li><font onclick="changeFont('Bedrock')" style="font-size: 13px;cursor: pointer;" face = "Bedrock" size = "5">Bedrock</font></li>

									</ul>

								</div>
							</div>
						</div>
						</center>
					</div>

					<div id="ImageEditor" class="col-lg-3" style="margin-top: 15px;background-color: #868383;padding: 5px;border-radius: 10px;display: none;">
							<center>
							<div class="col-lg-12">
								<div class="row">
									<div class="col-md-3" style="margin-left:10px;"><label class="text-white" style="font-size:12px;">Width<small>(px)</small></label></div>
									<div class="col-md-3" style="margin-left:15px;"><label class="text-white" style="font-size:12px;">Height<small>(px)</small></label></div>

									<div class="col-md-4"><button class="closeImageButton"style="background: transparent;border: 0px;">
														<img src="{{asset('icons/closeBtn.png')}}" style="width:50%">
													</button>
													</div>
								</div>
							</div>
							<div class="col-lg-12" style="margin: 0 auto;margin-top: 10px;">
									
								<input type="number" id="imageWidth" value="200" style="width:60px;border-radius:20px;text-align: center;" >		
								<input type="number" id="imageHeight" value="200" style="width:60px;border-radius:20px;text-align: center;" >
								<button id="deleteImageElem" class="btn btn-sm btn-default btn-round bg-white" style="border-radius:20px;"><img style="width:15px;" src="{{asset('usercss/images/delete.png')}}"></button>										
							</div>							
						</center>
					</div>


					<div id="qrEditor" class="col-lg-3" style="margin-top: 15px;background-color: #868383;padding: 5px;border-radius: 10px;display: none;">
							<center>
							<div class="col-lg-12" style="margin: 0 auto;">
								<div class="row">
									<div class="col-md-5"><label class="text-white" style="font-size:12px;">Width<small>(px)</small></label></div>
									<div class="col-md-3"><label class="text-white" style="font-size:12px;">Height<small>(px)</small></label></div>
									<div class="col-md-2"></div>
									<div class="col-md-2"><button class="closeQRButton qrToggle"><img src="{{asset('icons/closeBtn.png')}}" style="width:50%"></button></div>
								</div>
							</div>
							<div class="col-lg-12" style="margin: 0 auto;">
									
								<input type="number" id="qrWidth" value="200" style="width:60px;border-radius:20px;text-align: center;" >		
								<input type="number" id="qrHeight" value="200" style="width:60px;border-radius:20px;text-align: center;" >
								<button id="qrImageElem" class="btn btn-sm btn-default btn-round bg-white" style="border-radius:20px;"><img style="width:15px;" src="{{asset('usercss/images/delete.png')}}"></button>										
							</div>							
						</center>
					</div>

				</div>
			</div>
			
		</div>
		
	</section>
	<section class="mt-3 mb-3">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<a id="saveDesign" class="btn btn-primary" style="background-color: #f98600;border-color: #f98600;float: right;    border-radius: 20px;
    padding: 5px 30px;">Next</a>
				</div>
				
			</div>
			
		</div>
		
	</section>
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
	<!-- 		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script> -->
	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js" type="text/javascript"></script>
	<script>
	
		$.ajaxSetup({
		    headers: {
		        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		    }
		});

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
								saveHistory();
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

								saveHistory();								
								});
						$('#italicB').click(function(){
								if ($(globalSelectedText).css('font-style') == 'italic') {
								$(globalSelectedText).css('font-style','normal');
								} else {
								$(globalSelectedText).css("font-style", "italic");
								}

									saveHistory();								
						});
						$('#underlineB').click(function(){
							$(globalSelectedText).css("text-decoration", "underline");
								saveHistory();							

						});
						$('#fontList').change(function(){
								$(globalSelectedText).css({ 'font-size': $(this).val() });
														saveHistory();
						});
						$('#selectedText').keyup(function(){
								$(globalSelectedText).html($(this).val());
								saveHistory();						
						});
						$('#deleteElem').click(function(){
								$(globalSelectedText).remove();
									$('#selectedText').val('');
								$('#textEditor').toggle(100);
								saveHistory();								
						});


						
						$(document).ready(function(){
							var fontFamily = window.getComputedStyle(document.body,null).getPropertyValue("font-family");
							if(fontFamily.length > 10){
								fontFamily = fontFamily.substring(0, 10)+'...';
							}
							$('#defaultFont').html(fontFamily);
						})

						</script>
						

						<script>
						
						   var loadFile = function(event) {
							    var reader = new FileReader();
							    reader.onload = function(){

							     $('<img />')
			                        .attr('src', "" + reader.result + "")
			                        .attr('class','newImageObject loadedlabel-wrapper element ui-widget-content ui-corner-all ui-draggable ui-draggable-handle ui-draggable-dragging dropped') 
			                         .attr('style','margin:5px;')
			                         .attr('ondblclick','openImageEditor(this)') 
			                            .width('200px').height('200px')

			                        .appendTo($('#divID')); 
			                        $(".newImageObject").draggable();
									saveHistory();			                        
								};
							    reader.readAsDataURL(event.target.files[0]);
							  };
							  var globalImage;
							  function openImageEditor(th) {
							  	globalImage = th;
							  	$('#ImageEditor').toggle(100);
							  }	
						
						$("#imageWidth").bind('keyup mouseup', function () {
							$(globalImage).width($(this).val()+'px');
								saveHistory();							
						});

						$("#imageHeight").bind('keyup mouseup', function () {
							$(globalImage).height($(this).val()+'px');
								saveHistory();
						});										
							
						$('#deleteImageElem').click(function(){
								$(globalImage).remove();
								$('#ImageEditor').toggle(100);
								saveHistory();
						});	

						$('.closeImageButton').click(function(){

							$('#ImageEditor').toggle(100);

						});



						$('#searchIconBtn').click(function(){

							val = $('#searchIcon').val();

								if(val!=''){

									$.ajax({
						                type:'get',
						                url:'{{route("searchIcons")}}',
						                data:{_token: "{{ csrf_token() }}",val,val
						                },
						                success: function( msg ) {

						                	$('#iconSearchResult').html(msg);

						                }
						            });


								}

						});


						function loadIcon(th){

							  $('<img />')
			                        .attr('src', "" + $(th).attr('src') + "")
			                        .attr('class','newImageObject loadedlabel-wrapper element ui-widget-content ui-corner-all ui-draggable ui-draggable-handle ui-draggable-dragging dropped') 
			                         .attr('style','margin:5px;')
			                         .attr('ondblclick','openImageEditor(this)') 
			                            .width('200px').height('200px')

			                        .appendTo($('#divID')); 
			                        $(".newImageObject").draggable();
								saveHistory();
						}


						</script>						
<script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>

<script type="text/javascript">
$('#addQRBtn').click(function(){

	var div = document.createElement("div");
	$(div).addClass('newQRObject loadedlabel-wrapper element ui-widget-content ui-corner-all ui-draggable ui-draggable-handle ui-draggable-dragging dropped');
	$(div).attr('ondblclick','openQREditor(this)'); 
	var qrcode = new QRCode(div, {
		text: $('#qrURL').val(),
	width: 128,
	height: 128,
	colorDark : "black",
	colorLight : "#ffffff",
	correctLevel : QRCode.CorrectLevel.H
});

	$('#divID').append(div);
	$(".newQRObject").draggable();
								saveHistory();

});

 var globalQRdiv;
 var globalQRImage;
							  function openQREditor(th) {
							  	globalQRdiv = th;
							  	globalQRImage = $(th).find('img');
							  	$('#qrEditor').toggle(100);
							  }	
						
						$("#qrWidth").bind('keyup mouseup', function () {
							$(globalQRImage).width($(this).val()+'px');
							saveHistory();
						});

						$("#qrHeight").bind('keyup mouseup', function () {
							$(globalQRImage).height($(this).val()+'px');
							saveHistory();
						});										
							
						$('#deleteImageElem').click(function(){
								$(globalQRdiv).remove();
								$('#qrEditor').toggle(100);
						});	

						$('.qrImageElem').click(function(){

							$('#qrEditor').toggle(100);

						});




$('.iconLibraryToggle').click(function(){

	$('#iconEditor').toggle(100);

});

$('.cutOfftoggle').click(function(){

	$('#cutShapesDiv').toggle(100);

});

$('.qrToggle').click(function(){

	$('#qrCodeDiv').toggle(100);

});

var historyOp = [];
function undo(){

}


function redo(){
	
}


function saveHistory(){
	historyOp.push($('#divID').clone());	
}

function changeFont(val){

	$(globalSelectedText).css('font-family',val);

}
</script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>

<script type="text/javascript">

 $(window).load(function(){
           $('#saveDesign').click(function(){ //calling this function when Save button pressed
              html2canvas($('#divID')[0], {//give the div id whose image you want in my case this is #cont

              onrendered: function (canvas) {
              var img = canvas.toDataURL("image/png",8.0);//here set the image extension and now image data is in var img that will send by our ajax call to our api or server site page


              $.ajax({
                    type: 'POST',
                    url: "{{route('save-temp-image')}}",//path to send this image data to the server site api or file where we will get this data and convert it into a file by base64
                    data:{
                      "img":img,
                      '_token':'{{ csrf_token() }}'
                    },
                    success:function(data){
                    	window.location.href='{{route("final-design")}}'
                    }
              });
              }
              });
          });
        });


</script>							


					</body>
				</html>