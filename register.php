<?php
include_once('conn.php');
if(isset($_POST['submit'])){
    $name= $_POST['name'];
    $username=$_POST['username'];
    $surname=$_POST['surname'];
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
            header("refresh:3; url=signu.php");
        }
        else{
            $sql ='INSERT INTO users (name, surname ,username, email) VALUES (:name,:surname,:username,:email)';
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