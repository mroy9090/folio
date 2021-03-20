<?php
session_start();
$id = $_GET['id'];
$del_db = "DELETE FROM users WHERE id=$id";
$db_connect = mysqli_connect("localhost", "root", "", "student");
$db_query = mysqli_query($db_connect, $del_db);
if ($db_query) {
    $_SESSION['alert_message'] = "Dleted users successfully";
    header('location:userlist.php');
}
?>
