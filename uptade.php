<?php

include_once('conn.php');

if(isset($_POST['update']))
{
	$id = $_POST['id'];
	$username = $_POST['username'];
	$name = $_POST['first_name'];
	$surname = $_POST['last_name'];
	$email = $_POST['email'];
	

	$sql = "UPDATE users SET username=:username, name=:first_name, surname=:last_name, email=:email  WHERE id=:id";
	$prep = $conn->prepare($sql);
	$prep->bindParam(':id', $id);
	$prep->bindParam(':username', $username);
	$prep->bindParam(':first_name', $name);
	$prep->bindParam(':last_name', $surname);
	$prep->bindParam(':email', $email);
	

	$prep->execute();

	header("Location:dashboard.php");
}


?>