<?php
    session_start();
    $id= $_SESSION['service_fact_edit_id'];
    $icon=$_POST['update_fact_icon_name'];
    $title=$_POST['update_fact_title'];
    $description=$_POST['update_fact_description'];
    $db_connect = mysqli_connect("localhost", "root", "", "student");
    $db_update="UPDATE facts SET fact_icon='$icon',fact_title='$title',fact_description='$description' WHERE id='$id'";
    mysqli_query($db_connect,$db_update);
    header('location:fact.php');
?>