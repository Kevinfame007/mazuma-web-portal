<?php
session_start();
include('includes/config.php');
?>

<!DOCTYPE html>
<html lang="EN">

<head>

    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>ข่าวการรับสมัครพนักงานใหม่ | REGISTER NEWS</title>

</head>

<body>
    <!-- Navigation -->
    <?php include('includes/header.php'); ?>

    <!-- Container Page Content -->
    <div class="container">
        
        <!-- start row -->
        <div class="row">
            <!-- start colum พนักงาน -->
            <div class="col-md-3 pt-3 ps-3 pb-3 bg-primary">
                <div class="card" style="max-width: 18rem;">
                    <div class="card-header text-center">
                        <h5 class="card-title">พนักงานใหม่</h5>
                    </div>
                    <img src="images/pngegg.png" class="card-img-top">
                    <hr>
                    <div class="card-body">
                        <p class=""></p>
                        <p class="card-text">ชื่อ-นามสกุล ชื่อเล่น</p>
                    </div>
                </div>
            </div>
            <!-- end colum จบพนักงานใหม่ -->

            <!-- start colum -->
            <div class="col-md-9 pt-3 pb-3 bg-success">
                <div class="card">
                    <div class="card-header text-center">
                        <h4>ข่าวการรับสมัครพนักงานใหม่</h4>
                    </div>
                    <img src="images/5-Best-Free-and-Open-Source-Inventory-Management-Software.png" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title ">ข่าว mazuma</h5>
                        <p class="card-text">ข่าว mazuma</p>
                        <a href="#" class="btn btn-primary">อ่านเพิ่มเติม</a>
                    </div>
                    <div class="card-footer text-muted">
                        <?php  ?>
                    </div>
                </div>

            </div>
            <!-- end colum -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container end page content -->

    <!-- Footer -->
    <?php include('includes/footer.php'); ?>

    <script src="jquery/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

</body>

</html>