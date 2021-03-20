<?php
   session_start();

    if(isset($_POST['name'])){
        if(isset($_POST['email'])){
            if(isset($_POST['paassword'])){
                if(isset($_POST['address'])){
                    if($_POST['paassword'] == $_POST['confirm_paassword']){
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $password = $_POST['paassword'];
                    $address = $_POST['address'];
                    $gender = $_POST['gender'];
                    $after_encrypt = md5($password);
                    $_SESSION['log_name'] = $name;

                    $db_select= "SELECT COUNT(*)as number FROM `users` WHERE email='$email'";
                    $db_connect = $db_connect = mysqli_connect("localhost", "root", "", "student");
                    $email_count= mysqli_fetch_assoc(mysqli_query($db_connect, $db_select));
                    

                    if ($email_count['number'] == 0) {


                        if (!$_POST['name']) {
                            $_SESSION['check_name'] = "enter your name";
                            header('location:registration.php');
                        }
                        if (!$_POST['email']) {
                            $_SESSION['check_email'] = "enter your email";
                            header('location:registration.php');
                        }
                        if (!$_POST['paassword']) {
                            $_SESSION['check_pass'] = "enter your password";
                            header('location:registration.php');
                        }
                        if (!$_POST['address']) {
                            $_SESSION['check_address'] = "enter your address";
                            header('location:registration.php');
                        }

                        if($_POST['name']){
                            if($_POST['email']){
                                if($_POST['paassword']){
                                    if($_POST['address']){
                                        //database creation
                                        $db_insert = "INSERT INTO users(`name`, `email`, `password`, `address`, `gender`) VALUES ('$name','$email','$after_encrypt','$address','$gender')";
                                        $db_connect = mysqli_connect("localhost", "root", "", "student");
                                        mysqli_query($db_connect,$db_insert);
                                        header('location:login.php');
                                    }
                                }
                            }
                        }
                    } else {
                        $_SESSION['email_error'] = "please enter a valid email";
                        header('location:registration.php');
                    }
                    
                }
            }
        }
    }
}

?>