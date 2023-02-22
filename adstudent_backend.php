<?php
    $name = $_POST['name'];
	$registernumber=$_POST['registernumber'];
    $department = $_POST['department'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phonenumber'];
    $year = $_POST['year'];

    $conn = new mysqli('localhost','root','','creslms');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into student(name,registernumber,department,email,phonenumber,year) values(?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sissis", $name,$registernumber, $department, $email, $phonenumber,$year);
		$execval = $stmt->execute();
		
		echo "Added successfully...";
		$stmt->close();
		$conn->close();
	}
?>