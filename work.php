<?php
require_once "includes/header.php";
$db_select = "SELECT * FROM works";
$db_connect = mysqli_connect("localhost", "root", "", "student");
$db_query = mysqli_query($db_connect, $db_select);

?>
<link rel="stylesheet" href="brand_image/image">
<div class="row">
    <div class="col-8">
        <div>
            <div class="card text-white">
                <div class="card-header bg-secondary text-center">Works Information</div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">work title</th>
                                <th scope="col">work thumbnail</th>
                                <th scope="col">work feature photo</th>
                                <th scope="col">work details</th>
                                <th scope="col">action</th>
                                <th scope="col">status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($db_query as $service_info) : ?>
                                <tr>
                                    <td><?= $service_info['work_title'] ?></td>
                                    <td><img src="work_image/thumbnail/<?= $service_info['work_icon'] ?>" alt="not found" width="100"></td>
                                    <td><img src="work_image/feature/<?= $service_info['work_feature_photo'] ?>" alt="not found" width="100"></td>
                                    <td><?= $service_info['work_details'] ?></td>
                                    <td>
                                        <a href="update_work.php?id=<?= $service_info['id'] ?>" class="btn btn-outline-warning" name="update_service">Edit</a>
                                        <a href="delete__work.php?id=<?= $service_info['id'] ?>" name="delete_service" class="btn btn-outline-danger">Delete</a>
                                    </td>
                                    <td>
                                        <?php if ($service_info['status'] == "active") { ?>
                                            <span class="badge bg-success"><?= $service_info['status'] ?></span>
                                            <a href="work_service.php?id=<?= $service_info['id'] ?>&action=inactive"><span class="btn btn-warning">Mark as inactive</span></a>
                                        <?php } else { ?>
                                            <span class="badge bg-danger"><?= $service_info['status'] ?></span>
                                            <a href="work_service.php?id=<?= $service_info['id'] ?>&action=active"><span class="btn btn-info">Mark as active</span></a>

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

    <div class="col-4">
        <div class="card text-black  mb-3" style="max-width: 40rem;">
            <div class="card-header bg-secondary">WORK INFORMATION</div>
            <div class="card-body">
                <form action="work_image.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label class="form-label">work title</label>
                        <input type="text" class="form-control" name="work_title">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">work thumbnail</label>
                        <input type="file" class="form-control" name="work_image">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">work details</label>
                        <br>
                        <textarea name="work_details" rows="10" col="40" class="form-control"></textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">work feature photo</label>
                        <input type="file" class="form-control" name="work_feature_photo">
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