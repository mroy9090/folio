<?php
    session_start();
    $id=$_GET['id'];
    $action=$_GET['action'];
    $db_select= "UPDATE works SET status='$action' WHERE id='$id'";
    $db_connect = mysqli_connect("localhost", "root", "", "student");
    mysqli_query($db_connect,$db_select);
    $_SESSION['done']="your task is done";
    header('location:work.php');
?>