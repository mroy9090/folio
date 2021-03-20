<?php
    session_start();
    $icon=$_POST['service_icon'];
    $title=$_POST['service_title'];
    $description=$_POST['service_description'];
    $db_insert = "INSERT INTO services (service_icon, service_title, service_description) VALUES ('$icon','$title','$description')";
    $db_connect = mysqli_connect("localhost", "root", "", "student");
    mysqli_query($db_connect,$db_insert);
    $_SESSION['alert']="services added successfully";
    header('location:services.php');
?>