<?php
include_once './session.php';
include_once './database.php';

$mail = $_POST['mail'];
$pass1 = $_POST['pass1'];
$pass2 = $_POST['pass2'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];

//preverim če je uporabnik pravilno izpolnil obrazec
if (!empty($first_name) && !empty($last_name) && !empty($mail) && !empty($pass1) && ($pass1==$pass2)) {
    //vse ok

    $pass = sha1($salt.$pass1);
    
    $query = "INSERT INTO users(mail,pass,name,surname) "
    . "VALUES ('$mail','$pass','$first_name','$last_name')";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$title,$description]);
    header("Location: login.php");
    
}
else {
    //preusmeritev nazaj
    header("Location: register.php");
}
?>