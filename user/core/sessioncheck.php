<?php
ob_start();
session_start();

?>
<?php
if(!isset($_SESSION["qlid"]))
{
	header("location:../index.php");
}

?>
