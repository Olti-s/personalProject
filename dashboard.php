<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
     
     table{
        border:1px solid black;
        border-collapse:collapse;


     }
   tr, td ,th{
    border:1px solid black;
    padding:10px;
   }
 



     </style>
</head>
<body>
<?php 
  

  include_once("./conn/conn.php");

  $getUsers = $pdo->prepare("SELECT * FROM tbl_user");
  $getUsers->execute();
  $tbl_user = $getUsers->fetchAll();


?>
    <table>
        <thead>
            <th>Username</th>
            <th>first_name</th>
            <th>last_name</th>
            <th>password</th>
            <th>email</th>
            <th>contact_number</th>
        </thead>
    </table>
</body>
</html>