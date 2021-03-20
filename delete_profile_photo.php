<?php 
    session_start();
    $email = $_SESSION['log_email'];
    $db_update = "UPDATE users SET profile_image='default.jpg' WHERE email='$email' ";
    $db_connect = mysqli_connect("localhost", "root", "", "student");
    mysqli_query($db_connect, $db_update);
    
    header('location:dashboard.php');



?>