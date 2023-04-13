<?php
$servername="localhost"; //local server name default localhost
$username="root";//mysql username default is root.
$password="";//blank if no password is set for mysql
// Create connection
$conn = mysqli_connect($servername,$username,$password);
// Check connection
if(!$conn)
{
die("Connection failed:" .mysqli_connect_error());
}
echo "<h1>Connected successfully</h1>";
?>