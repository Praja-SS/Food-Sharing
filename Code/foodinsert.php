<?php 
include("fa1.php");
if(!isset($_SESSION)) { session_start(); }


include("dbconnection.php");
if($_SESSION[randnumber]  == $_POST[randnumber])
{
if(isset($_POST[submit]))
{
	$food=$_POST['food'];
	$qty=$_POST['qty'];
	$name=$rsedit[name];
		$sql ="insert into food (foodname,qty,restaurant) values ('$food','$qty','$name');";
		if(!mysqli_query($con,$sql))
		{
			echo "Error in mysqli query";
		}
		else
		{
			echo '<script>window.alert("Food Added successfully !");</script>';
			echo '<script>location.href="additem.php"</script>';
		}
}
}
$randnumber = rand();
$_SESSION[randnumber] = $randnumber;
if(isset($_SESSION[id]))
{
	$sql = "SELECT * FROM register WHERE id='$_SESSION[id]'";
	$qsql = mysqli_query($con,$sql);
	$rsedit = mysqli_fetch_array($qsql);
}
?>