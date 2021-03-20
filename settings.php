<?php
require_once "includes/header.php";
$db_setting_select = "SELECT * FROM settings";
$db_connect = mysqli_connect("localhost", "root", "", "student");
$db_query = mysqli_query($db_connect, $db_setting_select);
?>

<div class="row">
    <div class="col-4 m-auto">
        <div class="card text-dark mb-3" style="max-width: 30rem">
            <div class="card-header bg-warning text-center">Text settings</div>
            <div class="card-body text-dark">
                <form action="settings_data.php" method="POST">
                    <?php if(isset($_SESSION['update'])): ?>
                        <div class="alert alert-primary" role="alert">
                            <?= $_SESSION['update']?>
                        </div>
                        <?php endif; unset($_SESSION['update']); ?>
                    <?php foreach ($db_query as $settings_data) : ?>
                        <div class="mb-3">
                            <label class="form-label"><?= $settings_data['setting_name'] ?></label>
                            <input type="text" class="form-control" value="<?= $settings_data['setting_value'] ?>" name="<?= $settings_data['setting_name'] ?>">
                        </div>
                    <?php endforeach; ?>
                    <div class="text-center">
                        <button type="submit" class="btn btn-success">Change</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>





<?php
include_once "includes/footer.php";
?>