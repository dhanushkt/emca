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
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
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
        <td><?php echo $data['fname']; ?></td>
        <td>Doe</td>
        <td>john@example.com</td>
		<td style="text-align: center;" ><input name="id" type="hidden" value="<?php echo $data['studid']; ?>"> <button type="submit" name="del" class="btn btn-danger">DELETE</button></td>
      </tr>
		<?php } ?>
	</form>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
    </tbody>
  </table>
</div>

</body>
</html>
