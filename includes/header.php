<!DOCTYPE html>
<html>

<head>
    <title>new page</title>
    <link rel="stylesheet" type="text/css" href="mridul.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-CuOF+2SnTUfTwSZjCXf01h7uYhfOBuxIhGKPbfEJ3+FqH/s6cIFN9bGr1HmAg4fQ" crossorigin="anonymous">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="registration.php">Home</a>
            <a class="navbar-brand" href="registration.php">Registration</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="login.php">Login</a>
                    </li>
                    <?php session_start();
                    if (isset($_SESSION['nav_message'])) : ?>
                        <li class="nav-item">
                            <a class="nav-link" href="userlist.php">user list</a>
                        </li>
                    <?php endif; ?>

                    <?php
                    if (isset($_SESSION['nav_message'])) : ?>
                        <li class="nav-item">
                            <a class="nav-link" href="password.php">change password</a>
                        </li>
                    <?php endif; ?>


                    <?php
                    if (isset($_SESSION['nav_message'])) : ?>
                        <li class="nav-item">
                            <a class="nav-link" href="services.php">Services</a>
                        </li>
                    <?php endif; ?>


                    <?php
                    if (isset($_SESSION['nav_message'])) : ?>
                        <li class="nav-item">
                            <a class="nav-link" href="fact.php">Facts</a>
                        </li>
                    <?php endif; ?>

                    <?php
                    if (isset($_SESSION['nav_message'])) : ?>
                        <li class="nav-item">
                            <a class="nav-link" href="brand.php">Brand</a>
                        </li>
                    <?php endif; ?>

                    <?php
                    if (isset($_SESSION['nav_message'])) : ?>
                        <li class="nav-item">
                            <a class="nav-link" href="work.php">Best works</a>
                        </li>
                    <?php endif; ?>

                    <?php
                    if (isset($_SESSION['nav_message'])) : ?>
                        <li class="nav-item">
                            <a class="nav-link" href="education.php">Area of education</a>
                        </li>
                    <?php endif; ?>

                    <?php
                    if (isset($_SESSION['nav_message'])) : ?>
                        <li class="nav-item">
                            <a class="nav-link" href="settings.php">Text Settings</a>
                        </li>
                    <?php endif; ?>

                    <?php
                    if (isset($_SESSION['nav_message'])) : ?>
                        <li class="nav-item">
                            <a class="nav-link" href="workinfo.php">Work info</a>
                        </li>
                    <?php endif; ?>

                    <?php
                    if (isset($_SESSION['nav_message'])) : ?>
                        <li class="nav-item">

                            <a class="nav-link bg-danger text-light rounded-3" href="signout.php">Sign out</a>

                        </li>
                    <?php endif; ?>

                </ul>
                <form class="d-flex">
                    <input class="form-control mr-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="container">