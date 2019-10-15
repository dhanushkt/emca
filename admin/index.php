<?php
include '../login/accesscontroladmin.php';
$ausername=$_SESSION['ausername'];
require('../access/connect.php');

$getstudno=mysqli_query($connection, "SELECT * FROM student student WHERE batch='2018' AND type='regular'");
$studno=mysqli_num_rows($getstudno);

$getstudno2019r=mysqli_query($connection, "SELECT * FROM student WHERE batch='2019' AND type='regular'");
$studno19r=mysqli_num_rows($getstudno2019r);

$getstudno2019l=mysqli_query($connection, "SELECT * FROM student WHERE batch='2019' AND type='lateral'");
$studno19l=mysqli_num_rows($getstudno2019l);
//$getfestdetails = mysqli_query( $connection,"SELECT * FROM fests WHERE fid='$fid'");
//$getfestrow = mysqli_fetch_assoc( $getfestdetails );
//$dateb=$getfestrow['fdate'];
//$myDateTime = DateTime::createFromFormat('Y-m-d', $dateb);
//$dobc = $myDateTime->format('F j, Y'); 
//$datefest = $myDateTime->format('d-m-Y');

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
	<link href="../plugins/css/hover.css" rel="stylesheet" media="all">
	<script>
	// Set the date we're counting down to
	var countDownDate = new Date("<?php echo $dobc ?>").getTime();

	// Update the count down every 1 second
	var x = setInterval(function() {

	  // Get todays date and time
	  var now = new Date().getTime();

	  // Find the distance between now and the count down date
	  var distance = countDownDate - now;

	  // Time calculations for days, hours, minutes and seconds
	  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
	  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
	  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
	  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

	  // Output the result in an element with id="demo"
	  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
	  + minutes + "m " + seconds + "s ";

	  // If the count down is over, write some text 
	  if (distance < 0) {
		clearInterval(x);
		document.getElementById("demo").innerHTML = "Started";
	  }
	}, 1000);
</script>
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
            <div class="container-fluid p-b-0">
                <div class="row bg-title">
					<!--add this line to include bg image to title: style="background:url(../plugins/images/heading-title-bg.jpg) no-repeat center center /cover;" -->
                    <!-- .page title -->
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12" >
                        <h4 class="page-title">Admin Dashboard</h4>
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
                <!--row -->
				
				<div class="row p-b-10">
					<div class="col-md-12 col-sm-10 hvr-wobble-horizontal">
						<div class="card card-inverse">
							<img id="theImgId" class="card-img" src="../plugins/images/cards/bg.png" height="140" alt="Card image">
							<div class="card-img-overlay" style="padding-top: 5px">
								<h4 class="card-title text-uppercase">WELCOME <?php echo $ausername; ?></h4>
								<p class="card-text" style=" float: left;">You are logged-in to ADMIN control panel. </p>
								
								<!--<p class="card-text"><small class="text-white">~OFMS</small></p>-->
                                <?php if(false) { ?>
                                <p id="wText" class="card-text text-warning"><i class="fa fa-info-circle"></i><b><?php echo' Fest Rules and Fee is not Updated'; ?> </b></p> <?php } ?>
							</div>
						</div>
					</div>
				</div>
	
				
                <div class="row">
<!--
                    <div class="col-md-3 col-sm-6 hvr-float-shadow" onClick="window.location='view-colleges.php'">
                        <div class="white-box">
							<h3 class="box-title"><b>Colleges Registered</b></h3>
							<ul class="list-inline two-part">
								<li><i class="fa fa-pen-square" style="color: blueviolet"></i></li>
								<li class="text-right"><span class="counter"><?php echo $wcount; ?></span></li>
							</ul>
                        </div>
                    </div>
-->
                    <div class="col-md-3 col-sm-6 hvr-float-shadow" onClick="window.location=''">
                        <div class="white-box">
							<h3 class="box-title"><b>Students 2018 Regular</b></h3>
							<ul class="list-inline two-part">
								<li><i class="fa fa-users text-info"></i></li>
								<li class="text-right"><span class="counter"><?php echo $studno ?></span></li>
							</ul>
                        </div>
                    </div>
					<div class="col-md-3 col-sm-6 hvr-float-shadow" onClick="window.location=''">
                        <div class="white-box">
							<h3 class="box-title"><b>Students 2019 Regular</b></h3>
							<ul class="list-inline two-part">
								<li><i class="fa fa-users text-info"></i></li>
								<li class="text-right"><span class="counter"><?php echo $studno19r ?></span></li>
							</ul>
                        </div>
                    </div>
					<div class="col-md-3 col-sm-6 hvr-float-shadow" onClick="window.location=''">
                        <div class="white-box">
							<h3 class="box-title"><b>Students 2019 Lateral</b></h3>
							<ul class="list-inline two-part">
								<li><i class="fa fa-users text-info"></i></li>
								<li class="text-right"><span class="counter"><?php echo $studno19l ?></span></li>
							</ul>
                        </div>
                    </div>
        
                    
                </div>
                <!--/row -->
				<!--row -->
				<!-- removed buttons -->
                <!--/row -->
                
                <!--DNS End-->
     
                <!-- .right-sidebar -->
                 <!-- Removed Service Panel DNS-->
                <!-- /.right-sidebar -->
            </div>
            <!-- /.container-fluid -->
            <!--footer.php contains footer-->
            <?php include'assets/footer.php' ?>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!--jslink has all the JQuery links-->
    <?php include'assets/jslink.php'; ?>
    <!--Counter js -->
    <script src="../plugins/bower_components/waypoints/lib/jquery.waypoints.js"></script>
    <script src="../plugins/bower_components/counterup/jquery.counterup.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="../plugins/js/dashboard3.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){  
			$('.Hoveranimated').hover(function(){
				$(".Hoveranimatedoc").removeClass("bg-black").addClass("bg-success");
				$(".Hoveranimatedoc").removeClass("fa-cog").addClass("fa-plus");
			},
			function(){
				$(".Hoveranimatedoc").removeClass("bg-success").addClass("bg-black");
				$(".Hoveranimatedoc").removeClass("fa-plus").addClass("fa-cog");
			}
									
			)
			
			$('.Hoveranimatep').hover(function(){
				$(".Hoveranimatepat").removeClass("bg-black").addClass("bg-success");
				$(".Hoveranimatepat").removeClass("fa-user").addClass("fa-plus");
			},
			function(){
				$(".Hoveranimatepat").removeClass("bg-success").addClass("bg-black");
				$(".Hoveranimatepat").removeClass("fa-plus").addClass("fa-user");
			}
									
			)
				 
			$('.Hoveranimates').hover(function(){
				$(".Hoveranimatestaff").removeClass("bg-black").addClass("bg-success");
				$(".Hoveranimatestaff").removeClass("fa-clipboard-list").addClass("fa-plus");
			},
			function(){
				$(".Hoveranimatestaff").removeClass("bg-success").addClass("bg-black");
				$(".Hoveranimatestaff").removeClass("fa-plus").addClass("fa-clipboard-list");
			}
									
			)
					
			$('.Hoveranimatew').hover(function(){
				$(".Hoveranimatewrd").removeClass("bg-black").addClass("bg-success");
				$(".Hoveranimatewrd").removeClass("fa-edit").addClass("fa-plus");
			},
			function(){
				$(".Hoveranimatewrd").removeClass("bg-success").addClass("bg-black");
				$(".Hoveranimatewrd").removeClass("fa-plus").addClass("fa-edit");
			}
									
			)
		})
	</script>
	
	<script>
		function openlink(url){
			
			var win=window.open(url, '_blank');
			win.focus();
			
		}
	</script>
   <script>
		$(window).load(function() {

			var viewportWidth = $(window).width();
			if (viewportWidth < 750) {
					var theImg = document.getElementById('theImgId');
		theImg.height = 180;
			}

			$(window).resize(function () {

				if (viewportWidth < 750) {
					var theImg = document.getElementById('theImgId');
		theImg.height = 180;
				}
			});
		});
	</script>
</body>

</html>
