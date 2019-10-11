<?php
include '../login/accesscontroladmin.php';
require('../access/connect.php');
$ausername=$_SESSION['ausername'];

if (isset($_POST['staffdetailsubmit']))
{
//$a=$_POST["sid"];
$b=$_POST["fname"];
$c=$_POST["lname"];
$d=$_POST["semail"];
$e=$_POST["smobile"];
$f=$_POST["susername"];
$g=$_POST["spassword"];
$iquery="insert into staffdetails(sfname,slname,semail,smobile,susername,spassword)values('$b','$c',$d,$e,'$f','$h')";
if($mysql->query($iquery))
{
    echo "Staff details added successfully!!!";
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
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--csslink.php includes fevicon and title-->
    <?php include 'assets/csslink.php'; ?>
<!-- username check js start--->
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.8.2.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('#usernameLoading').hide();
		$('#username').keyup(function(){
		  $('#usernameLoading').show();
	      $.post("check-eventusername.php", {
	        username: $('#username').val()
	      }, function(response){
	        $('#usernameResult').fadeOut();
	        setTimeout("finishAjax('usernameResult', '"+escape(response)+"')", 500);
	      });
	    	return false;
		});
	});

	function finishAjax(id, response) {
	  $('#usernameLoading').hide();
	  $('#'+id).html(unescape(response));
	  $('#'+id).fadeIn();
	} //finishAjax
</script>
<!-- username check js end -->
</head>

<body class="fix-sidebar fix-header">
    <!--header.php includes preloader, top navigarion, logo, user dropdown-->
    <!--div id wrapper in header.php-->
    <!--left-sidebar.php includes mobile search bar, user profile, menu-->
    <?php include 'assets/header.php';
		include 'assets/left-sidebar.php';
		include 'assets/breadcrumbs.php';
	include 'assets/responsive.php';
	?>
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Add Events </h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <a href="../index.php" target="_blank" class="btn btn-info pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Home</a>
                        <?php echo breadcrumbs(); ?>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>

				<!--- imported add-doctors---->
				<!--Script to copy the input from fname to username-->

				<div class="row">
				<div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title m-b-0">Staff Information</h3>
                            <hr>
                            <form data-toggle="validator" method="post">
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

   

                                <div class="form-group">
                                    <label for="edecription" class="control-label">First Name</label>
                                    <input type="text" class="form-control" autocomplete="off" id="edesc" name="fname" placeholder="Enter first name" required></textarea>
                                    <!-- username check start 
										<div>
										<span id="usernameLoading"><img src="../plugins/images/busy.gif" alt="Ajax Indicator" height="15" width="15" /></span>
										<span id="usernameResult" style="color: #E40003"></span>
										</div>
				                     <!-- username check end -->
                                </div>
                                 <div class="form-group">
                                    <label for="inputName1" class="control-label">Last Name</label>
                                     <input type="text" name="lname" class="form-control" id="erounds" placeholder="Enter last name" required>
                                   
                                    <!-- username check start 
										<div>
										<span id="usernameLoading"><img src="../plugins/images/busy.gif" alt="Ajax Indicator" height="15" width="15" /></span>
										<span id="usernameResult" style="color: #E40003"></span>
										</div>
				                     <!-- username check end -->
                                </div>
                                
                                 <div class="form-group">
                                    <label for="inputName1" class="control-label">Email</label>
                                    <input type="text" class="form-control" autocomplete="off" id="participants" name="semail" placeholder="Enter Email id" required>
                                    <!-- username check start 
										<div>
										<span id="usernameLoading"><img src="../plugins/images/busy.gif" alt="Ajax Indicator" height="15" width="15" /></span>
										<span id="usernameResult" style="color: #E40003"></span>
										</div>
				                     <!-- username check end -->
                                </div>
                                
                                <div class="row">
                                	<div class="col-md-12">
                                       <div class="form-group">
                                        	 <label class="control-label">Mobile Number</label>
											<div class="col-sm-12 p-l-0">
												<div class="input-group">
													<!--<div class="input-group-addon">Dr.</div>-->
													<input type="text" name="smobile" class="form-control" id="hname" placeholder="Enter mobile number" required>
													<!--onKeyUp="copyTextValue();"-->
                                                </div><br></div>
                                          
                                         </div>
                                    </div>
                                    <!--/span-->
									 
                                    <!--/span-->
                                 </div>
                               <!-- <div class="form-group">
                                    <label class="col-sm-12 p-l-0">Gender</label>
                                    <div class="col-sm-12 p-l-0">
                                        <select class="form-control" name="gender" required>
                                            <option selected hidden disabled>Select Gender</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-12 p-l-0">Floor</label>
                                    <div class="col-sm-12 p-l-0">
                                        <select class="form-control" name="floor">
                                            <option selected hidden disabled>Select Floor</option>
                                            <option value="G">Ground floor</option>
                                            <option value="1">1st floor</option>
                                            <option value="2">2nd floor</option>
                                            <option value="3">3rd floor</option>
                                        </select>
                                    </div>
                                </div>-->

                                <!--<div class="form-group">
                                    <label for="example-phone">Staff user name </label>
                                        <input type="text" required id="example-phone" name="hmob" class="form-control" placeholder="Enter staff user name " data-error="Invalid mobile number">
										<div class="help-block with-errors"></div>
                                </div>
                                 <div class="form-group">
                                    <label for="inputEmail" class="control-label">Staff password</label>
                                    <input type="email" name="hemail" class="form-control" id="inputEmail" placeholder="Enter staff password" data-error="This email address is invalid" required>
                                    <div class="help-block with-errors"></div>
                                </div>-->
                                 <div class="form-group">
                                    <label for="inputName1" class="control-label">Staff Username</label>
                                    <input type="text" class="form-control" autocomplete="off" id="username" name="susername" placeholder="Enter staff username" required>
                                    <!-- username check start -->
									<!--	<div>
										<span id="usernameLoading"><img src="../plugins/images/busy.gif" alt="Ajax Indicator" height="15" width="15" /></span>
										<span id="usernameResult" style="color: #E40003"></span>
										</div>
				                     <!-- username check end -->
                               </div>
                                <div class="form-group">
                                    <label for="inputPassword" class="control-label">Staff Password</label>
                                    <div class="row">
                                        <div class="form-group col-sm-6">
                                            <input type="password" name="spassword" data-toggle="validator" data-minlength="6" class="form-control" id="inputPassword" placeholder="Enter password" required>
                                            <span class="help-block">Minimum of 6 characters</span> </div>
                                        <div class="form-group col-sm-6">
                                            <input type="password" name="rpassword" class="form-control" id="inputPasswordConfirm" data-match="#inputPassword" data-match-error="Passwords don't match" placeholder="Confirm" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                                <!--<div class="form-group">
                                    <div class="checkbox">
                                        <input type="checkbox" id="terms" data-error="Before you wreck yourself" required>
                                        <label for="terms"> Check yourself </label>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>-->
                                <div class="form-group">
                                    <center><button type="submit" name="staffdetailsubmit" class="btn btn-info">Submit</button></center>
                                </div>
                            </form>
                        </div>
                    </div>
				</div>
				<!---End of impoted--->
                <!-- .right-sidebar -->
                <!--DNS Removed Service Panel-->
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