<?php
require_once "includes/header.php";
$db_select = "SELECT * FROM brand";
$db_connect = mysqli_connect("localhost", "root", "", "student");
$db_query = mysqli_query($db_connect, $db_select);

?>
<link rel="stylesheet" href="brand_image/image">
<div class="row">
    <div class="col-6">
        <div>
            <div class="card text-white">
                <div class="card-header bg-secondary text-center">Services Information</div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">brand icon</th>
                                <th scope="col">action</th>
                                <th scope="col">status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($db_query as $service_info) : ?>
                                <tr>

                                    <td><img src="brand_image/image/<?= $service_info['brand_icon'] ?>" alt="not found"></td>

                                    <td>
                                        <a href="update_brand.php?id=<?= $service_info['id'] ?>" class="btn btn-outline-warning" name="update_service">Edit</a>
                                        <a href="delete__brand.php?id=<?= $service_info['id'] ?>" name="delete_service" class="btn btn-outline-danger">Delete</a>
                                    </td>
                                    <td>
                                        <?php if ($service_info['status'] == "active") { ?>
                                            <span class="badge bg-success"><?= $service_info['status'] ?></span>
                                            <a href="brand_service.php?id=<?= $service_info['id'] ?>&action=inactive"><span class="btn btn-warning">Mark as inactive</span></a>
                                        <?php } else { ?>
                                            <span class="badge bg-danger"><?= $service_info['status'] ?></span>
                                            <a href="brand_service.php?id=<?= $service_info['id'] ?>&action=active"><span class="btn btn-info">Mark as active</span></a>

                                        <?php } ?>

                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

    <div class="col-6">
        <div class="card text-black  mb-3" style="max-width: 40rem;">
            <div class="card-header bg-secondary">Profile Image</div>
            <div class="card-body">
                <form action="brand_image.php" method="POST" enctype="multipart/form-data">
                    <div class="text-center">
                        <img src="image/profile_image/<?= $db_data['profile_image'] ?>" alt="not found" width="100">
                    </div>
                    <br>

                    <div class="mb-3">
                        <label class="form-label">Upload brand picture</label>
                        <input type="file" class="form-control" name="brand_image">

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