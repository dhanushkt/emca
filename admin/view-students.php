<?php
include '../login/accesscontroladmin.php';
require('../access/connect.php');
$ausername=$_SESSION['ausername'];

if(isset($_POST['filter']))
{
	$fbatch=$_POST['fbatch'];
	$ftype=$_POST['ftype'];
	echo "<script>window.location.href='view-students.php?fbatch=$fbatch&ftype=$ftype'</script>";
}

$gfbatch='all';
$gftype='all';

if(isset($_GET['fbatch']))
	$gfbatch=$_GET['fbatch'];

if(isset($_GET['ftype']))
	$gftype=$_GET['ftype'];

if($gfbatch=='all' && $gftype=='all')
{
	$getstud=mysqli_query($connection, "SELECT * FROM student");
	$getstud2=mysqli_query($connection, "SELECT * FROM student JOIN skills ON student.studid=skills.studid");
	$txt="ALL";
}
if($gfbatch!='all' && $gftype!='all')
{
	$getstud=mysqli_query($connection, "SELECT * FROM student WHERE batch='$gfbatch' AND type='$gftype'");
	$getstud2=mysqli_query($connection, "SELECT * FROM student JOIN skills ON student.studid=skills.studid WHERE batch='$gfbatch' AND type='$gftype'");
	$txt="$gfbatch , $gftype";
}
if($gfbatch=='all' && $gftype!='all')
{
	$getstud=mysqli_query($connection, "SELECT * FROM student WHERE type='$gftype'");
	$getstud2=mysqli_query($connection, "SELECT * FROM student JOIN skills ON student.studid=skills.studid WHERE type='$gftype'");
	$txt="ALL , $gftype";
}
if($gfbatch!='all' && $gftype=='all')
{
	$getstud=mysqli_query($connection, "SELECT * FROM student WHERE batch='$gfbatch'");
	$getstud2=mysqli_query($connection, "SELECT * FROM student JOIN skills ON student.studid=skills.studid WHERE batch='$gfbatch'");
	$txt="$gfbatch , ALL";
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
	<link href="../plugins/bower_components/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />
	
	<link href="../plugins/bower_components/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" />
</head>

<body class="fix-sidebar">
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
                    <!-- .page title -->
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Students</h4>
                    </div>
                    <!-- /.page title -->
                    <!-- .breadcrumb -->
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                       <a href="../index.php" target="_blank" class="btn btn-info pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Home</a>
                       <?php echo breadcrumbs(); ?>
                    </div>
                    <!-- /.breadcrumb -->
                </div>
				
				<div class="row">
				<div class="col-sm-12">
                        <div class="white-box" >
							<form method="post">
							<div class="row" style="padding-bottom: 30px;">
                                <div class="col-md-4">
                                    <h5 class="m-t-30 m-b-10">Select Batch</h5>
                                    <select name="fbatch" class="selectpicker" data-style="form-control">
                                        <option <?php if($gfbatch=='all') echo 'selected'; ?> value="all">All</option>
                                        <option <?php if($gfbatch=='2018') echo 'selected'; ?> value="2018">2018</option>
                                        <option <?php if($gfbatch=='2019') echo 'selected'; ?> value="2019">2019</option>
                                    </select>
                                </div>
								<div class="col-md-4">
                                    <h5 class="m-t-30 m-b-10">Select Type</h5>
                                    <select name="ftype" class="selectpicker" data-style="form-control">
                                        <option <?php if($gftype=='all') echo 'selected'; ?> value="all">All</option>
                                        <option <?php if($gftype=='regular') echo 'selected'; ?> value="regular">Regular</option>
                                        <option <?php if($gftype=='lateral') echo 'selected'; ?> value="lateral">Lateral</option>
                                    </select>
                                </div>
								<div class="col-md-4">
									<button type="submit" class="btn btn-success" style="margin-top: 50px" name="filter">Filter</button>
								</div>
							</div>
                            </form>
                        </div>
                    </div>
				</div>
		
				<div class="row">
				<div class="col-md-12">
					<div class="panel panel-info">
						<div class="panel-heading">Students Information [ <?php echo $txt; ?> ]</div>
						<div class="panel-wrapper collapse in" aria-expanded="true">
							<div class="panel-body">
								<div class="table-responsive">
                                <table id="example23" class="display nowrap " cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>USN</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Batch</th>
											<th>Type</th>
                                        </tr>
                                    </thead>
                                    <tbody>
										<?php
										
										foreach($getstud as $key=>$getstud)
										{
										?>
                                        <tr>
                                            <td><?php echo $getstud['usn']; ?></td>
                                            <td><?php echo $getstud['fname']." ".$getstud['lname']; ?></td>
                                            <td><?php  echo $getstud['email']; ?></td>
                                            <td><?php echo $getstud['phno']; ?></td>
                                            <td><?php echo $getstud['batch']; ?></td>
											<td><?php echo $getstud['type']; ?></td>
                                        </tr>
										<?php } ?>
                                    </tbody>
                                </table>
                            </div>
								
							</div>
						</div>
					</div>
				</div>
			</div>
				
				<div class="row">
				<div class="col-md-12">
					<div class="panel panel-info">
						<div class="panel-heading">Talent Information [ <?php echo $txt; ?> ]</div>
						<div class="panel-wrapper collapse in" aria-expanded="true">
							<div class="panel-body">
								<div class="table-responsive">
                                <table id="example24" class="display" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>USN</th>
                                            <th>Name</th>
                                            <th>Talents</th>
                                            <th>More Info</th>
                                            <th>Events Worked in</th>
											<th>Events Paritipated</th>
                                        </tr>
                                    </thead>
                                    <tbody>
										<?php
				
										foreach($getstud2 as $key1=>$getstud2)
										{
											if($getstud2['sexpr']!='0')
												$expr=$getstud2['sexpr'];
											else
												$expr="";
											if($getstud2['sevents']!='0')
												$events=$getstud2['sevents'];
											else
												$events="";
										?>
                                        <tr>
                                            <td><?php echo $getstud2['usn']; ?></td>
                                            <td><?php echo $getstud2['fname']." ".$getstud['lname']; ?></td>
                                            <td><?php  echo $getstud2['talents']; ?></td>
                                            <td><?php echo $getstud2['addtalents']; ?></td>
                                            <td><?php echo $expr;  ?></td>
											<td><?php echo $events; ?></td>
                                        </tr>
										<?php } ?>
                                    </tbody>
                                </table>
                            </div>
								
							</div>
						</div>
					</div>
				</div>
			</div>
               
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
    <script src="../plugins/bower_components/datatables/jquery.dataTables.min.js"></script>
    <!-- start - This is for export functionality only -->
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
	
	<script src="../plugins/bower_components/bootstrap-select/bootstrap-select.min.js" type="text/javascript"></script>
    <!-- end - This is for export functionality only -->
    <script>
    $(document).ready(function() {
        $('#myTable').DataTable();
		$('#example23').DataTable();
        $(document).ready(function() {
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function(settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;
                    api.column(2, {
                        page: 'current'
                    }).data().each(function(group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                            last = group;
                        }
                    });
                }
            });
            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function() {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });
        });
    });
    $('#example23').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
    </script>
	<script>
    $(document).ready(function() {
        $('#myTable').DataTable();
		$('#example24').DataTable();
        $(document).ready(function() {
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function(settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;
                    api.column(2, {
                        page: 'current'
                    }).data().each(function(group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                            last = group;
                        }
                    });
                }
            });
            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function() {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });
        });
    });
    $('#example24').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
    </script>
 
</body>

</html>
<script>
$(document).ready(function() {
  $('.deleteStaff').click(function(){
    id = $(this).attr('data-id');
      swal({
          title: "Are you sure?",
          text: "You will not be able to recover this data!",
          type: "warning",
          showCancelButton: true,
          confirmButtonColor: "#DD6B55",
          confirmButtonText: "Yes, delete it!",
          closeOnConfirm: false,
		  closeOnCancel: false
      },function(isConfirm)
		 {   
           if (isConfirm) {
			   $.ajax({
			  url: 'delete-ehead.php?id='+id,
			  type: 'DELETE',
			  data: {id:id},
			  success: function(){
				swal("Deleted!", "User has been deleted.", "success");
				window.location.replace("view-eventheads.php");
          }
        });   
            } else {     
                swal("Cancelled", "User data is safe :)", "error");   
            }
      });
  });

});
	
</script>
