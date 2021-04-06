<?php
include('dbconnection.php');
if($_POST)
{
	$host="localhost";
	$user="root";
	$pass="";
	$db="foodshare";
	$email=$_POST['email'];
	$type = $_POST['type'];
	$password=$_POST['password'];
	if ($email == 'admin@gmail.com' and $password== 'admin')
	{echo '<script>location.href="admin.php"</script>';}
	else
	{
	$conn=mysqli_connect($host,$user,$pass,$db);
	$query="select * from register where mail='$email' and password='$password'";
	$result=mysqli_query($conn,$query);
	if($result->num_rows == 1)
	{ 
		
		session_start();
		$_SESSION['freeshare']='true';
		$rslogin = mysqli_fetch_array($result);
		$_SESSION['id'] = $rslogin['id'];
		$_SESSION['name']= $rslogin['name'];
    
        if($type=='Restaurant')
			echo '<script>location.href="restaurant.php"</script>';
		else if($type=='NGO')
			echo '<script>location.href="ngo.php"</script>';
		else
			echo '<script>location.href="logistics.php"</script>';
			
	}
	else {
		echo '<script>window.alert("Incorrect Email or Password !");</script>';
	}
	}
}
?>