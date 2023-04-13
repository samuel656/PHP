<?php
include("links.html");
$regno=$_POST['regno'];
$email=$_POST['email'];
$newEmail=$_POST['newEmail'];

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

$upd="UPDATE student_info SET EMAIL='$newEmail' where REGNO='$regno'";
if($conn->query($upd)==TRUE)
{
	echo "<center><h1>Record updateD successfully</center></h1>";
}
else
{
	echo "Error updating record: " . $conn->error;
}
mysqli_close($conn);
?>