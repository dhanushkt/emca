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
									<img src="assets/media/logos/logo-5.png">
								</a>
							</div>
							<div class="kt-login__signin">
								<div class="kt-login__head">
									<h3 class="kt-login__title">Sign In To Admin</h3>
								</div>
								
							</div>
							
						</div>
					</div>
				<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid" style="padding: 50px;">
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
								<form  class="kt-form kt-form--label-right">
									<div class="kt-portlet__body">
										<div class="form-group row">
											<div class="col-lg-6">
												<label>First Name:</label>
												<input type="email" class="form-control" placeholder="Enter full name">
												<span class="form-text text-muted">Please enter your full name</span>
											</div>
											<div class="col-lg-6">
												<label>Last Name:</label>
												<input type="email" class="form-control" placeholder="Enter full name">
												<span class="form-text text-muted">Please enter your full name</span>
											</div>
											<div class="col-lg-6">
												<label class="">Contact Number:</label>
												<input type="email" class="form-control" placeholder="Enter contact number">
												<span class="form-text text-muted">Please enter your contact number</span>
											</div>
										</div>
										<div class="form-group row">
											<div class="col-lg-6">
												<label>Address:</label>
												<div class="kt-input-icon">
													<input type="text" class="form-control" placeholder="Enter your address">
													<span class="kt-input-icon__icon kt-input-icon__icon--right"><span><i class="la la-map-marker"></i></span></span>
												</div>
												<span class="form-text text-muted">Please enter your address</span>
											</div>
											<div class="col-lg-6">
												<label class="">Postcode:</label>
												<div class="kt-input-icon">
													<input type="text" class="form-control" placeholder="Enter your postcode">
													<span class="kt-input-icon__icon kt-input-icon__icon--right"><span><i class="la la-bookmark-o"></i></span></span>
												</div>
												<span class="form-text text-muted">Please enter your postcode</span>
											</div>
										</div>
										<div class="form-group row">
											<div class="col-lg-6">
												<label>User Group:</label>
												<div class="kt-radio-inline">
													<label class="kt-radio kt-radio--solid">
																				<input type="radio" name="example_2" checked value="2"> Sales Person
																				<span></span>
																			</label>

													<label class="kt-radio kt-radio--solid">
																				<input type="radio" name="example_2" value="2"> Customer
																				<span></span>
																			</label>

												</div>
												<span class="form-text text-muted">Please select user group</span>
											</div>
										</div>
									</div>
									<div class="kt-portlet__foot">
										<div class="kt-form__actions">
											<div class="row">
												<div class="col-lg-6">
													<button type="reset" class="btn btn-primary">Save</button>
													<button type="reset" class="btn btn-secondary">Cancel</button>
												</div>
												<div class="col-lg-6 kt-align-right">
													<button type="reset" class="btn btn-danger">Delete</button>
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

		<!--end::Page Scripts -->
	</body>

	<!-- end::Body -->
</html>