<?php
require_once "includes/header.php";
?>
<?php

$email = $_SESSION['log_email'];
$db_select = "SELECT  name,profile_image FROM users WHERE email='$email'";
$db_connect = mysqli_connect("localhost", "root", "", "student");
$db_data = mysqli_fetch_assoc(mysqli_query($db_connect, $db_select));

?>
<br>
<br>
<br>
<div class="row">
    <div class="col-6">
        <h1>Student's Name: <?= $db_data['name'] ?> </h1>
        <h2>Student's Email: <?= $_SESSION['log_email'] ?> </h2>

    </div>

    <div class="col-6">
        <div class="card text-black  mb-3" style="max-width: 40rem;">
            <div class="card-header bg-secondary">Profile Image</div>
            <div class="card-body">
                <form action="profile.php" method="POST" enctype="multipart/form-data">
                    <div class="text-center">
                        <img src="image/profile_image/<?= $db_data['profile_image'] ?>" alt="not found" width="100">
                    </div>
                    <br>
                    <?php if ($db_data['profile_image'] != "default.jpg") : ?>
                        <div class="text-center">
                            <a href="delete_profile_photo.php"><button type="button" class="btn btn-warning">Delete your photo</button></a>
                        </div>
                    <?php endif; ?>
                    <div class="mb-3">
                        <label class="form-label">Upload profile picture</label>
                        <input type="file" class="form-control" name="image">
                        <?php if (isset($_SESSION['image_error'])) : ?>
                            <label class="text-danger"><?= $_SESSION['image_error'] ?></label>
                        <?php endif; ?>
                    </div>
                    <button type="submit" class="btn btn-success">upload</button>
                </form>
            </div>
        </div>

    </div>
</div>


<?php
require_once "includes/footer.php";
unset($_SESSION['image_error']);
//unset($_SESSION['delete_button']);
?>