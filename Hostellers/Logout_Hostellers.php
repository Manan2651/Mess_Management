<?php 
    session_destroy();
    session_unset();
    header('Location: ../Home_Page.php');
    exit();
?>