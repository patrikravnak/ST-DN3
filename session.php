<?php
    session_start();
    
    $allowed = ['/project_share/login.php','/project_share/login_test.php',
                '/project_share/register.php', '/project_share/new_user.php',
                '/project_share/index.php'];
    
    
    if (!isset($_SESSION['user_id']) && 
            !in_array($_SERVER['REQUEST_URI'], $allowed)) {
        header("Location: login.php");
    }

?>  