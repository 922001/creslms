<?php
include_once("db_connect.php");
$sqlQuery = "SELECT sno, subjectname FROM addcontent";
$resultset = mysqli_query($conn, $sqlQuery) or die("database error:". mysqli_error($conn));
$addcontent = "{";
while( $records = mysqli_fetch_array($resultset) ) {
	$addcontent.='"'.$records['subjectname'].'":'.$records['sno'].',';  		
}
$addcontent=rtrim($addcontent,",");
$addcontent.="}";
$data[] = $addcontent;
echo json_encode($data);
exit;
?>