<!DOCTYPE html>
<html lang="en">

	<!-- begin::Head -->
	<head>
		<?php include 'admin/ui/csslink.php'; ?>
		<!--begin::Page Custom Styles(used by this page) -->
		<link href="assets/css/pages/login/login-4.css" rel="stylesheet" type="text/css" />
		<!--end::Page Custom Styles -->
	</head>

	<!-- end::Head -->

	<!-- begin::Body -->
	<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">

		<!-- begin:: Page -->
		<div class="kt-grid kt-grid--ver kt-grid--root">
			<div class="kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v4 kt-login--signin" id="kt_login">
				<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" style="background-image: url(assets/media/bg/bg-2.jpg);">
					<div class="kt-grid__item kt-grid__item--fluid kt-login__wrapper" style="padding-bottom: 5px;">
						<div class="kt-login__container">
							<div class="kt-login__logo">
								<a href="#">
									<img width="400" height="160" src="assets/media/logos/samca.png">
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
								<form  class="kt-form kt-form--label-right" id="kt_form_1" >
									<div class="kt-portlet__body">
										<div class="form-group form-group-last kt-hide">
													<div class="alert alert-danger" role="alert" id="kt_form_1_msg">
														<div class="alert-icon"><i class="flaticon-warning"></i></div>
														<div class="alert-text">
															Oh snap! Change a few things up and try submitting again.
														</div>
														<div class="alert-close">
															<button type="button" class="close" data-dismiss="alert" aria-label="Close">
																<span aria-hidden="true"><i class="la la-close"></i></span>
															</button>
														</div>
													</div>
												</div>
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
												<input type="email" class="form-control" placeholder="Enter Email address">
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
															Select atleast any one of the talent or hobbies in which you are good at. <br> provide more details (eg: dance form) in additional info box. 
														</div>
													</div>
												</div>
												<div class="col-lg-12 col-md-12 col-sm-12">
														<div class="kt-checkbox-list">
															<label class="kt-checkbox kt-checkbox--bold kt-checkbox--brand">
																<input type="checkbox" name="talent"> Dance
																<span></span>
															</label>
															<label class="kt-checkbox kt-checkbox--bold kt-checkbox--brand">
																<input type="checkbox" name="talent"> Music
																<span></span>
															</label>
															<label class="kt-checkbox kt-checkbox--bold kt-checkbox--brand">
																<input type="checkbox" name="talent"> Singing 
																<span></span>
															</label>
															<label class="kt-checkbox kt-checkbox--bold kt-checkbox--brand">
																<input type="checkbox" name="talent"> Sports
																<span></span>
															</label>
															<label class="kt-checkbox kt-checkbox--bold kt-checkbox--brand">
																<input type="checkbox" name="talent"> Art 
																<span></span>
															</label>
															<label class="kt-checkbox kt-checkbox--bold kt-checkbox--brand">
																<input type="checkbox" name="talent"> Photography 
																<span></span>
															</label>
															<label class="kt-checkbox kt-checkbox--bold kt-checkbox--brand">
																<input type="checkbox" name="talent"> Video or Audio Editing 
																<span></span>
															</label>
															<label class="kt-checkbox kt-checkbox--bold kt-checkbox--brand">
																<input type="checkbox" name="talent"> Graphic or Logo Designing
																<span></span>
															</label>
															<label class="kt-checkbox kt-checkbox--bold kt-checkbox--brand">
																<input type="checkbox" name="talent">  
																<span></span> Coding / Web Development
															</label>
															<label class="kt-checkbox kt-checkbox--bold kt-checkbox--brand">
																<input type="checkbox" name="talent">  
																<span></span> Calligraphy
															</label>
															<label class="kt-checkbox kt-checkbox--bold kt-checkbox--brand">
																<input type="checkbox" name="talent">  
																<span></span> Anchoring / MC
															</label>
														</div>
<!--<span class="form-text text-muted">Please select at lease 1</span>-->
												</div>
												<div class="form-group form-group-last" style="padding-top: 10px;">
													<label for="exampleTextarea">Additional info / other talents: </label>
													<textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
												</div>
											</div>
										</div>
									</div>
									<div class="kt-portlet__foot">
										<div class="kt-form__actions">
											<div class="row">
												<div class="col-lg-12 kt-align-center">
													<button type="submit" class="btn btn-primary">Submit</button>
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