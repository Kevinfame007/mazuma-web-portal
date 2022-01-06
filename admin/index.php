<?php
session_start();
// Database Config File
include('includes/config.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAZUMA PORTAL | ADMINISTRATOR LOGIN</title>

    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <style>

    </style>

</head>

<body class="bg-success bg-opacity-75">

    <!-- START ADMIN LOGIN -->
    <section>
        <div class="container bg-light pb-3 shadow-lg p-3 mb-5 rounded-3" style="padding-top: 50px; margin-top: 200px; width: 700px;">
            <form class="p-3">
                <img src="images/logo.png" class="pt-5 mx-auto d-block" style="width: 500px; padding-bottom: 50px;">
                <center>
                    <h1>ADMIN LOGIN</h1>
                </center>
                <hr>
                <div class="md-5 pb-3">
                    <label for="useroremail" class="form-label">Username or Email</label>
                    <input type="text" class="form-control" id="useroremail" placeholder="Enter Your Username or Email" require>
                </div>
                <div class="md-5 pb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Enter Your Password" require>
                </div>
                <button type="submit" class="btn btn-success">Login</button>
                <a href="register_admin.php">
                    <button type="submit" class="btn btn-primary">Register</button>
                </a>

            </form>
        </div>
    </section>

    <!-- END ADMIN LOGIN -->
    <?php include('includes/footer_admin.php'); ?>

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="jquery/jquery-3.6.0.min.js"></script>

</body>

</html>