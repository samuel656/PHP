<?php
include("links.html");
$email=$_POST['email'];
$pwd=$_POST['pwd'];

$server="localhost";
$username="root";
$password="";
$dbname="lbrce";

$con=mysqli_connect($server,$username,$password,$dbname);

if(!$con)
{
	die("connection failed :".mysqli_connect_error());
}

$sel="select SNAME from student_info where EMAIL='$email' AND PASSWORD='$pwd'";
$result=mysqli_query($con,$sel);	
if(mysqli_num_rows($result)>0)
{
	?>
	<script>
	alert("Thank You for Login");
	</script>
	<?php 
	} 
	else
	{  
		echo "0 results";
	}
	
mysqli_close($con);
?>	
		
