<?php
echo "Entered subject creation";
$conn = mysqli_connect("localhost","root","","creslms");
$department = $_POST['department'];
$subject_name = $_POST['subject'];
$courseCode = $_POST['courseCode'];
$semester = $_POST['semester'];
$session = $_POST['session'];
$video = $_POST['video'];
$flipbook = $_POST['flipbook'];
$assessment = $_POST['assessment'];

     $sql = "INSERT INTO subject (department,name,course_code,semester,session,video_content,flip_book,assessment)
     VALUES ('$department','$subject_name','$courseCode','$semester','$session','$video','$flipbook','$assessment')";
     
     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     $conn->close();
?>
