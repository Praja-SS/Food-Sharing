<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

if(!empty($name)||!empty($email)||!empty($message))
{
	$host="localhost";
	$dbUsername="root";
	$dbPassword="";
	$dbname = "foodshare";
	
	$conn = new mysqli($host,$dbUsername,$dbPassword,$dbname);
	
	if(mysqli_connect_error())
	{
		die('connect error('. mysqli_connect_errno().')'.mysqli_connect_error());
	}
	else{
		
		$INSERT = "INSERT into contact_us (name,email,message) values(?,?,?)";
		
		$stmt = $conn->prepare($INSERT);
		$stmt->execute();
		$rnum= $stmt->num_rows;
		
		if($rnum==0)
		{
		$stmt =$conn->prepare($INSERT);
		$stmt->bind_param("sss",$name,$email,$message);	
		$stmt->execute();
		echo '<script>window.alert("Feedback recorded!");</script>';
		echo '<script>location.href="home.php"</script>';
		}
		
		$stmt->close();
		$conn->close();
	}
}	
else
{
	echo "all fields are required";
	die();
}

?>
