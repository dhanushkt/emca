<?php
include_once '../access/connect.php';
session_start();
if(!(isset($_SESSION['sausername'])))
{
	echo'<script> window.location="403.php";</script>';
}
?>