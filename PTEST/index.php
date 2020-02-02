<?php
/**
* Simple PHP CRUD Script
**/

// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM staff ORDER BY id DESC");
?>

<html>
<head>    
    <title>Homepage</title>
	
<link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>
<a href="am_1101942_form.php">Add New User</a><br/><br/>

    <table width='80%' border=1 >

    <tr>
        <th>Name</th> <th>Staff No.</th> <th>Phone</th> <th>Email</th> <th>Update</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['name']."</td>";
		echo "<td>".$user_data['staffNo']."</td>";
        echo "<td>".$user_data['phone']."</td>";
        echo "<td>".$user_data['email']."</td>";    
        echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>
