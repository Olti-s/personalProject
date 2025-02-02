<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

	<style>
		
		table
		{
			border: 1px solid black;
		}

		tr,td,th
		{
			border: 1px solid black;
			
		}
		table,tr,td
		{
			border-collapse: collapse;
		}
		td
		{
			padding: 10px;
		}

	</style>
</head>
<body>


	<?php 

		include_once('conn.php');

		$getUsers = $conn->prepare("SELECT * FROM users");

		$getUsers->execute();

		$users = $getUsers->fetchAll();

	 ?>


	 <table>
		<thead>
			
			<tr>
				<th>ID</th>
				<th>Username</th>
				<th>Name</th>
				<th>Surname</th>
				<th>Email</th>
				<th>Update</th>
			</tr>
	</thead>


	 	<?php 

	 		foreach ($users as $user ) {
			
		?>
			<tr> 
				<td> <?= $user['id'] ?> </td>
<<<<<<< HEAD
<<<<<<< HEAD
				<td> <?= $user['username'] ?> </td>
				<td> <?= $user['name']  ?> </td> 
				<td> <?= $user['surname']  ?> </td> 
=======
				<td> <?= $user['first_name'] ?> </td>
				<td> <?= $user['name']  ?> </td> 
				<td> <?= $user['last_name']  ?> </td> 
>>>>>>> 5e5fbb6ef33d071b722c922df817c3d09c44a296
=======
				<td> <?= $user['name'] ?> </td>
				<td> <?= $user['username']  ?> </td> 
				<td> <?= $user['surname']  ?> </td> 
>>>>>>> c5477f45b378c0c4732d99cbe98f14ba3a909506
				<td> <?= $user['email']  ?> </td>
				<td> <?= "<a href='delete.php?id=$user[id]'> Delete</a>| <a href='edit.php?id=$user[id]'> Update </a>"?></td>

			</tr>
		
		<?php 

			}

	 	 ?>


	 </table>

<<<<<<< HEAD
	 <a href="index.php">Add User</a>
=======
	 <a href="login.php">Add User</a>
>>>>>>> 5e5fbb6ef33d071b722c922df817c3d09c44a296
	
</body>
</html>