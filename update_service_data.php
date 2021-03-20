<?php
    session_start();
    $id=$_SESSION['service_edit_id'];
    $icon=$_POST['update_icon_name'];
    $title=$_POST['update_iocn_title'];
    $description=$_POST['service_description'];
    $db_connect = mysqli_connect("localhost", "root", "", "student");
    $db_update="UPDATE services SET service_icon='$icon',service_title='$title',service_description='$description' WHERE id='$id'";
    mysqli_query($db_connect,$db_update);
    header('location:services.php');


?>