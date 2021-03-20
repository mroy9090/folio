<?php
session_start();
$log_id=$_POST['id'];
$log_fullname=$_POST['fullname'];
$log_password=$_POST['password'];
$after_encrypt=md5($log_password);
$db_select= "SELECT  name,password FROM users WHERE id='$log_id' ";
$db_connect = mysqli_connect("localhost", "root", "", "student");
$check_password= mysqli_fetch_assoc(mysqli_query($db_connect, $db_select));

if($check_password['password'] == $after_encrypt){
    $db_update = "UPDATE users SET name='$log_fullname' WHERE id='$log_id' AND password='$after_encrypt' ";
    $db_connect = mysqli_connect("localhost", "root", "", "student");
    mysqli_query($db_connect, $db_update);
    $_SESSION['update']="updated successfully";
    $_SESSION['old_name']= $check_password['name'];
    header('location:userlist.php');
}
else{
    $_SESSION['error_message']="enter valid password";
    header('location:userlist.php');
}




?>