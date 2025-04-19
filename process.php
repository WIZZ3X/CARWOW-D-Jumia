<?php
include_once 'avito_db.php';
if (isset($_post['save']))
{
	$first_name = $_post['first_name'];
	$last_name = $_post ['last_name'];
	$phone = $_post ['phone'];
	$email = $_post ['email'];
	$sql = "INSERT INTO employee (first_name,last_name,phone,email)
	VALUES ('$first_name','$last_name','$phone','$email')";
	if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	} else {
		echo "error: " .$sql ."
" .	mysqli_error($conn);
	}
	mysqli_close($conn);
}
?>