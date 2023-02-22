<?php
    $department = $_POST['department'];
    $subjectname = $_POST['subjectname'];
    $semester = $_POST['semester'];
	$modules = $_POST['modules'];
    $session = $_POST['session'];
    $video = $_POST['video'];
    $flipbook = $_POST['flipbook'];
    $assessment = $_POST['assessment'];

    $conn = new mysqli('localhost','root','','creslms');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into addcontent(department,subjectname,semester,modules,session,video,flipbook,assessment) values(?, ?, ?, ?, ?, ?,?,?)");
		$stmt->bind_param("ssssssss", $department, $subjectname, $semester,$modules, $session,$video,$flipbook,$assessment);
		
		$execval = $stmt->execute();
		
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>



    