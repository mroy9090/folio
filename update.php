<?php
session_start();
$id = $_GET['id'];
$db_select = "SELECT  id,name, gender FROM users WHERE id='$id'";
$db_connect = mysqli_connect("localhost", "root", "", "student");
$db_query = mysqli_query($db_connect, $db_select);
$after_assoc = mysqli_fetch_assoc($db_query);


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
            <div class="card-header">Edit Information</div>
            <div class="card-body">
                <form action="editname.php" method="POST">

                    <div class="mb-3">
                        <input type="hidden" class="form-control" value="<?= $after_assoc['id'] ?>" name="id">
                        <label class="form-label">Full Name</label>
                        <input type="text" class="form-control" value="<?= $after_assoc['name'] ?>" name="fullname">
                        <div class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>

                    <br>
                    <label>Gender</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="exampleRadios1" value="male"
                         <?php
                             if ($after_assoc['gender'] == "male") {
                                echo "checked";
                            }

                        ?> 
                        <label class="form-check-label" for="exampleRadios1">Male</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="exampleRadios1" value="male" 
                        <?php
                            if ($after_assoc['gender'] == "female") {
                                echo "checked";
                                 }

                        ?> 
                        <label class="form-check-label" for="flexRadioDefault2"> Female</label>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-t6I8D5dJmMXjCsRLhSzCltuhNZg6P10kE0m0nAncLUjH6GeYLhRU1zfLoW3QNQDF" crossorigin="anonymous"></script>



</body>

</html>