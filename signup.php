<?php
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$db = "user";
	
    $conn = new mysqli($dbhost, $dbuser, $dbpass, $db);
	//if($conn->connect_error){ 
	//	echo "ERROR — 404";
	//}else{
	//	echo "Connected with database\n";
	//}
	
	$usermail = $_POST['usermail'];
	$password = $_POST['password'];
	
	$sql = "INSERT into data (usermail, password) VALUES ('$usermail', '$password')";
	
	if(mysqli_query($conn,$sql)){
		echo "You are one of US now!";
	}else{
		echo "Something went wrong!";
	}
	
?>