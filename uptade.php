<?php

include_once('conn.php');

if(isset($_POST['update']))
{
	$id = $_POST['id'];
	$username = $_POST['username'];
<<<<<<< HEAD
	$name = $_POST['name'];
	$surname = $_POST['surname'];
	$email = $_POST['email'];
	

	$sql = "UPDATE users SET username=:username, name=:name, surname=:surname, email=:email  WHERE id=:id";
	$prep = $conn->prepare($sql);
	$prep->bindParam(':id', $id);
	$prep->bindParam(':username', $username);
	$prep->bindParam(':name', $name);
	$prep->bindParam(':surname', $surname);
=======
	$name = $_POST['first_name'];
	$surname = $_POST['last_name'];
	$email = $_POST['email'];
	

	$sql = "UPDATE users SET username=:username, name=:first_name, surname=:last_name, email=:email  WHERE id=:id";
	$prep = $conn->prepare($sql);
	$prep->bindParam(':id', $id);
	$prep->bindParam(':username', $username);
	$prep->bindParam(':first_name', $name);
	$prep->bindParam(':last_name', $surname);
>>>>>>> 5e5fbb6ef33d071b722c922df817c3d09c44a296
	$prep->bindParam(':email', $email);
	

	$prep->execute();

	header("Location:dashboard.php");
}


?>