<?php
require_once "includes/header.php";
?>

<div class="card border-success m-auto" style="max-width: 40rem;">
    <div class="card-header">Header</div>
    <div class="card-body text-success">
        <form action="log_data.php" method="POST">
            <div class="mb-3">
                <label>Email address</label>
                <input type="email" class="form-control" name="logemail">
            </div>

            <div class="mb-3">
                <label>Password</label>
                <input type="password" class="form-control" name="logpass">
            </div>
            <?php if(isset($_SESSION['error'])): ?>
                <label class="text-danger"><?= $_SESSION['error']?></label>
            <?php endif; ?>
            <div class="text-center"><button type="submit" class="btn btn-warning">Submit</button></div>

        </form>
    </div>
</div>

<?php
require_once "includes/footer.php";
unset($_SESSION['error']);
?>