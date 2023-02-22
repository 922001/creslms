<?php
    $name = $_POST['name'];
    $registernumber=$_POST['registernumber'];
    $email = $_POST['email'];
   

    $conn = new mysqli('localhost','root','','creslms');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into admin(name,registernumber,email) values(?, ?, ?)");
		$stmt->bind_param("sis", $name,$registernumber,$email);
		$execval = $stmt->execute();
		
		echo "Added successfully...";
		$stmt->close();
		$conn->close();
	}
?>