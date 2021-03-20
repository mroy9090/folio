<?php
    session_start();
    $user_email = $_SESSION['log_email'];
    $extension_list = ['jpg','JPG','png','PNG','jpeg','JPEG'];
    //image upload start
    $image_name= $_FILES['image']['name'];
    $db_select= "SELECT id,profile_image FROM users WHERE email='$user_email'";
    $db_connect = mysqli_connect("localhost", "root", "", "student");
    $id = mysqli_fetch_assoc(mysqli_query($db_connect, $db_select));
    $id_name = $id['id'];
    $image_extensoin = explode(".", $image_name);
    $extension = end($image_extensoin);
    $image_new_name = $id_name.".". $extension;
    $db_image_name = $id['profile_image'] ;
   
    if(in_array($extension,$extension_list)){
        if($db_image_name != "default.jpg"){
            unlink("image/profile_image/".$db_image_name); 
        }
        

    

    $temporary_location= $_FILES['image']['tmp_name'];
    $new_location = "image/profile_image/". $image_new_name;
    move_uploaded_file($temporary_location,$new_location);

    




    //database connect
    $db_update = "UPDATE users SET profile_image='$image_new_name' WHERE email='$user_email' ";
    $db_connect = mysqli_connect("localhost", "root", "", "student");
    mysqli_query($db_connect,$db_update);
    header('location:dashboard.php');
    }
    
    else{
        $_SESSION['image_error'] ="Insert a valid picture";
        header('location:dashboard.php');
    }
?>