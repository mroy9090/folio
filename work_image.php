<?php
    session_start();
    $work_title=$_POST['work_title'];
    $work_details=$_POST['work_details'];
    $work_thumbnail_photo=$_FILES['work_image']['name'];
    $work_feature_photo=$_FILES['work_feature_photo']['name'];

    //update thumbnail_photo

     $updated_name=time()."-".rand(10,50);
     $image_extension= explode(".", $work_thumbnail_photo);
     $extension=end($image_extension);
     $updated_thumbnail_photo_name=$updated_name.".".$extension;

     //updated feature photo

     $updated_feature_name=time()."-".rand(60,100);
     $feature_image_extension= explode(".", $work_feature_photo);
     $extension=end($feature_image_extension);
     $updated_feature_photo_name=$updated_feature_name.".".$extension;

     //thumbnail photo upload
     $thumbnail_temporary_location=$_FILES['work_image']['tmp_name']; 
     $thumbnail_new_location= "work_image/thumbnail/". $updated_thumbnail_photo_name;
     move_uploaded_file($thumbnail_temporary_location,$thumbnail_new_location);

     //thumbnail photo upload end


     //feature photo upload
     $feature_temporary_location=$_FILES['work_feature_photo']['tmp_name']; 
     $feature_new_location= "work_image/feature/". $updated_feature_photo_name;
     move_uploaded_file($feature_temporary_location,$feature_new_location);
     
     //db insert
     $db_insert= "INSERT INTO `works`(`work_title`, `work_icon`, `work_feature_photo` , `work_details`) VALUES ('$work_title', '$updated_thumbnail_photo_name','$updated_feature_photo_name' ,'$work_details')";
    $db_connect = mysqli_connect("localhost", "root", "", "student");
    mysqli_query($db_connect,$db_insert);
    $_SESSION['workinfo']="inserted successfully";
    header('location:work.php');
     print_r($_FILES);

?>
