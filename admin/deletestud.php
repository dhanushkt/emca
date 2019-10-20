<?php
require( '../access/connect.php' );
if (isset($_POST) & !empty($_POST)) {
	$id = $_POST['id'];
	$sql = "DELETE FROM student WHERE studid='$id'";
	$sql2="DELETE FROM skills WHERE studid=$id";
	$result2 = mysqli_query($connection, $sql2);
	$result = mysqli_query($connection, $sql);
	if ($result) {
		echo "Deleted successfully.";
	} else {
		echo "Error!";
	}
}
?>