<?php
include("links.html");
$rno=$_POST['regno'];

$servername="localhost"; 
$username="root"; 
$password=""; 
$dbname = "lbrce"; 
// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);	
if(!$conn)
{
	die("Connection failed:".mysqli_connect_error());
}

$del = "DELETE FROM student_info WHERE REGNO='$rno'";
if(mysqli_query($conn,$del))
{
	echo "<center><h1>Student Deleted Sucessfully</center></h1>";
}
else
{
	echo "Error: " . $del . "<br>" . mysqli_error($con);
}

mysqli_close($conn);
?>