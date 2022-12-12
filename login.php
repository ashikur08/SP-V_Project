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
	//echo $usermail;
	//echo $password;
	$sql = "SELECT* FROM data WHERE usermail = '$usermail' AND password = '$password'";
	$result = mysqli_query($conn,$sql);
	$row = mysqli_fetch_array($result);
	if($usermail == "" && $password == ""){
		header('location:login1.html');
	}
	if($row['usermail'] == $usermail && $row['password'] == $password){
		echo "Welcome ".$usermail." you are successfully Logged In!!";
	}else{
		echo "<script>alert('Check your Credentials')</script>";
		echo "<script>location.replace('login1.html')</script>";
	}
	
?>