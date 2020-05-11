<?php 
	$name = "";
	$email = "";
	$phoneNumber = "";
	
	// echo "Is it working?";
	if (isset($_POST['submit'])) {
		if (!$_POST['name'] === "" || isset($_POST['name'])) {
			$name = trim($_POST['name']);
		}
		if (!$_POST['email'] === "" || isset($_POST['email'])) {
			$email = $_POST['email'];
		}
		if (!$_POST['phoneNumber'] === "" || isset($_POST['phoneNumber'])) {
			$phoneNumber = trim($_POST['phoneNumber']);
		}
		// var_dump($_POST);

		// echo $name;
		// printf("<p>%s</p>",$name);
		// printf("<p>%s</p>",$email);
		// printf("<p>%s</p>",$phoneNumber);

		if ($name && $email && $phoneNumber) {
			// Initialize database
			$db = new mysqli("localhost", "root", "", "my_profile");
			if ($db) {
				$sql = "INSERT INTO user_details (name, email, phone) VALUES ('$name', '$email', '$phoneNumber')";
				$db->query($sql);
			}else{
				die("Failed to connect to server and database");
			}
			// echo "request successfully submitted";
			$db->close();
		}else{
			// echo "<p style='color:red'>All fields are required</p>";
		}

		$name = "";
		$email = "";
		$phoneNumber = "";
		
	}

	
 ?>