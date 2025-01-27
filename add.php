<?php 

 include ('./conn/conn.php')

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $password = $_POST['password'];
    $email = $_POST ['email']; 
    $contact_number = $_POST['contact_number'];
}


try{


    $sql = " INSERT INTO tbl_user (username,first_name,last_name,password,email,contact_number) VALUES (:username, :first_name, :last_name, :password, :email, :contact_number)"

$insertSql = $pdo->prepare($sql);

$insertSql->bindParam(':username', $username);
$insertSql->bindParam(':first_name', $first_name);
$insertSql->bindParam(':last_name', $last_name);
$insertSql->bindParam(':password', $Password);
$insertSql->bindParam(':email', $email);
$insertSql->bindParam(':contact_number', $contact_number);




$insertSql->execute();

echo "the user has been added sucessfully <br>"
echo "<a href="dashbord.php">Dashbord</a>"

}catch(PDOExecption $e){
    echo "Error" . $e->getMessage();

}






?>