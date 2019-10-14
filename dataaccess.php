<?php
include '../access/connect.php';
if(isset($_POST['del']))
{
	$id=$_POST['id'];
	$ds=mysqli_query($connection,"DELETE FROM skills WHERE studid='$id'");
	if($ds)
	{
		$smsg="Deleted From Skills ";
		$delstud=mysqli_query($connection, "DELETE FROM student WHERE studid='$id'");
		if($delstud)
		{
			$getdata=mysqli_query($connection, "SELECT * FROM student JOIN skills ON student.studid=skills.studid");
			$smsg.=" and Deleted From Student";
		}
		else{
			echo mysqli_error($connection);
		}
	}
	else
	{
		echo mysqli_error($connection);
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>SAMCA 2019</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2 class="text-center" style="padding: 30px;">SAMCA REGISTERED STUDENTS</h2> 
	<?php if(isset($smsg)) { ?>
	<div class="alert alert-success"><?php echo $smsg; ?></div>
	<?php } ?>
  <table class="table table-dark table-hover">
    <thead>
      <tr class="text-center">
        <th>USN</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Phone no</th>
        <th>batch</th>
        <th>type</th>
        <th>talents</th>
        <th>addtalents</th>
        <th>sexprience</th>
        <th>sevents</th>
		    <th>Action</th>
      </tr>
    </thead>
    <tbody>
	<form method="post">
		<?php 
		$getdata=mysqli_query($connection, "SELECT * FROM student JOIN skills ON student.studid=skills.studid");
		while($data=mysqli_fetch_assoc($getdata)) {
		?>
      <tr class="text-center"> 
        <td><?php echo $data['usn']; ?></td>
        <td><?php echo $data['fname']; ?></td>
        <td><?php echo $data['lname']; ?></td>
        <td><?php echo $data['email']; ?></td>
        <td><?php echo $data['phno']; ?></td>
        <td><?php echo $data['batch']; ?></td>
        <td><?php echo $data['type']; ?></td>
        <td><?php echo $data['talents']; ?></td>
        <td><?php echo $data['addtalents']; ?></td>
        <td><?php echo $data['sexpr']; ?></td>
        <td><?php echo $data['sevents']; ?></td>
		<td style="text-align: center;" ><input name="id" type="hidden" value="<?php echo $data['studid']; ?>"> <button type="submit" name="del" class="btn btn-danger">DELETE</button></td>
      </tr>
		<?php } ?>
	</form>
    </tbody>
  </table>
</div>

</body>
</html>
