<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
		<?php

		
		$conn = mysqli_connect("localhost", "root", "", "foodshare");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		
		$city = $_REQUEST['city'];
		$type = $_REQUEST['type'];
		$address = $_REQUEST['address'];
		$email = $_REQUEST['email'];
		$phone=$_REQUEST['phone'];
		$pwd=$_REQUEST['password'];
		$name = $_REQUEST['name'];
		// Performing insert query execution
		// here our table name is college
		$sql = "insert into register(name, mail, password, address, city, phone, type) values('$name','$email','$pwd','$address', '$city', '$phone', '$type')";
		
		if(mysqli_query($conn, $sql)){
			echo '<script>window.alert("Farmer account created succesfully!");</script>';
			echo '<script>location.href="login.php"</script>';
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
