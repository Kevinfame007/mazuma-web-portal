<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body class="bg bg-success bg-opacity-75">

    <!-- START ADMIN REGISTER -->
    <section>
        <div class="container bg-light pb-3 shadow-lg p-3 mb-5 rounded-3" style="padding-top: 50px; margin-top: 50px;">
            <img src="images/logo.png" class="pt-5 mx-auto d-block" style="width: 500px; padding-bottom: 50px;">
            <center>
                <h1>ADMIN LOGIN</h1>
            </center>
            <form action="register_db.php" method="post">

                <div class="mb-3">
                    <label for="firstname" class="form-label">Firstname</label>
                    <input type="text" class="form-control" id="firstname" aria-describedby="firstname" require>
                </div>
                <div class="mb-3">
                    <label for="lastname" class="form-label">Lastname</label>
                    <input type="text" class="form-control" id="lastname" aria-describedby="lastname" require>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" class="form-control" id="email" aria-describedby="email" require>
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" aria-describedby="username" require>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" require>
                </div>
                <div class="mb-3">
                    <label for="confirm password" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="c_password" require>
                </div>
                <div class="mb-3">
                    <div class="row">
                        <div class="col col-sm-1">
                            <a href="register_admin_db.php">
                                <button type="submit" name="Register" class="btn btn-primary">Register</button>
                            </a>
                        </div>
                        <div class="col">
                            <a href="index.php">
                                <button type="submit" name="login" class="btn btn-success">Login</button>
                            </a>
                        </div>
                    </div>
                </div>

            </form>

        </div>
    </section>

    <!-- END ADMIN REGISTER -->
    <?php include('includes/footer_registeradmin.php'); ?>

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="jquery/jquery-3.6.0.min.js"></script>

</body>

</html>