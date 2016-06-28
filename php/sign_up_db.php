<?php
	include '../header.php';
	$form_user_name = $_POST['username'];
	$form_pass = $_POST['password'];
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "jhwebtech";
	
	echo $form_user_name . " " . $form_pass;
	
	echo "<br/>";
	echo "<br/>";
	echo "<br/>";
	echo "<a href='sign_up.php'>Back to Sign Up</a>" . " | " . "<a href='sign_in.php'>Sign In</a>" . "<br/>";
	
	
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	
	if(!$conn){
		die("Could not connect to database". mysqli_connect_error());
	}	
	
	$sql = "INSERT INTO jh_users (user_id, username, password, registration_date) VALUES (null, '$form_user_name' , SHA1('$form_pass'), NOW())";
	
	$run = mysqli_query($conn, $sql);
	if ($run){
		echo "Thank you for signing up";
	} else {
		echo "Error: " . mysqli_error($conn);
	}
	/*if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	} */
	/*$sql = "SELECT * FROM jh_users";
	$result = mysqli_query($conn, $sql);
	
	
	$result = mysqli_query($conn, $sql);
		
	if (mysqli_num_rows($result) > 0){
		while($row = mysqli_fetch_assoc($result)){
		
		echo "ID: " . $row["user_id"] . " USER NAME: " . $row["username"] . "<br/>";
		}
		
	} else {
		echo "0 results.";
	} */
	
	mysqli_close($conn);
?>