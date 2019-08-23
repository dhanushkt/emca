<?php
//creating a connection with the database
$connection=mysqli_connect("localhost","root","");
if(!$connection)
 {
	echo"failed to connect to the database".mysqli_error($connection);
 }
$dbselect=mysqli_select_db($connection,'emca');
if(!$dbselect)
{
	echo"cannot connect to the database";
}
?>