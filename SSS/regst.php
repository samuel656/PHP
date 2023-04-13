<?php
include("links.html");
$regno=$_POST['regno'];
$name=$_POST['name'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];
$email=$_POST['email'];
$pwd=$_POST['pwd'];
$course=$_POST['course'];
$mobile=$_POST['mobile'];
$adress=$_POST['adress'];

$server="localhost";
$username="root";
$password="";
$dbname="lbrce";

$con=mysqli_connect($server,$username,$password,$dbname);

if(!$con)
{
	die("connection failed :".mysqli_connect_error());
}

$insert_val="INSERT INTO student_info(REGNO,SNAME,GENDER,DOB,EMAIL,PASSWORD,COURSE,MOBILE,ADRESS)
VALUES('$regno','$name','$gender','$dob','$email','$pwd','$course','$mobile','$adress')";

if(mysqli_query($con,$insert_val))
{
	echo "<center><h1>New record created Sucessfully</center></h1>";
}
else
{
	echo "Error: " . $insert_val . "<br>" . mysqli_error($con);
}

mysqli_close($con);
?>
		