<html>
<body>
<style>
body {
	background-color:#A07855;
	font-family: tahoma;
	color:white;
}
h1 {
	font-size: 50px;
	text-align: center;
	text-shadow: 3px 5px #3D2A19;
	color: #D4B996;
	padding: 1%;
}
h2 {
	border: 5px solid white;
}
form {
	font-size: 20px;
	text-align: center;
}
input {
	font-size: 16.5px;
}
</style>
<h1>Insert Your Info</h1>
<h2></h2>
<form method="post" action="process.php">
First name :
<input type="text" name="first_name">
<br>
Last name :
<input type="text" name="last_name">
<br>
Phone Number :
<input type="number" name="number">
<br>
Email :
<input type="email" name="email">
<br><br>
<input type="submit" name="save" value="submit">
</form>
</body>
</html>