<?php
	$sname = $_POST['sname'];
	$password = $_POST['password'];
	$cpassword = $_POST['cpassword'];
	$phone = $_POST['phone'];
	$gender = $_POST['gender'];
	$wayuser= $_POST['wayuser'];

// Database connection
	$conn = new mysqli('localhost','root','','harmony_music_school');

	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(name, password,cpassword, phone,gender,user) values(?, ?, ?, ?, ?,?)");
		$stmt->bind_param("sssiss", $sname, $password, $cpassword, $phone, $gender,$wayuser);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfull...";
		$stmt->close();
		$conn->close();
	}
?>
