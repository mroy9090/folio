<?php
session_start();
$logemail = $_POST['logemail'];
$logpassword = $_POST['logpass'];
$after_encrypt=md5($logpassword);
$_SESSION['log_email']= $logemail;

//datebase insert

$db_select = "SELECT  COUNT(*) as total FROM `users` WHERE  email='$logemail' and password='$after_encrypt'";
$db_connect = mysqli_connect("localhost", "root", "", "student");
$db_query= mysqli_fetch_assoc(mysqli_query($db_connect, $db_select));
if($db_query['total'] == 1){
    $_SESSION['nav_message']="you are login";
    header('location:dashboard.php');
}
else{
    $_SESSION['error']="please enter valid email or password";
    header('location:login.php');
}



?>