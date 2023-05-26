<?php
$host="localhost";
$username="root";
$pass="";
$dname="university";

$dbcon=mysqli_connect($host,$username,$pass,$dname);
	
if(!$dbcon)
	{
	die("error happed during connection".mysqli_connect_error()); 
	}
	
	
	
	function result()
	{
	global $dbcon;
$data = mysqli_query($dbcon, "SELECT * FROM student");

if (!$data) {
    echo "Query execution failed: " . mysqli_error($data);
    exit();
} else {
    // Process the result
    return $data;
}

	mysqli_close();
}


	
	
	

?>