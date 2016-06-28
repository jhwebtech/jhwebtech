<?php
	include 'db_info.php';
	
	// Create connection
	$conn = mysqli_connect($servername, $user, $pass, $dbname);
	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	$sql = "SELECT user_id, username, password FROM jh_users WHERE username='Julie' AND password=SHA1('pass');";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
		// output data of each row
		while($row = mysqli_fetch_assoc($result)) {
			echo "Id: " . $row["user_id"]. " Username: " . $row["username"]. " " . $row["password"]. "<br>";
		}
	} else {
		echo "0 results";
	}

	mysqli_close($conn);
?>