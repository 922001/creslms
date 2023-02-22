<?php
    $user = $_POST['user'];
    $department = $_POST['department'];
    $semester = $_POST['semester'];
    $subject = $_POST['subject'];
    

    $conn = new mysqli('localhost','root','','creslms');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into mca(user,department,semester,subject) values(?, ?, ?, ?)");
		$stmt->bind_param("ssss", $user,$department, $semester, $subject);
		$execval = $stmt->execute();
		
		echo "Added successfully...";
		$stmt->close();
		$conn->close();
	}
?>