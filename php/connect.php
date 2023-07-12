<?php
	$Email = $_POST['Email'];
	$Password = $_POST['Password'];

	// Database connection
	$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(Email, Password) values(?, ?)");
		$stmt->bind_param("sssssi", $Email, $Password);
		$execval = $stmt->execute();
		echo $execval;
		echo "Login successfully...";
		$stmt->close();
		$conn->close();
	}
?>