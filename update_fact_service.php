<?php
require_once "includes/header.php";
$id = $_GET['id'];
$_SESSION['service_fact_edit_id'] = $id;
?>
<div class="card text-dark bg-warning mb-3 m-auto" style="max-width: 18rem;">
    <div class="card-header bg-dark text-light">Edit Facts Services</div>
    <div class="card-body">
        <form action="update_fact_service_data.php" method="POST">
            <div class="mb-3">
                <label class="form-label">Facts icon</label>
                <input type="text" class="form-control" name="update_fact_icon_name">
            </div>
            <div class="mb-3">
                <label class="form-label">Facts title</label>
                <input type="number" class="form-control" name="update_fact_title">
            </div>
            <div class="mb-3">
                <label class="form-label">Facts description</label>
                <input type="text" class="form-control" name="update_fact_description">
            </div>

            <div class="text-center"><button type="submit" class="btn btn-success">UPDATE</button></div>
        </form>
    </div>
</div>
<?php
require_once "includes/footer.php";
?>