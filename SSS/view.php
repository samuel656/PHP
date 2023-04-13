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
$sql = "SELECT * FROM student_info WHERE REGNO='$rno'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0)
 {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) 
{ ?>
<table align="center" border="5">
<tr>
<th>Reg.No</th>
<td><?php echo $row["REGNO"]?> </td>
</tr>

<tr>
<th>Student Name</th>
<td><?php echo $row["SNAME"]?> </td>
</tr>

<tr>
<th>Gender</th>
<td><?php echo $row["GENDER"]?> </td>
</tr>

<tr>
<th>DOB</th>
<td><?php echo $row["DOB"]?> </td>
</tr>

<tr>
<th>Email</th>
<td><?php echo $row["EMAIL"]?> </td>
</tr>

<tr>
<th>course</th>
<td><?php echo $row["COURSE"]?> </td>
</tr>

<tr>
<th>mobile</th>
<td><?php echo $row["MOBILE"]?> </td>
</tr>

<tr>
<th>Address</th>
<td><?php echo $row["ADRESS"]?> </td>
</tr>

 </table>

<?php  
  }
} 
else
 { ?>
<script>
alert("Invalid Register Number");
</script>
<?php
include("view.html");
}
mysqli_close($conn);
?>