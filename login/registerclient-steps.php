<?php
require('connect.php');
if(isset($_POST['username']) && isset($_POST['cpass']) && isset($_POST['cemail']))
{
	if(!($_POST['cpass']==""))
	{
	$cuname=$_POST['username'];
	$cemail=$_POST['cemail'];
	$cphno=$_POST['cphno'];
	$cpass=md5($_POST['cpass']);
	$crpass=md5($_POST['crpass']);
	$sname=$_POST['sname'];
	$semail=$_POST['semail'];
	$sphone=$_POST['sphone'];
	$saddr=$_POST['saddress'];
	$sgst=$_POST['sgst'];
	
	if($cpass == $crpass) 
	{

		$insertquery="INSERT INTO `clients` (cuname, cemail, cphno, cpassword, sname, semail, sphno, saddress, sgstno) VALUES ('$cuname','$cemail','$cphno','$cpass','$sname','$semail','$sphone','$saddr','$sgst')";
		$insertc=mysqli_query($connection,$insertquery);
		if($insertc)
		{
			$smsg="Account created successfully redirecting to login in 4 seconds";
		}
		else
		{
			$fmsg="not successful".mysqli_error($connection);
		}
	}
	else
	{
		$fmsg="Wrong password";
	}
	}
	else
	{
		$fmsg="please fill out all the fields";
	}
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
    <title>Elite Admin Template - The Ultimate Multipurpose admin template</title>
    <!-- Bootstrap Core CSS -->
    <link href="../plugins/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="../plugins/css/animate.css" rel="stylesheet">
    <!-- Wizard CSS -->
    <link href="../plugins/bower_components/register-steps/steps.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../plugins/css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="../plugins/css/colors/default.css" id="theme" rel="stylesheet">
	<link href="../plugins/bower_components/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
    <script src="../plugins/bower_components/sweetalert/sweetalert.min.js"></script>
	
	<!-- username check js start -->
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.2.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#usernameLoading').hide();
			$('#username').keyup(function(){
			  $('#usernameLoading').show();
			  $.post("check-clientusername.php", {
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

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <section style="background-color: #DDDDDD; height: 800px" id="wrapper" class="step-register">
        <div class="register-box">
            <div class="">
                <a href="javascript:void(0)" class="text-center db m-b-40"><img src="../plugins/images/eliteadmin-logo-dark.png" alt="Home" />
                    <br/><img src="../plugins/images/eliteadmin-text-dark.png" alt="Home" /></a>
				<?php if(isset($fmsg)) { ?>
									<div class="alert alert-danger alert-dismissable">
										<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
										 <?php echo $fmsg; ?>
									</div> 
					            <?php }?> 
								<?php if(isset($smsg)) { ?>
										<div class="alert alert-success alert-dismissable">
											<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
											 <?php echo $smsg; 
														echo '<script> window.setTimeout(function(){
									swal("Your Account is Created!", "Redirecting to login page in 4 seconds.", "success");
								}, 300);  window.setTimeout(function(){
									window.location.href = "../login/";
								}, 4000); </script>'
											?>
										</div> 
								<?php }?>
                <!-- multistep form -->
                <form method="post" id="msform">
                    <!-- progressbar -->
                    <ul id="eliteregister">
                        <li class="active">Account Setup</li>
                        <li>Shop Details</li>
                   		<li>Shop Contact</li>
                    </ul>
                    <!-- fieldsets -->
                    <fieldset>
                        <h2 class="fs-title">Create your account</h2>
						<input required type="text" name="username" placeholder="Username" id="username" autocomplete="off" />
						<!-- username check start -->
						<div>
						<span id="usernameLoading"><img src="../plugins/images/busy.gif" alt="Ajax Indicator" height="15" width="15" /></span>
						<span id="usernameResult" style="color: #E40003"></span>
						</div>
				        <!-- username check end -->
                        <input required type="email" name="cemail" placeholder="Email" />
						<input required minlength="10" type="number" name="cphno" placeholder="Mobile number" />
                        <input required minlength="6" type="password" name="cpass" placeholder="Password" />
                        <input  required minlength="6" type="password" name="crpass" placeholder="Confirm Password" />
                        <input type="button" name="next" class="next action-button" value="Next" />
                    </fieldset>
                    <fieldset>
                        <h2 class="fs-title">Shop Details</h2>
                        <p>Displayed on bill</p>
                        <input required type="text" name="sname" placeholder="Shop Name" />
                        <input type="email" name="semail" placeholder="Shop email" />
                        <input type="button" name="previous" class="previous action-button" value="Previous" />
                        <input type="button" name="next" class="next action-button" value="Next" />
                    </fieldset>
                    <fieldset>
                        <h2 class="fs-title">Shop Contact Details</h2>
<!--                        <h3 class="fs-subtitle">We will never sell it</h3>-->
                        <input required type="number" name="sphone" placeholder="Shop phone (saparate multiple phone no. by comma)" />
						<textarea required  name="saddress" placeholder="Shop Address"></textarea>
						<input type="text" name="sgst" placeholder="GST number (optional)" />
                    
                        <input type="button" name="previous" class="previous action-button" value="Previous" />
                        <input type="submit" name="csubmit" class="action-button" value="Submit" />
                    </fieldset>
                </form>
                <div class="clear"></div>
            </div>
        </div>
    </section>
    <!-- jQuery -->
    <script src="../plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="../plugins/bootstrap/dist/js/tether.min.js"></script>
    <script src="../plugins/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../plugins/bower_components/bootstrap-extension/js/bootstrap-extension.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <script src="../plugins/bower_components/register-steps/jquery.easing.min.js"></script>
    <script src="../plugins/bower_components/register-steps/register-init.js"></script>
    <!--slimscroll JavaScript -->
    <script src="../plugins/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="../plugins/js/waves.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="../plugins/js/custom.min.js"></script>
    <!--Style Switcher -->
    <script src="../plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>
