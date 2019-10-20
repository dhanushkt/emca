<?php
include '../login/accesscontroladmin.php';
$ausername = $_SESSION['ausername'];
require( '../access/connect.php' );
date_default_timezone_set( 'Asia/Kolkata' );
$date = date( "d-m-Y" );

$id=$_GET['id'];
$getstud=mysqli_query($connection, "SELECT * FROM student JOIN skills ON student.studid=skills.studid WHERE student.studid='$id'");
$studinfo=mysqli_fetch_assoc($getstud);

?>
<!DOCTYPE html>
<!--
   This is a starter template page. Use this page to start your new project from
   scratch. This page gets rid of all links and provides the needed markup only.
   -->
<html lang="en">
<head>
	<!--csslink.php includes fevicon and title-->
	<?php include 'assets/csslink.php'; ?>

	<!-- username check js start -->
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.2.js"></script>
	<script type="text/javascript">
		$( document ).ready( function () {
			$( '#usernameLoading' ).hide();
			$( '#username' ).keyup( function () {
				$( '#usernameLoading' ).show();
				$.post( "check-adminusername.php", {
					username: $( '#username' ).val()
				}, function ( response ) {
					$( '#usernameResult' ).fadeOut();
					setTimeout( "finishAjax('usernameResult', '" + escape( response ) + "')", 500 );
				} );
				return false;
			} );
		} );

		function finishAjax( id, response ) {
			$( '#usernameLoading' ).hide();
			$( '#' + id ).html( unescape( response ) );
			$( '#' + id ).fadeIn();
		} //finishAjax
	</script>
	<!-- username check js end -->
	<?php include 'assets/responsive.php'; ?>
</head>

<body class="fix-sidebar">
	<!--header.php includes preloader, top navigarion, logo, user dropdown-->
	<!--div id wrapper in header.php-->
	<!--left-sidebar.php includes mobile search bar, user profile, menu-->
	<?php include 'assets/header.php';
	include 'assets/left-sidebar.php';
	include 'assets/breadcrumbs.php';
	?>
	<!-- Page Content -->
	<div id="page-wrapper">
		<div class="container-fluid">
			<div class="row bg-title">
				<!-- .page title -->
				<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
					<h4 class="page-title">Student Profile</h4>
				</div>
				<!-- /.page title -->
				<!-- .breadcrumb -->
				<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
					<a href="../index.php" target="_blank" class="btn btn-info pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Home</a>
					<?php echo breadcrumbs(); ?>
				</div>
				<!-- /.breadcrumb -->
			</div>
			<!--DNS added Dashboard content-->

			<!--DNS Added Model-->
			<!--DNS model END-->


			<!--row -->
			<?php if(isset($fmsg)) { ?>
			<div class="alert alert-danger alert-dismissable">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<?php echo $fmsg; ?>
			</div>
			<?php }?>
			<?php if(isset($smsg)) { ?>
			<div class="alert alert-success alert-dismissable">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<?php echo $smsg; ?>
			</div>
			<?php }?>
			<div class="row">
				<div class="col-md-4 col-xs-12">
					<div class="white-box">
						<div class="user-bg"> <img width="100%" height="100%" alt="user" src="../plugins/images/profile-menu.png">
							<div class="overlay-box">
								<div class="user-content">
									<a href="javascript:void(0)"> <img src="../plugins/images/users/user(2).png" class="thumb-lg img-circle" > </a>
									<h3 class="text-white">
										<?php echo $studinfo['fname']." ".$studinfo['lname']; ?>
									</h3>
									<h4 class="text-white">
										<?php echo strtoupper($studinfo["usn"]); ?>
									</h4>
								</div>
							</div>
						</div>
						<!--<div class="user-btm-box">
                                <div class="col-md-4 col-sm-4 text-center">
                                    <p class="text-purple"><i class="ti-facebook"></i></p>
                                    <h1>258</h1>
                                </div>
                                <div class="col-md-4 col-sm-4 text-center">
                                    <p class="text-blue"><i class="ti-twitter"></i></p>
                                    <h1>125</h1>
                                </div>
                                <div class="col-md-4 col-sm-4 text-center">
                                    <p class="text-danger"><i class="ti-dribbble"></i></p>
                                    <h1>556</h1>
                                </div>
                            </div>-->
					</div>
				</div>
				<div class="col-md-8 col-xs-12">
					<div class="white-box">
						<ul class="nav customtab nav-tabs" role="tablist">
							<!--<li role="presentation" class="nav-item"><a href="#home" class="nav-link " aria-controls="home" role="tab" data-toggle="tab" aria-expanded="true"><span class="visible-xs"><i class="fa fa-home"></i></span><span class="hidden-xs"> Activity</span></a></li>-->
							<li role="presentation" class="nav-item"><a href="#profile" class="nav-link active" aria-controls="profile" role="tab" data-toggle="tab" aria-expanded="true"><span class="visible-xs"><i class="fa fa-user"></i></span> <span class="hidden-xs">Info</span></a>
							</li>
							<li role="presentation" class="nav-item"><a href="#settings" class="nav-link" aria-controls="settings" role="tab" data-toggle="tab" aria-expanded="false"><span class="visible-xs"><i class="fa fa-cog"></i></span> <span class="hidden-xs">Edit</span></a>
							</li>
							<li role="presentation" class="nav-item"><a href="#changepassword" class="nav-link" aria-controls="changepassword" role="tab" data-toggle="tab" aria-expanded="false"><span class="visible-xs"><i class="fa fa-trash"></i></span> <span class="hidden-xs">Remove</span></a>
							</li>
							<!--
							<li role="presentation" class="nav-item"><a href="#remove" class="nav-link" aria-controls="remove" role="tab" data-toggle="tab" aria-expanded="false"><span class="visible-xs"><i class="fa fa-times"></i></span> <span class="hidden-xs">Remove Account</span></a>
							</li> -->
						</ul>
						<div class="tab-content">
							<div class="tab-pane active" id="profile">
								<div class="row">
									<div class="col-md-3 col-xs-6 b-r"> <strong>Name</strong>
										<br>
										<p class="text-muted">
											<?php echo $studinfo['fname']." ".$studinfo['lname']; ?>
										</p>
									</div>
									<div class="col-md-3 col-xs-6 b-r"> <strong>Mobile</strong>
										<br>
										<p class="text-muted">
											<?php echo $studinfo['phno']; ?>
										</p>
									</div>
									<div class="col-md-6 col-xs-6 "> <strong>Email</strong>
										<br>
										<p class="text-muted">
											<?php echo $studinfo['email']; ?>
										</p>
									</div>


								</div>
								<hr>
								<div class="row">
									<div class="col-md-3 col-xs-6 b-r"> <strong>Batch</strong>
										<br>
										<p class="text-muted">
											<?php echo $studinfo['batch']; ?>
										</p>
									</div>
									<div class="col-md-3 col-xs-6 b-r"> <strong>Type</strong>
										<br>
										<p class="text-muted">
											<?php echo $studinfo['type']; ?>
										</p>
									</div>
									<div class="col-md-6 col-xs-6 "> <strong>USN</strong>
										<br>
										<p class="text-muted">
											<?php echo $studinfo['usn']; ?>
										</p>
									</div>
								
								</div>
								<hr>
								<div class="row">
									<div class="col-md-3 col-xs-6 b-r"> <strong>Talents</strong>
										<br>
										<p class="text-muted">
											<?php echo $studinfo['talents']; ?>
										</p>
									</div>
									<div class="col-md-3 col-xs-6 b-r"> <strong>Talent Details</strong>
										<br>
										<p class="text-muted">
											<?php echo $studinfo['addtalents']; ?>
										</p>
									</div>
								
								</div>
								<hr>
								<div class="row">
									<div class="col-md-3 col-xs-6 b-r"> <strong>Event Conducted</strong>
										<br>
										<p class="text-muted">
											<?php echo $studinfo['sexpr']; ?>
										</p>
									</div>
									<div class="col-md-3 col-xs-6 b-r"> <strong>Events Participated</strong>
										<br>
										<p class="text-muted">
											<?php echo $studinfo['sevents']; ?>
										</p>
									</div>
								
								</div>


							</div>


							<div class="tab-pane" id="settings">
								<form data-toggle="validator" method="post">
									<div class="form-group">
										<label for="inputName1" class="control-label">First Name</label>
										<input type="text" class="form-control" autocomplete="off" name="fname" placeholder="First Name" value="<?php echo $studinfo['fname'] ?>" required>
									</div>
									<div class="form-group">
										<label for="inputName1" class="control-label">Last Name</label>
										<input type="text" class="form-control" autocomplete="off" name="lname" placeholder="Last Name" value="<?php echo $studinfo['lname'] ?>" required>
									</div>
									<div class="form-group">
										<label for="inputEmail" class="control-label">Email</label>
										<input type="email" name="email" class="form-control" placeholder="Email" value="<?php echo $studinfo['email']; ?>" data-error="This email address is invalid" required>
										<div class="help-block with-errors"></div>
									</div>
									<div class="form-group">
										<label for="inputEmail" class="control-label">Mobile Number</label>
										<input pattern="[0-9]*" minlength="10" maxlength="11" type="tel" name="amob" class="form-control" id="inputMobile" placeholder="Mobile Number" value="<?php echo $studinfo['phno']; ?>" data-error="This mobile number is invalid" required>
										<div class="help-block with-errors"></div>
									</div>

									<div class="form-group">
										<div class="col-sm-12">
											<button class="btn btn-success" type="submit" name="updateprofile">Update Profile</button>
										</div>
									</div>
								</form>
							</div>

							<div class="tab-pane" id="changepassword">
									<div class="form-group" style="padding-bottom: 0px; margin-bottom: 0px; text-align: center">
										<button data-id="<?php echo $id; ?>" class="btn btn-danger deleteAdmin" name="changepw">Remove Student Record</button>
									</div>
							</div>
							<!--
							<div class="tab-pane" id="remove">
								<div class="text-center">
									<a href="#" class="fcbtn btn btn-danger model_img deleteAdmin" data-id="<?php //echo $id ?>" id="deleteDoc">Remove Admin Account</a>
								</div>
							</div> -->
						</div>

					</div>
				</div>
			</div>
		</div>

		<!--/row -->

		<!--DNS End-->
		<!-- .row -->
		<!--<div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                            <h3 class="box-title">Blank Starter page</h3>
                        </div>
                    </div>
                </div>-->
		<!-- /.row -->
		<!-- .right-sidebar -->
		<!-- Removed Service Panel DNS-->
		<!-- /.right-sidebar -->
	</div>
	<!-- /.container-fluid -->
	<!--footer.php contains footer-->
	<?php include'assets/footer.php'; ?>
	</div>
	<!-- /#page-wrapper -->
	</div>
	<!-- /#wrapper -->
	<!--jslink has all the JQuery links-->
	<?php include'assets/jslink.php'; ?>
</body>

</html>

<script>
	$( document ).ready( function () {
		$('.deleteAdmin').click( function () {
			id = $(this).attr('data-id');
			swal( {
				title: "Are you sure?",
				text: "You will not be able to recover this data!",
				type: "warning",
				showCancelButton: true,
				confirmButtonColor: "#DD6B55",
				confirmButtonText: "Yes, delete it!",
				closeOnConfirm: false,
				closeOnCancel: false
			}, function ( isConfirm ) {
				if ( isConfirm ) {
					$.ajax( {
						url: 'deletestud.php?id='+id,
						type: 'POST',
						data: {
							id: id
						},
						success: function () {
							swal( "Deleted!", "Data has been deleted.", "success" );
							window.location.replace("view-students.php");
						}
					} );
				} else {
					swal("Cancelled", "Student data is safe :)", "error" );
				}
			} );
		} );

	} );
</script>