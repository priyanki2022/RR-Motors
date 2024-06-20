<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "rr_motors");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. ". mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$email = $_REQUEST['email'];
		$password = $_REQUEST['password'];
		$repeat_password = $_REQUEST['repeat_password'];
		// $address = $_REQUEST['address'];
		// $email = $_REQUEST['email'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO signup(email,password,repeatpassword) VALUES('$email', 
			'$password','$repeat_password')";
		
		if(mysqli_query($conn, $sql))
		{
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>"; 

			echo 
			"<table border=1px>
			<tr>
			<th>Email</th>
			<th>Password</th>
			<th>Repeat_password</th>
			</tr>
			<tr>
			<td>$email</td>
			<td>$password</td>
			<td>$repeat_password</td>
			</tr>
			</table>";
			
			// ("\n$email\n $password\n "
			// 	. "$repeat_password");
		} else
		{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
