<?php 

$host = "localhost";
$pass = "";
$db = "login_db";
$user = "root";


try{
    $conn = new PDO("mysql:host=$host;dbname=$db",$user,$pass);
    
}catch (PDOException $e) {
	echo "error: " . $e->getMessage();
}




?>