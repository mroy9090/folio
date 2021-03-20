<?php
    session_start();
    $updated_image_name=time()."-".rand(100, 2000);
    //print_r($_FILES);

    //image upload start
    $image_name= $_FILES['brand_image']['name'];
    $image_extensoin = explode(".", $image_name);
    $extension = end($image_extensoin);
    $image_new_name = $updated_image_name.".". $extension;
    echo $image_new_name;
    $temporary_location= $_FILES['brand_image']['tmp_name'];
    $new_location = "brand_image/image/". $image_new_name;
    move_uploaded_file($temporary_location,$new_location);
    //image_upload_end


    //database start
    $db_insert= "INSERT INTO brand(brand_icon) VALUES ('$image_new_name')";
    $db_connect = mysqli_connect("localhost", "root", "", "student");
    mysqli_query($db_connect,$db_insert);
    header('location:brand.php');

    ?>