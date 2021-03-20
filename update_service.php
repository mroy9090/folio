<?php
require_once "includes/header.php";
$id=$_GET['id'];
$_SESSION['service_edit_id']=$id;
?>
<div class="card text-dark bg-warning mb-3 m-auto" style="max-width: 50rem;">
    <div class="card-header">Edit Services</div>
    <div class="card-body">
        <form action="update_service_data.php" method="POST">
            <div class="mb-3">
                <label class="form-label">service icon</label>
                <input type="text" class="form-control" name="update_icon_name">
            </div>
            <div class="mb-3">
                <label class="form-label">service title</label>
                <input type="text" class="form-control" name="update_iocn_title">
            </div>
            <div class="mb-3">
                <label class="form-label">service description</label>
                <br>
                <textarea cols="35" rows="10" name="service_description" class="form-control"></textarea>
            </div>

            <div class="text-center"><button type="submit" class="btn btn-success">UPDATE</button></div>
        </form>
    </div>
</div>
<?php
require_once "includes/footer.php";
?>