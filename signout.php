<?php
    session_start();
    unset($_SESSION['nav_message']);
    header('location:login.php');



?>