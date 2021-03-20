<?php
    session_start();
    foreach($_POST as $owner_name => $owner_value){
        $settings_db_update="UPDATE settings SET setting_value='$owner_value' WHERE setting_name='$owner_name'";
        $db_connect=mysqli_connect("localhost", "root", "", "student");
        $db_query= mysqli_query($db_connect, $settings_db_update);
        $_SESSION['update']="updated information successfully";
        header('location:settings.php');
    }

?>