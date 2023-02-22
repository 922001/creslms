<?php
    $name = $_POST['name'];
    $registernumber = $_POST['registernumber'];
    $department = $_POST['department'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $conn = new mysqli('localhost','root','','creslms');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into faculty(name,registernumber,department,email, password) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("sisss", $name, $registernumber, $department, $email, $password);
		
		$execval = $stmt->execute();
		
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>