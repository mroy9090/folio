<?php
    session_start();
    $oldpassword = $_POST['old_password'];
    $after_encrypt_oldpassword = md5($oldpassword);
    $newpassword = $_POST['new_password'];
    $confirmpassword = $_POST['confirm_new_password'];
    $after_encrypt_confirmpassword = md5($confirmpassword);
    $db_select = "SELECT  email,password FROM users WHERE password='$after_encrypt_oldpassword' ";
    $db_connect = mysqli_connect("localhost", "root", "", "student");
    $db_data = mysqli_fetch_assoc(mysqli_query($db_connect, $db_select));
    $email_address = $db_data['email'];
    
    if($newpassword == $confirmpassword && $after_encrypt_oldpassword == $db_data['password']){
    $db_update="UPDATE users SET password='$after_encrypt_confirmpassword' WHERE email='$email_address' ";
    mysqli_query($db_connect,$db_update);
    header('location:dashboard.php');

    }
    else{
        $_SESSION['wrong_password'] = "enter a valid password";
        header('location:password.php');
    }




?>