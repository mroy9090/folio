<?php
    session_start();
    $education_name=$_POST['education_name'];
    $education_year=$_POST['education_year'];
    $education_percentage=$_POST['education_percentage'];
    
   
    $db_insert = "INSERT INTO educations(area_name, area_year, area_percentage) VALUES ('$education_name','$education_year','$education_percentage')";
    $db_connect = mysqli_connect("localhost", "root", "", "student");
    mysqli_query($db_connect,$db_insert);
    $_SESSION['education']="added successfully";
    header('location:education.php');
    ?>
