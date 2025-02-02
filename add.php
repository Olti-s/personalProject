<?php

	include_once('conn.php');

	if(isset($_POST['submit']))
	{

        $username = $_POST['username'];
<<<<<<< HEAD
<<<<<<< HEAD
	    $name = $_POST['name'];
		$surname = $_POST['surname'];
=======
	    $name = $_POST['first_name'];
		$surname = $_POST['last_name'];
>>>>>>> 5e5fbb6ef33d071b722c922df817c3d09c44a296
		
=======
	    $name = $_POST['name'];
		$surname = $_POST['surname'];
		$password = $_POST['password'];
>>>>>>> c5477f45b378c0c4732d99cbe98f14ba3a909506
		$email = $_POST['email'];
		


<<<<<<< HEAD
<<<<<<< HEAD
			$sql = "INSERT INTO users(username,name,surname,email) VALUES (:username, :name, :surname, :email)";
=======
			$sql = "INSERT INTO users(username,first_name,last_name,email) VALUES (:username, :first_name, :last_name, :email)";
>>>>>>> 5e5fbb6ef33d071b722c922df817c3d09c44a296
=======
			$sql = "INSERT INTO users(username,name,surname,email,password) VALUES (:username, :name, :surname, :email, password)";
>>>>>>> c5477f45b378c0c4732d99cbe98f14ba3a909506

			$insertSql = $conn->prepare($sql);

			$insertSql->bindParam(':username', $username);
<<<<<<< HEAD
<<<<<<< HEAD
			$insertSql->bindParam(':name', $name);
			$insertSql->bindParam(':surname', $surname);
			
=======
			$insertSql->bindParam(':first_name', $name);
			$insertSql->bindParam(':last_name', $surname);
>>>>>>> 5e5fbb6ef33d071b722c922df817c3d09c44a296
=======
			$insertSql->bindParam(':name', $name);
			$insertSql->bindParam(':surname', $surname);
>>>>>>> c5477f45b378c0c4732d99cbe98f14ba3a909506
			$insertSql->bindParam(':email', $email);
			$insertSql->bindParam(':password', $password);

			$insertSql->execute();

			echo "The user has been added successfully";

			echo "<br>";

			echo "<a href='dashboard.php'>Dashboard</a>";

	}


?>