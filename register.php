<?php
include_once('conn.php');
if(isset($_POST['submit'])){
<<<<<<< HEAD
    $name= $_POST['name'];
    $username=$_POST['username'];
    $surname=$_POST['surname'];
=======
    $name= $_POST['first_name'];
    $username=$_POST['username'];
    $surname=$_POST['last_name'];
>>>>>>> 5e5fbb6ef33d071b722c922df817c3d09c44a296
    $email=$_POST['email'];

    if(empty($name)|| empty($username)||empty($surname)|| empty($email)){
        echo "You need to fill all the fields";
    }
    else{
        $sql = "SELECT username FROM users WHERE username=:username";

        $tempSQL= $conn ->prepare($sql);
        $tempSQL->bindParam(":username, $username");
        $tempSQL-> execute();

        if($tempSQL ->rowCount()>0 ){
            echo"Username exists";
<<<<<<< HEAD
            header("refresh:3; url=signu.php");
        }
        else{
            $sql ='INSERT INTO users (name, surname ,username, email) VALUES (:name,:surname,:username,:email)';
=======
            header("refresh:3; url=login.php.php");
        }
        else{
            $sql ='INSERT INTO users (first_name, last_name ,username, email) VALUES (:first_name,:last_name,:username,:email)';
>>>>>>> 5e5fbb6ef33d071b722c922df817c3d09c44a296
            $insertSql = $conn->prepare($sql);

            $insertSql->bindParam(':name' ,$name);
            $insertSql->bindParam(":surname" ,$surname);
            $insertSql->bindParam(':username' ,$username);
            $insertSql->bindParam(":email" , $email);

            $insertSql->execute();

            echo"Data is saved";
            
        }
    }
}





?>