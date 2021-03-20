<?php
    session_start();
    $icon=$_POST['fact_icon'];
    $title=$_POST['fact_title'];
    $description=$_POST['fact_description'];
    $db_insert = "INSERT INTO facts (fact_icon, fact_title, fact_description) VALUES ('$icon','$title','$description')";
    $db_connect = mysqli_connect("localhost", "root", "", "student");
    mysqli_query($db_connect,$db_insert);
    $_SESSION['alert']="services added successfully";
    header('location:fact.php');
    ?>
