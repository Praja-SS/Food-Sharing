<?php 
include("fa1.php");
if(!isset($_SESSION)) { session_start(); }


include("dbconnection.php");
if($_SESSION[randnumber]  == $_POST[randnumber])
{
if(isset($_POST[submit]))
{
	$restaurant=$_POST['restaurant'];
	$food=$_POST['food'];
	$qty=$_POST['qty'];
	$ngo=$rsedit[name];
	$logi=$_POST['logi'];
		$sql ="insert into ngo_log (foodname,qty,restaurant,ngo,logistics) values ('$food','$qty','$restaurant','$ngo','$logi');";
		if(!mysqli_query($con,$sql))
		{
			echo "Error in mysqli query";
		}
		else
		{
			echo '<script>window.alert("Logistics Assigned successfully!");</script>';
			echo '<script>location.href="assignlog.php"</script>';
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