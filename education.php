<?php
require_once "includes/header.php";
$db_select = "SELECT id, area_name, area_year, area_percentage,status FROM educations ";
$db_connect = mysqli_connect("localhost", "root", "", "student");
$db_query = mysqli_query($db_connect, $db_select);
?>
<link rel="stylesheet" href="css/fontawesome-all.min.css">
<div class="row">
    <div class="col-8">
        <div class="card text-white">
            <div class="card-header bg-secondary text-center">Facts Information</div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">fact icon</th>
                            <th scope="col">fact title</th>
                            <th scope="col">fact information</th>
                            <th scope="col">action</th>
                            <th scope="col">status</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($db_query as $service_info) : ?>
                            <tr>
                                <td><?= $service_info['id'] ?></td>
                                <td><?= $service_info['area_name'] ?></td>
                                <td><?= $service_info['area_year'] ?></td>
                                <td><?= $service_info['area_percentage'] ?></td>
                                <td>
                                    <a href="update_fact_service.php?id=<?= $service_info['id'] ?>" class="btn btn-outline-warning" name="update_service">Edit</a>
                                    <a href="delete__fact_service.php?id=<?= $service_info['id'] ?>" name="delete_service" class="btn btn-outline-danger">Delete</a>
                                </td>
                                <td>
                                    <?php if ($service_info['status'] == "active") { ?>
                                        <span class="badge bg-success"><?= $service_info['status'] ?></span>
                                        <a href="education_active.php?id=<?= $service_info['id'] ?>&action=inactive"><span class="btn btn-warning">Mark as inactive</span></a>
                                    <?php } else { ?>
                                        <span class="badge bg-danger"><?= $service_info['status'] ?></span>
                                        <a href="education_active.php?id=<?= $service_info['id'] ?>&action=active"><span class="btn btn-info">Mark as active</span></a>

                                    <?php } ?>

                                </td>

                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="col-4">

        <div class="card text-white">
            <div class="card-header bg-secondary text-center">Add field of education</div>
            <div class="card-body text-dark">
                <form action="education_data.php" method="POST">
                    <?php if (isset($_SESSION['education'])) : ?>
                        <div class="alert alert-success" role="alert"><?= $_SESSION['education'] ?></div>
                    <?php endif;
                    unset($_SESSION['education']); ?>

                    <div class="mb-3">
                        <label class="form-label">Field of education name</label>
                        <input type="text" class="form-control" name="education_name">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Field of education year</label>
                        <input type="number" class="form-control" name="education_year">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Field of education percentage</label>
                        <input type="number" class="form-control" name="education_percentage">
                    </div>
                    <button type="submit" class="btn btn-info">Submit</button>
                </form>
            </div>
        </div>
    </div>

</div>



<?php
require_once "includes/footer.php";
?>