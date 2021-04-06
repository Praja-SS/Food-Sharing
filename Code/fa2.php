<?php 
if(!isset($_SESSION)) { session_start(); }


include("dbconnection.php");
if($_SESSION[randnumber]  == $_POST[randnumber])
{
if(isset($_POST[submit]))
{
		$sql ="UPDATE register SET address='$_POST[address]',city='$_POST[city]',phone='$_POST[phone]',area='$_POST[area]' WHERE id='$_SESSION[id]'";
		if(!mysqli_query($con,$sql))
		{
			echo "Error in mysqli query";
		}
		else
		{
			echo '<script>window.alert("Account updated successfully !");</script>';
			echo '<script>location.href="Login.php"</script>';
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