<?php
session_start();
include('includes/config.php');
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <title>หน้าหลัก | HOME PAGE</title>

</head>

<body>
    <!-- Navigation -->
    <?php include('includes/header.php'); ?>

    <!-- Container Page Content -->
    <div class="container">
        <!-- start row -->
        <div class="row bg-warning pb-3">
            <!-- ไลด์ข่าวสำคัญ -->
            <div class="col">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item carousel-image-1 active">
                        </div>
                        <div class="carousel-item carousel-image-2">
                        </div>
                        <div class="carousel-item carousel-image-3">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <!-- จบไลด์ข่าวสำคัญ -->
        </div>
        <!-- end row -->

        <!-- start row -->
        <div class="row">
            <!-- start colum พนักงาน -->
            <div class="col-md-3 pt-3 ps-3 pb-3 bg-primary">
                <div class="card" style="max-width: 18rem;">
                    <div class="card-header">
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
                        <h4>กระดานข่าว</h4>
                    </div>
                    <img src="images/5-Best-Free-and-Open-Source-Inventory-Management-Software.png" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title ">ข่าว mazuma</h5>
                        <p class="card-text">ข่าว mazuma</p>
                        <a href="#" class="btn btn-primary">ข่าว mazuma</a>
                    </div>
                    <div class="card-footer text-muted">
                        2 days ago
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/aac9715203.js" crossorigin="anonymous"></script>

</body>

</html>