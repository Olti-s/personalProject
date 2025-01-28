<?php

	include_once('conn.php');

	if(isset($_POST['submit']))
	{

        $username = $_POST['username'];
	    $name = $_POST['first_name'];
		$surname = $_POST['last_name'];
		
		$email = $_POST['email'];
		


			$sql = "INSERT INTO users(username,first_name,last_name,email) VALUES (:username, :first_name, :last_name, :email)";

			$insertSql = $conn->prepare($sql);

			$insertSql->bindParam(':username', $username);
			$insertSql->bindParam(':first_name', $name);
			$insertSql->bindParam(':last_name', $surname);
			$insertSql->bindParam(':email', $email);

			$insertSql->execute();

			echo "The user has been added successfully";

			echo "<br>";

			echo "<a href='dashboard.php'>Dashboard</a>";

	}


?>