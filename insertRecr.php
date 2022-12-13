

<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
		<?php

		
		$conn = mysqli_connect("localhost", "root", "", "password_db");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$id=$_GET['id'];
		$email = $_REQUEST['email'];
		$password = $_REQUEST['password'];
                
		$hashed_password = password_hash($password, PASSWORD_DEFAULT);
   		
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO password_tb VALUES ('$id',
			'$email','$hashed_password')";
		

  
   




		if(mysqli_query($conn, $sql)){
			
                        echo "Successfull";
			
		} else{
			echo "ERROR:  Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
