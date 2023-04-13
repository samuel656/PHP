<?php
include("links.html");

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
$sql = "SELECT * FROM student_info";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0)
 {
  // output data of each row
  ?>
  <table align="center" border="5">
  <tr>
	<th>Reg.No</th>
	<th>Student Name</th>
	<th>Gender</th>
	<th>DOB</th>
	<th>Email</th>
	<th>course</th>
	<th>mobile</th>
	<th>Address</th>
	</tr>
  <?php
  while($row = mysqli_fetch_assoc($result)) 
{ ?>
<tr>
<td><?php echo $row["REGNO"]?> </td>
<td><?php echo $row["SNAME"]?> </td>
<td><?php echo $row["GENDER"]?> </td>
<td><?php echo $row["DOB"]?> 	</td>
<td><?php echo $row["EMAIL"]?> </td>
<td><?php echo $row["COURSE"]?> </td>
<td><?php echo $row["MOBILE"]?> </td>
<td><?php echo $row["ADRESS"]?> </td>
</tr>
<?php  
  }
  ?> 
  </table>
  <?php
} 
mysqli_close($conn);
?>