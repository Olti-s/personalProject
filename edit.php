<?php 

include_once("conn.php");

<<<<<<< HEAD
<<<<<<< HEAD
$id = $_GET['id'];
=======
$id = $_POST['id'];
>>>>>>> 5e5fbb6ef33d071b722c922df817c3d09c44a296
=======
// $id = $_POST['id'];
>>>>>>> c5477f45b378c0c4732d99cbe98f14ba3a909506

$sql = "SELECT * FROM users WHERE id=:id";

$prep = $conn->prepare($sql);

$prep->bindParam(':id', $id);

$prep->execute();

$data = $prep->fetch();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Edit</title>

	<style>

		form>input {
		    margin-bottom: 10px;
		    font-size: 20px;
		    padding: 5px;
		}

		button {
		    background: none;
		    border: none;
		    border: 1px solid black;
		    padding: 10px 40px;
		    font-size: 20px;
		    cursor: pointer;
		}
	</style>
</head>
<body>
	
	<form action="update.php" method="POST">
	<input type="number" name="id"  value="<?php echo $data['id']?>" readonly><br>
    <input type="text" name="username" value="<?php echo $data['username']?>"><br>
<<<<<<< HEAD
<<<<<<< HEAD
    <input type="text" name="name" value="<?php echo $data['name']?>"><br>
    <input type="text" name="surname" value="<?php echo $data['surname']?>"><br>
=======
    <input type="text" name="first_name" value="<?php echo $data['first_name']?>"><br>
    <input type="text" name="last_name" value="<?php echo $data['last_name']?>"><br>
>>>>>>> 5e5fbb6ef33d071b722c922df817c3d09c44a296
=======
    <input type="text" name="name" value="<?php echo $data['name']?>"><br>
    <input type="text" name="surname" value="<?php echo $data['surname']?>"><br>
>>>>>>> c5477f45b378c0c4732d99cbe98f14ba3a909506
    <input type="email" name="email" value="<?php echo $data['email']?>"><br>

		<br><br>
		<button type="submit" name="update">UPDATE</button>
       
	</form>
    <a href="dashboard.php">Dashboard</a>
	</body>
</html>
<<<<<<< HEAD
=======

>>>>>>> 5e5fbb6ef33d071b722c922df817c3d09c44a296
