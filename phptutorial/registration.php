<?php
	$name = $_POST['name'];
	$USN = $_POST['USN'];
	$branch = $_POST['branch'];
	$sem = $_POST['sem'];
	$phno = $_POST['phno'];
	
	$con = new mysqli('localhost','root','','default_student');
	if($conn->connect_error){
		
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(name, USN, branch, sem, phno) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("ssssi", $name, $USN, $branch,$sem, $phno);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>