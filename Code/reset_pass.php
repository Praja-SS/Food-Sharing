<?php
if($_POST)
{
$email= $_POST['email_id'];
$new_pass = $_POST['new_pass'];
$new_pass_c = $_POST['new_pass_c'];



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "foodshare";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * from register  where mail ='$email'" ;
$result1 = $conn->query($sql);
if($result1->num_rows == 1)
{ 
		
		 if($new_pass==$new_pass_c)
		{
	
		$sql = "UPDATE ares.register set password= '$new_pass' where email ='$email'" ;
		$result = $conn->query($sql);
		if($result==1)
			{
					echo '<script>window.alert("Password changed!");</script>';
					 echo '<script>location.href="login.php"</script>';
			}
		}
		else
		{
		echo '<script>window.alert("Incorrect Password !");</script>';
			 echo '<script>location.href="forgotpass.php"</script>';
		

		}
}
else {
		echo '<script>window.alert("Incorrect Email  !");</script>';
			 echo '<script>location.href="forgotpass.php"</script>';
}

$conn->close();
}
?>