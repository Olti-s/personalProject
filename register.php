<?php
include_once('conn.php');
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $username = $_POST['username'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password=password_hash($password, PASSWORD_DEFAULT );
    if(empty($name)|| empty($username)||empty($surname)|| empty($email) || empty($password)){
        echo "You need to fill all the fields";
    }
    else{
        $sql = "SELECT username FROM users WHERE username=:username";

        $tempSQL= $conn ->prepare($sql);
        $tempSQL->bindParam(":username", $username);
        $tempSQL-> execute();

        if($tempSQL ->rowCount()>0 ){
            echo"Username exists";
            header("refresh:3; url=login.php.php");
        }
        else{
            $sql ='INSERT INTO users (name, surname ,username, email, password) VALUES (:name,:surname,:username,:email , :password)';
            $insertSql = $conn->prepare($sql);

            $insertSql->bindParam(':name' ,$name);
            $insertSql->bindParam(":surname" ,$surname);
            $insertSql->bindParam(':username' ,$username);
            $insertSql->bindParam(":email" , $email);
            $insertSql->bindParam(":password" , $password);

            $insertSql->execute();

            echo"Data is saved";
            
        }
    }
}





?>