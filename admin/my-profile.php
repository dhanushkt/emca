<?php
include '../login/accesscontroladmin.php';
$ausername = $_SESSION['ausername'];
require( '../access/connect.php' );
date_default_timezone_set( 'Asia/Kolkata' );
$date = date("d-m-Y");

$query = "SELECT * FROM admin WHERE auname='$ausername'";
$result = mysqli_query( $connection, $query );
$row = mysqli_fetch_assoc( $result );
$id = $row["aid"];

//update profile
if (isset( $_POST['updateprofile'])) {
	$username = mysqli_real_escape_string($connection, $_POST['username']);
	$email = mysqli_real_escape_string($connection, $_POST['email']);
	//$mob = mysqli_real_escape_string($connection, $_POST['amob']);

	$uquery = "UPDATE admin SET auname='$username', aemail='$email' WHERE aid='$id'";
	$uresult = mysqli_query($connection, $uquery);
	if ( $uresult ) {
		$squery = "SELECT * FROM admin WHERE aid='$id'";
		$sresult = mysqli_query($connection, $squery);
		$row = mysqli_fetch_assoc($sresult);
		$smsg = "Profile updated successfully!";
		$_SESSION['ausername'] = $row['auname'];
		$ausername = $_SESSION['ausername'];
	} else {
		$fmsg = "error!";
	}
}
//change password
if ( isset( $_POST[ 'changepw' ] ) ) {
	$oldpw = md5( $_POST['oldpassword'] );
	if($oldpw == $row["apass"])
	{
		$npw = md5($_POST['newpassword']);
		$pwquery = "UPDATE admin SET apass='$npw' WHERE auname='$ausername'";
		$pwresult = mysqli_query($connection, $pwquery);
		$smsg = "Password updated successfully!";

	} else {
		$fmsg = "Wrong old password!";
	}
}


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
					<h4 class="page-title">Edit Profile</h4>
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
			<div id="responsive-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
							<h4 class="modal-title">Importent Instruction</h4>
						</div>
						<div class="modal-body">
							To Edit Admin information or to delete Admin account you need to login to that admin account.
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
							<a href="logout.php" class="btn btn-danger waves-effect waves-light">Proceed for login</a>
						</div>
					</div>
				</div>
			</div>
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
									<h4 class="text-white">
										<?php echo $ausername ?>
									</h4>
									<h5 class="text-white">
										<?php echo $row["aemail"]; ?>
									</h5>
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
							<li role="presentation" class="nav-item"><a href="#profile" class="nav-link active" aria-controls="profile" role="tab" data-toggle="tab" aria-expanded="true"><span class="visible-xs"><i class="fa fa-user"></i></span> <span class="hidden-xs">Profile</span></a>
							</li>
							<li role="presentation" class="nav-item"><a href="#settings" class="nav-link" aria-controls="settings" role="tab" data-toggle="tab" aria-expanded="false"><span class="visible-xs"><i class="fa fa-cog"></i></span> <span class="hidden-xs">Setting</span></a>
							</li>
							<li role="presentation" class="nav-item"><a href="#changepassword" class="nav-link" aria-controls="changepassword" role="tab" data-toggle="tab" aria-expanded="false"><span class="visible-xs"><i class="fa fa-key"></i></span> <span class="hidden-xs">Change Password</span></a>
							</li>
							<!--
							<li role="presentation" class="nav-item"><a href="#remove" class="nav-link" aria-controls="remove" role="tab" data-toggle="tab" aria-expanded="false"><span class="visible-xs"><i class="fa fa-times"></i></span> <span class="hidden-xs">Remove Account</span></a>
							</li> -->
						</ul>
						<div class="tab-content">
							<div class="tab-pane active" id="profile">
								<div class="row">
									<div class="col-md-3 col-xs-6 b-r"> <strong>Username</strong>
										<br>
										<p class="text-muted">
											<?php echo $ausername; ?>
										</p>
									</div>
<!--
									<div class="col-md-3 col-xs-6 "> <strong>Mobile</strong>
										<br>
										<p class="text-muted">
											<?php //echo $row["amobile"]; ?>
										</p>
									</div>
-->
									<div class="col-md-6 col-xs-6 "> <strong>Email</strong>
										<br>
										<p class="text-muted">
											<?php echo $row["aemail"]; ?>
										</p>
									</div>


								</div>


							</div>


							<div class="tab-pane" id="settings">
								<form data-toggle="validator" method="post">


									<div class="form-group">
										<label for="inputName1" class="control-label">Username</label>
										<input type="text" class="form-control" autocomplete="off" id="username" name="username" placeholder="Username is used to login" value="<?php echo $ausername ?>" required>
									</div>
									<div class="form-group">
										<label for="inputEmail" class="control-label">Email</label>
										<input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email" value="<?php echo $row['aemail']; ?>" data-error="This email address is invalid" required>
										<div class="help-block with-errors"></div>
									</div>
<!--
									<div class="form-group">
										<label for="inputEmail" class="control-label">Mobile Number</label>
										<input pattern="[0-9]*" minlength="10" maxlength="11" type="tel" name="amob" class="form-control" id="inputMobile" placeholder="Mobile Number" value="<?php //echo $row['amobile']; ?>" data-error="This mobile number is invalid" required>
										<div class="help-block with-errors"></div>
									</div>
-->

									<div class="form-group">
										<div class="col-sm-12">
											<button class="btn btn-success" type="submit" name="updateprofile">Update Profile</button>
										</div>
									</div>
								</form>
							</div>

							<div class="tab-pane" id="changepassword">

								<form data-toggle="validator" method="post">
									<div class="form-group">
										<label for="inputPassword" class="control-label">Change Password</label>
										<div calss="row">
											<div class="form-group col-sm-12 p-l-0 p-t-10">
												<input type="password" name="oldpassword" data-toggle="validator" data-minlength="6" class="form-control" id="oldPassword" placeholder="Old Password" required>
											</div>
										</div>

										<div class="row">
											<div class="form-group col-sm-6">
												<input type="password" name="newpassword" data-toggle="validator" data-minlength="6" class="form-control" id="inputPassword" placeholder="New Password" required>
												<span class="help-block">Minimum of 6 characters</span> </div>
											<div class="form-group col-sm-6">
												<input type="password" name="retypepassword" class="form-control" id="inputPasswordConfirm" data-match="#inputPassword" data-match-error="Passwords don't match" placeholder="Confirm New Password" required>
												<div class="help-block with-errors"></div>
											</div>
										</div>
									</div>
									<div class="form-group" style="padding-bottom: 0px; margin-bottom: 0px">

										<button class="btn btn-success" name="changepw">Change Password</button>

									</div>

								</form>


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
		$( '.deleteAdmin' ).click( function () {
			id = $( this ).attr( 'data-id' );
			swal( {
				title: "Are you sure?",
				text: "You will not be able to recover this account!",
				type: "warning",
				showCancelButton: true,
				confirmButtonColor: "#DD6B55",
				confirmButtonText: "Yes, delete it!",
				closeOnConfirm: false,
				closeOnCancel: false
			}, function ( isConfirm ) {
				if ( isConfirm ) {
					$.ajax( {
						url: 'deleteadmin.php?id=' + id,
						type: 'DELETE',
						data: {
							id: id
						},
						success: function () {
							swal( "Deleted!", "User has been deleted.", "success" );
							window.location.replace( "logout.php" );
						}
					} );
				} else {
					swal( "Cancelled", "Admin account is safe :)", "error" );
				}
			} );
		} );

	} );
</script>