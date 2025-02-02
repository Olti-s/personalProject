<?php

include_once('conn.php');

 if(isset($_POST['update']))
 {
 	$id = $_POST['id'];
 	$username = $_POST['username'];

 	$name = $_POST['name'];
   $surname = $_POST['surname'];
 	$email = $_POST['email'];
	

// 	$sql = "UPDATE users SET username=:username, name=:name, surname=:surname, email=:email  WHERE id=:id";
// 	$prep = $conn->prepare($sql);
// 	$prep->bindParam(':id', $id);
// 	$prep->bindParam(':username', $username);
// 	$prep->bindParam(':name', $name);
// 	$prep->bindParam(':surname', $surname);
// =======
// 	$name = $_POST['first_name'];
// 	$surname = $_POST['last_name'];
// =======
// 	$name = $_POST['name'];
// 	$surname = $_POST['surname'];
// >>>>>>> c5477f45b378c0c4732d99cbe98f14ba3a909506
// 	$email = $_POST['email'];
	

	$sql = "UPDATE users SET username=:username, name=:name, surname=:surname, email=:email  WHERE id=:id";
	$prep = $conn->prepare($sql);
	$prep->bindParam(':id', $id);
	$prep->bindParam(':username', $username);

	// $prep->bindParam(':first_name', $name);
	// $prep->bindParam(':last_name', $surname);

	$prep->bindParam(':name', $name);
	$prep->bindParam(':surame', $surname);

	$prep->bindParam(':email', $email);
	

	$prep->execute();

	header("Location:dashboard.php");
}


?>