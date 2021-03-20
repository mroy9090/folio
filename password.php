<?php
    session_start();
?>




<!DOCTYPE html>
<html>

<head>
    <title>new page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-CuOF+2SnTUfTwSZjCXf01h7uYhfOBuxIhGKPbfEJ3+FqH/s6cIFN9bGr1HmAg4fQ" crossorigin="anonymous">


</head>

<body>
    <div class="container" style="max-width: 40rem;">
        <div class="card text-dark bg-info mb-3" style="max-width: 30rem;">
            <div class="card-header">Change Password</div>
            <div class="card-body">
                <form action="password_data.php" method="POST">
                    <div class="mb-3">
                        <label>Old password</label>
                        <input type="password" class="form-control" name="old_password">

                    </div>
                    <div class="mb-3">
                        <label>New Password</label>
                        <input type="password" class="form-control" name="new_password" id="password">
                        <input type="checkbox" onclick="myFunction()"> Show Password
                        <script>
                            function myFunction() {
                                var x = document.getElementById("password");
                                if (x.type === "password") {
                                    x.type = "text";
                                } else {
                                    x.type = "password";
                                }
                            }
                        </script>

                    </div>


                    <div class="mb-3">
                        <label>Confirm new password</label>
                        <input type="password" class="form-control" name="confirm_new_password">
                    </div>
                    <?php if(isset($_SESSION['wrong_password'])): ?>
                        <label><?= $_SESSION['wrong_password']?></label>
                    <?php endif; unset($_SESSION['wrong_password']); ?>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>

            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-t6I8D5dJmMXjCsRLhSzCltuhNZg6P10kE0m0nAncLUjH6GeYLhRU1zfLoW3QNQDF" crossorigin="anonymous"></script>



</body>

</html>