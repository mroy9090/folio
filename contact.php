<?php
    session_start();
    $name=$_POST['contact_name'];
    $email=$_POST['contact_email'];
    $message=$_POST['message'];
    $db_insert= "INSERT INTO contacts(contact_name, contact_email, contact_message) VALUES ('$name','$email','$message')";
    $db_connect = mysqli_connect("localhost", "root", "", "student");
    $db_query=mysqli_query($db_connect,$db_insert);
    $_SESSION['contact']="your data recevied successfully";
    header('location:index.php#contact');
    print_r($_POST);

?>