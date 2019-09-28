<?php
include '../../access/connect.php';
if(isset($_POST['sub'])) {
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['eid'];
	$phno = $_POST['phone'];
	$regno = $_POST['usn'];
	$batch=2019; 

	$insert = mysqli_query($connection, "INSERT INTO student (usn,fname,lname,email,phno,batch) VALUES ('$regno','$fname','$lname','$email','$phno','$batch')");
	if($insert)
	{
		$otal=$expr=$fevents=NULL;
	  	$studid=mysqli_insert_id($connection);
		$tali = implode(", ",$_POST['talent']);
		if(isset($_POST['otalent']))
			$otal = $_POST['otalent'];
		if(isset($_POST['expr']))
			$expr = $_POST['expr'];
		if(isset($_POST['fevents']))
			$fevents=$_POST['fevents'];
		
		$skillinsert=mysqli_query($connection, "INSERT INTO skills (studid,talents,addtalents,sexpr,sevents) VALUES ('$studid','$tali','$otal','$expr','$fevents')");
		if($skillinsert)
		{
			$smsg="Successfully Submited";
		}
	} 
	else
	{
		$fmsg="Student Regno / email is already registered";
	}
}
?>
<!DOCTYPE html>
<html lang="en">

	<!-- begin::Head -->
	<head>
		<?php include 'admin/ui/csslink.php'; ?>
		<!--begin::Page Custom Styles(used by this page) -->
		<link href="assets/css/pages/login/login-4.css" rel="stylesheet" type="text/css" />
		<!--end::Page Custom Styles -->
		<style>
			/* The container */
			.container {
			  display: block;
			  position: relative;
			  padding-left: 35px;
/*			  margin-bottom: 12px;*/
			  cursor: pointer;
			  font-size: 22px;
			  -webkit-user-select: none;
			  -moz-user-select: none;
			  -ms-user-select: none;
			  user-select: none;
				width: 250px;
				margin: 0px 10px 12px 0px;
				text-align: left !important;
			}

			/* Hide the browser's default checkbox */
			.container input {
			  position: absolute;
			  opacity: 0;
			  cursor: pointer;
			  height: 0;
			  width: 0;
			}

			/* Create a custom checkbox */
			.checkmark {
			  position: absolute;
			  top: 0;
			  left: 0;
			  height: 25px;
			  width: 25px;
			  background-color: #eee;
			border: 2px solid #5867dd;
			}

			/* On mouse-over, add a grey background color */
			.container:hover input ~ .checkmark {
			  background-color: #ccc;
			}

			/* When the checkbox is checked, add a blue background */
			.container input:checked ~ .checkmark {
			  background-color: #5867dd;
			}

			/* Create the checkmark/indicator (hidden when not checked) */
			.checkmark:after {
			  content: "";
			  position: absolute;
			  display: none;
			}

			/* Show the checkmark when checked */
			.container input:checked ~ .checkmark:after {
			  display: block;
			}

			/* Style the checkmark/indicator */
			.container .checkmark:after {
			  left: 9px;
			  top: 5px;
			  width: 5px;
			  height: 10px;
			  border: solid white;
			  border-width: 0 3px 3px 0;
			  -webkit-transform: rotate(45deg);
			  -ms-transform: rotate(45deg);
			  transform: rotate(45deg);
			}
			/* The container */
			.container1 {
			  display: inline-block;
			  position: relative;
			  padding-left: 35px;
/*			  margin-bottom: 12px;*/
			  cursor: pointer;
			  font-size: 22px;
			  -webkit-user-select: none;
			  -moz-user-select: none;
			  -ms-user-select: none;
			  user-select: none;
				margin: 0px 10px 12px 0px;
				text-align: left !important;
			}
			/* Hide the browser's default radio button */
			.container1 input {
			  position: absolute;
			  opacity: 0;
			  cursor: pointer;
			}

			/* Create a custom radio button */
			.checkmark1 {
			  position: absolute;
			  top: 0;
			  left: 0;
			  height: 25px;
			  width: 25px;
			  background-color: #eee;
			  border-radius: 50%;
				border: 2px solid #5867dd;
			}

			/* On mouse-over, add a grey background color */
			.container1:hover input ~ .checkmark1 {
			  background-color: lightgray;
			}

			/* When the radio button is checked, add a blue background */
			.container1 input:checked ~ .checkmark1 {
			  background-color: #5867dd;
			}

			/* Create the indicator (the dot/circle - hidden when not checked) */
			.checkmark1:after {
			  content: "";
			  position: absolute;
			  display: none;
				align-content: center;
			}

			/* Show the indicator (dot/circle) when checked */
			.container1 input:checked ~ .checkmark1:after {
			  display: block;
			}

			/* Style the indicator (dot/circle) */
			.container1 .checkmark1:after {
				top: 9px;
				left: 9px;
				width: 8px;
				height: 8px;
				border-radius: 50%;
				background: #5867dd;
			}
	</style>
		<script type="text/javascript">
				function showele(x) {
		  var ele = document.getElementById(x);
			ele.style.display = "block";
		}
			function hideele(x) {
		  var ele = document.getElementById(x);
			ele.style.display = "none";
		}
		</script>
	</head>

	<!-- end::Head -->

	<!-- begin::Body -->
	<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">
		<!-- begin:: Page -->
		<div class="kt-grid kt-grid--ver kt-grid--root">
			<div class="kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v4 kt-login--signin" id="kt_login">
				<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" style="background-image: url(assets/media/bg/bg-2.jpg);">
					<div class="kt-grid__item kt-grid__item--fluid kt-login__wrapper" style="padding-bottom: 5px; padding-top: 50px;">
						<div class="kt-login__container">
							<div class="kt-login__logo">
								<a href="#">
									<img width="450" height="250" src="assets/media/logos/samca1.png">
								</a>
							</div>
<!--
							<div class="kt-login__signin">
								<div class="kt-login__head">
									<h3 class="kt-login__title">Sign In To Admin</h3>
								</div>
								
							</div>
-->
							
						</div>
					</div>
				<div class="kt-container kt-login  kt-container--fluid  kt-grid__item kt-grid__item--fluid" style="padding: 50px;">
					<div class="row">
						<div class="col-12">
							<!--begin::Portlet-->
							<div class="kt-portlet">
								<div class="kt-portlet__head">
									<div class="kt-portlet__head-label">
										<h3 class="kt-portlet__head-title">
										Student Talent Acquisition [ 1st Year MCA ]
										</h3>
									</div>
								</div>

								<!--begin::Form-->
								<form  class="kt-form kt-form--label-right" method="POST">
									<div class="kt-portlet__body">
										<?php if(isset($smsg)) { ?>
										<div class="form-group form-group-last">
													<div class="alert alert-success" role="alert" id="kt_form_1_msg">
										    <div class="alert-icon"><i class="flaticon2-check-mark"></i></div>
														<div class="alert-text">
															<?php echo $smsg ?>
														</div>
														<div class="alert-close">
															<button type="button" class="close" data-dismiss="alert" aria-label="Close">
																<span aria-hidden="true"><i class="la la-close"></i></span>
															</button>
														</div>
													</div>
												</div>
										<?php }  ?>
										<?php if(isset($fmsg)) { ?>
										<div class="form-group form-group-last">
													<div class="alert alert-danger" role="alert" id="kt_form_1_msg">
														<div class="alert-icon"><i class="flaticon-warning"></i></div>
														<div class="alert-text">
															<?php echo $fmsg ?>
														</div>
														<div class="alert-close">
															<button type="button" class="close" data-dismiss="alert" aria-label="Close">
																<span aria-hidden="true"><i class="la la-close"></i></span>
															</button>
														</div>
													</div>
												</div>
										<?php }  ?>
										<div class="form-group row">
											<div class="col-lg-6">
												<label>First Name:</label>
												<div class="input-group">
													<div class="input-group-append"><a href="#" class="btn btn-brand btn-icon"><i class="la la-user"></i></a></div>
													
													<input required type="text" name="fname" class="form-control" placeholder="Enter first name">
												</div>
											</div>
											<div class="col-lg-6">
												<label>Last Name:</label>
												<div class="input-group">
													<div class="input-group-append"><a href="#" class="btn btn-brand btn-icon"><i class="la la-user"></i></a></div>
													
													<input required type="text" name="lname" class="form-control" placeholder="Enter last name">
												</div>
											</div>
											
										</div>
										<div class="form-group row">
											<div class="col-lg-6">
												<label class="">Email:</label>
												<div class="input-group">
												<div class="input-group-append"><a href="#" class="btn btn-brand btn-icon"><i class="la la-envelope"></i></a></div>
												<input type="email" name="eid" class="form-control" placeholder="Enter Email address">
												</div>
<!--						<span class="form-text text-muted">Please enter your contact number</span>-->
											</div>
											<div class="col-lg-6">
												<label class="">Phone Number:</label>
												<div class="input-group">
													<div class="input-group-append"><a href="#" class="btn btn-brand btn-icon"><i class="la la-phone"></i></a></div>
													<input required type="text" class="form-control" name="phone" placeholder="Enter phone">
												</div>
							
											</div>
										</div>
										<div class="form-group row">
											<div class="col-lg-12">
												<label class="">Roll Number or USN: </label>
												<div class="input-group">
													<div class="input-group-append"><a href="#" class="btn btn-brand btn-icon"><i class="la la-mortar-board"></i></a></div>
													<input required type="text" class="form-control" name="usn" placeholder="Enter roll number or usn">
												</div>
											</div>
										</div>
										<hr>
										<div class="form-group row">
											<div class="col-lg-12">
												<label>Talents: </label>
												<div class="form-group form-group-last">
													<div class="alert alert-secondary" role="alert">
														<div class="alert-icon"><i class="flaticon-warning kt-font-brand"></i></div>
														<div class="alert-text">
															Select atleast any one of the talent or hobbies in which you are good at. <br> provide more details about that hobbie (eg: dance form) in additional info box. 
														</div>
													</div>
												</div>
												<div class="col-lg-12 col-md-12 col-sm-12">
															<label class="container"> Dance
																<input value="0" type="checkbox" name="talent[]"> 
																<span class="checkmark"></span>
															</label>
															<label class="container">
																<input value="1" type="checkbox" name="talent[]"> Music
																<span class="checkmark"></span>
															</label>
															<label class="container">
																<input value="2" type="checkbox" name="talent[]"> Singing 
																<span class="checkmark"></span>
															</label>
															<label class="container">
																<input value="0" type="checkbox" name="talent[]"> Sports
																<span class="checkmark"></span>
															</label>
															<label class="container">
																<input value="0" type="checkbox" name="talent[]"> Art 
																<span class="checkmark"></span>
															</label>
															<label class="container">
																<input value="0" type="checkbox" name="talent[]"> Photography 
																<span class="checkmark"></span>
															</label>
															<label class="container">
																<input value="0" type="checkbox" name="talent[]"> Video or Audio Editing 
																<span class="checkmark"></span>
															</label>
															<label class="container">
																<input value="0" type="checkbox" name="talent[]"> Graphic or Logo Designing
																<span class="checkmark"></span>
															</label>
															<label class="container">
																<input value="0" type="checkbox" name="talent[]">  
																<span class="checkmark"></span> Coding / Web Development
															</label>
															<label class="container">
																<input value="0" type="checkbox" name="talent[]">  
																<span class="checkmark"></span> Calligraphy
															</label>
															<label class="container">
																<input value="0" type="checkbox" name="talent[]">  
																<span class="checkmark"></span> Anchoring / MC
															</label>
<!--<span class="form-text text-muted">Please select at lease 1</span>-->
												</div>
												<div class="col-lg-12 col-md-12 col-sm-12">
												<div class="form-group form-group-last" style="padding-top: 10px;">
													<label for="exampleTextarea">Additional info / other talents: </label>
													<textarea class="form-control" name="otalent" id="exampleTextarea" rows="3"></textarea>
												</div>
												</div>
												<hr>
												<div class="col-lg-12 col-md-12 col-sm-12">
												<div class="form-group form-group-last" style="padding-top: 10px;">
													<label>During Under Graduate did your college conduct any fest (inter college or inter class) ? </label>
													<br>
													<label class="container1"> YES
													<input onClick="showele('exp')" type="radio" name="radio">
  													<span class="checkmark1"></span>
													</label>
													<label class="container1"> NO
													<input onClick="hideele('exp')" type="radio" name="radio">
  													<span class="checkmark1"></span>
													</label>
													
												</div>
												</div>
												<div style="display: none;" id="exp" class="form-group form-group-last" style="padding-top: 10px;">
												<div  class="col-lg-12 form-group-sub">
													<label class="form-control-label">Select the event/position in which you worked in: </label>
													<select name="expr" class="form-control" name="billing_card_exp_month">
														<option value="">Select</option>
														<option value="01">01</option>
														<option value="02">02</option>
														<option value="03">03</option>
														<option value="04">04</option>
														<option value="05">05</option>
														<option value="06">06</option>
														<option value="07">07</option>
														<option value="08">08</option>
														<option value="09">09</option>
														<option value="10">10</option>
														<option value="11">11</option>
														<option value="12">12</option>
													</select>
												</div>
													
												</div>
												<hr>
												<div class="col-lg-12 col-md-12 col-sm-12">
												<div class="form-group form-group-last" style="padding-top: 10px;">
													<label>Did you participate in any of the inter college fests ? </label>
													<br>
													<label class="container1"> YES
													<input onClick="showele('fest')" type="radio" name="fest">
  													<span class="checkmark1"></span>
													</label>
													<label class="container1"> NO
													<input onClick="hideele('fest')" type="radio" name="fest">
  													<span class="checkmark1"></span>
													</label>
													
												</div>
												</div>
												<div style="display: none;" id="fest" class="col-lg-12 col-md-12 col-sm-12">
												<div class="form-group form-group-last" style="padding-top: 10px;">
													<label for="exampleTextarea"> Enter the events in which you have participated in inter college fests (saparate multiple events with comma eg: web designing, coding) </label>
													<input type="text" class="form-control" name="fevents" placeholder="Enter events">
												</div>
												</div>
											</div>
										</div>
									</div>
									<div class="kt-portlet__foot">
										<div class="kt-form__actions">
											<div class="row">
												<div class="col-lg-12 kt-align-center">
													<button type="submit" name="sub" class="btn btn-primary">Submit</button>
													<input type="submit" value="submit">
<!--												<button type="reset" class="btn btn-secondary">Cancel</button>-->
												</div>
											</div>
										</div>
									</div>
								</form>

								<!--end::Form-->
							</div>

							<!--end::Portlet-->
						</div>
					</div>
				</div>
		
				</div>
			</div>
		</div>

		<!-- end:: Page -->

		<?php include 'admin/ui/jslink.php'; ?>

		<!--begin::Page Scripts(used by this page) -->
		<script src="assets/js/pages/custom/login/login-general.js" type="text/javascript"></script>
		<script src="assets/js/pages/crud/forms/validation/form-controls.js" type="text/javascript"></script>
		<!--end::Page Scripts -->
	</body>

	<!-- end::Body -->
</html>