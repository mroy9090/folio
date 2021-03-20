<?php
session_start();
$id = $_GET['id'];
$del_db = "DELETE FROM services WHERE id=$id";
$db_connect = mysqli_connect("localhost", "root", "", "student");
$db_query = mysqli_query($db_connect, $del_db);
header('location:services.php');
?>