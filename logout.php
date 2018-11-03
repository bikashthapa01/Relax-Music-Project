<?php 

    session_start();
    unset($_SESSION['username']);
    session_destroy();
    echo "Successfully Logged out.";
    header('Location: index.php');

?>