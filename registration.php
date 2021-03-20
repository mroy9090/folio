<?php
require_once "includes/header.php";
?>




<div class="card border-secondary m-auto">
    <div class="card-header bg-secondary">Registration Form</div>
    <div class="card-body text-secondary">
        <form class="row g-3" action="registration_data.php" method="POST">
            <div class="col-md-12">
                <label class="form-label">Full Name</label>
                <input type="text" class="form-control" name="name">
            </div>
            <?php if (isset($_SESSION['check_name'])) : ?>
                <label class="text-danger"><?= $_SESSION['check_name'] ?></label>
            <?php endif; ?>
            <div class="col-md-12">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" name="email">
            </div>

            <?php if (isset($_SESSION['check_email'])) : ?>
                <label class="text-danger"><?= $_SESSION['check_email'] ?></label>
            <?php endif; ?>

            <?php if (isset($_SESSION['email_error'])) : ?>
                <label class="text-danger"><?= $_SESSION['email_error'] ?></label>
            <?php endif; ?>

            <div class="col-md-4">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" name="paassword">
            </div>
            <div class="col-md-4">
                <label class="form-label">Confirm Password</label>
                <input type="password" class="form-control" name="confirm_paassword">
            </div>
            <?php if (isset($_SESSION['check_pass'])) : ?>
                <label class="text-danger"><?= $_SESSION['check_pass'] ?></label>
            <?php endif; ?>

            <div class="col-12">
                <label class="form-label">Address</label>
                <input type="text" class="form-control" placeholder="address" name="address">
            </div>

            <?php if (isset($_SESSION['check_address'])) : ?>
                <label class="text-danger"><?= $_SESSION['check_address'] ?></label>
            <?php endif; ?>

            <div class="col-md-6">
                <label class="form-label">City</label>
                <input type="text" class="form-control" name="city">
            </div>

            <div class="col-md-4">
                <label for="inputState" class="form-label">State</label>
                <select id="inputState" class="form-select">
                    <option selected>Choose...</option>
                    <option>Dhaka</option>
                </select>
            </div>
            <div class="col-md-2">
                <label class="form-label">Zip</label>
                <input type="text" class="form-control">
            </div>
            <label>Gender</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1" value="male">
                <label class="form-check-label" for="flexRadioDefault1">Male</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault2" value="female">
                <label class="form-check-label" for="flexRadioDefault2">Female</label>
            </div>
            <br>
            <br>

            <div class="col-12 text-center">
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </div>
        </form>
    </div>
</div>


<?php
require_once "includes/footer.php";
unset($_SESSION['check_name']);
unset($_SESSION['check_email']);
unset($_SESSION['check_pass']);
unset($_SESSION['check_address']);
unset($_SESSION['email_error']);

?>