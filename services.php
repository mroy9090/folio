<?php
require_once "includes/header.php";
$db_select = "SELECT id, service_icon, service_title, service_description,status FROM services ";
$db_connect = mysqli_connect("localhost", "root", "", "student");
$db_query = mysqli_query($db_connect, $db_select);
?>
<link rel="stylesheet" href="css/fontawesome-all.min.css">
<div class="row">
    <div>
        <div class="card text-white">
            <div class="card-header bg-secondary text-center">Services Information</div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">service icon</th>
                            <th scope="col">service title</th>
                            <th scope="col">service information</th>
                            <th scope="col">action</th>
                            <th scope="col">status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($db_query as $service_info) : ?>
                            <tr>
                                <td><?= $service_info['id'] ?></td>
                                <td><i class="<?= $service_info['service_icon'] ?>"></i></td>
                                <td><?= $service_info['service_title'] ?></td>
                                <td><?= $service_info['service_description'] ?></td>
                                <td>
                                    <a href="update_service.php?id=<?= $service_info['id'] ?>" class="btn btn-outline-warning" name="update_service">Edit</a>
                                    <a href="delete__service.php?id=<?= $service_info['id'] ?>" name="delete_service" class="btn btn-outline-danger">Delete</a>
                                </td>
                                <td>
                                    <?php if ($service_info['status'] == "active") { ?>
                                        <span class="badge bg-success"><?= $service_info['status'] ?></span>
                                        <a href="service_active.php?id=<?= $service_info['id'] ?>&action=inactive"><span class="btn btn-warning">Mark as inactive</span></a>
                                    <?php } else { ?>
                                        <span class="badge bg-danger"><?= $service_info['status'] ?></span>
                                        <a href="service_active.php?id=<?= $service_info['id'] ?>&action=active"><span class="btn btn-info">Mark as active</span></a>

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

    <div class="card text-white">
        <div class="card-header bg-secondary text-center">Add services</div>
        <div class="card-body text-dark">
            <form action="services_data.php" method="POST">
                <?php if (isset($_SESSION['alert'])) : ?>
                    <div class="alert alert-success" role="alert"><?= $_SESSION['alert'] ?></div>
                <?php endif;
                unset($_SESSION['alert']); ?>

                <div class="mb-3">
                    <label class="form-label">Service icon</label>
                    <input type="text" class="form-control" name="service_icon">
                    <a href="https://fontawesome.com/v4.7.0/icons/" class="text-warning" style="text-decoration:none" target="blank">Icon List</a>
                </div>

                <div class="mb-3">
                    <label class="form-label">Service title</label>
                    <input type="text" class="form-control" name="service_title">
                </div>

                <div class="mb-3">
                    <label class="form-label">Service description</label>
                    <br>
                    <textarea cols="35" rows="10" name="service_description" class="form-control"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

</div>

<?php
require_once "includes/footer.php";
?>