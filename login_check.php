<?php
    include_once './session.php';
    include_once './database.php';

    $mail = $_POST['mail'];
    $pass = $_POST['pass'];
    
    if (!empty($mail) && !empty($pass)) {
        //pripravimo pass
        $pass = sha1($salt.$pass);
        $query = "SELECT * FROM users WHERE mail='$mail' AND pass='$pass'";
        $result = mysqli_query($link, $query);
        if (mysqli_num_rows($result) != 1) {
            //preusmeritev na prijavo
            header("Location: login_error.php");
        }
        else {
            //vse je ok - naredi prijavo
            //rezultat select stavka - shrani v array
            $user = mysqli_fetch_array($result);
            $_SESSION['user_id'] = $user['id'];
            
            //preusmeritev na prijavo
            header("Location: index.php");
        }
    }
    else {
        //preusmeritev na prijavo
        header("Location: login_error.php");
    }
?>