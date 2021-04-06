<?php 
if(!isset($_SESSION)) { session_start(); }


include("dbconnection.php");

$_SESSION[randnumber] = $randnumber;
if(isset($_SESSION[id]))
{
	$sql = "SELECT * FROM register WHERE id='$_SESSION[id]'";
	$qsql = mysqli_query($con,$sql);
	$rsedit = mysqli_fetch_array($qsql);
}
?>
