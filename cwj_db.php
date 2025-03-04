<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "avito_db";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn)
{
	die('The data base of Avito DJomia is not connected :'.mysql_error());
}
?>