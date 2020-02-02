<html>
<head>
	<title>Add Users</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<a href="index.php">Go to Home</a>
	<br/><br/>

	<form action="am_1101942_form.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>Name :</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr> 
				<td>Staff No. :</td>
				<td><input type="text" name="staffNo"></td>
			</tr>
			<tr> 
				<td>Email :</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr> 
				<td>Phone :</td>
				<td><input type="text" name="phone"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
	
	<?php

	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$name = $_POST['name'];
		$staffNo = $_POST['staffNo'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		
		// include database connection file
		include_once("config.php");
				
		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO staff(name,staffNo,email,phone) VALUES('$name','$staffNo','$email','$phone')");
		
		// Show message when user added
		echo "User added successfully. <a href='index.php'>View Users</a>";
	}
	?>
</body>
</html>
