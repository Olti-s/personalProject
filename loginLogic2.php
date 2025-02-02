<?php
    include_once('conn.php');

    if(isset($_POST['submit22'])){
        $username = $_POST['username2'];
        $password= $_POST["password2"];

        if(empty($username)|| empty($password)){
            echo "Fill all the fields";

        }else{
            $sql='SELECT * FROM users WHERE username = :username';
            $insertSQL =$conn->prepare($sql);
            $insertSQL ->bindParam(':username' ,$username);
            $insertSQL->execute();

            if($insertSQL-> rowCount()> 0){
                $sql=$insertSQL->fetch();
            }
        }
    }


    header('Location:index2.php');
?>