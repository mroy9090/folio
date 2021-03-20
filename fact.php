<?php
require_once "includes/header.php";
$db_select = "SELECT id, fact_icon, fact_title, fact_description FROM facts ";
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

                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($db_query as $service_info) : ?>
                            <tr>
                                <td><?= $service_info['id'] ?></td>
                                <td><i class="<?= $service_info['fact_icon'] ?>"></i></td>
                                <td><?= $service_info['fact_title'] ?></td>
                                <td><?= $service_info['fact_description'] ?></td>
                                <td>
                                    <a href="update_fact_service.php?id=<?= $service_info['id'] ?>" class="btn btn-outline-warning" name="update_service">Edit</a>
                                    <a href="delete__fact_service.php?id=<?= $service_info['id'] ?>" name="delete_service" class="btn btn-outline-danger">Delete</a>
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
            <div class="card-header bg-secondary text-center">Add facts</div>
            <div class="card-body text-dark">
                <form action="fact_data.php" method="POST">
                    <?php if (isset($_SESSION['alert'])) : ?>
                        <div class="alert alert-success" role="alert"><?= $_SESSION['alert'] ?></div>
                    <?php endif;
                    unset($_SESSION['alert']); ?>

                    <div class="mb-3">
                        <label class="form-label">Facts icon</label>
                        <input type="text" class="form-control" name="fact_icon">
                        <a href="https://fontawesome.com/icons?d=gallery" class="text-success" style="text-decoration:none" target="blank">Icon List</a>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Facts title</label>
                        <input type="number" class="form-control" name="fact_title">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Facts description</label>
                        <input type="text" class="form-control" name="fact_description">
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