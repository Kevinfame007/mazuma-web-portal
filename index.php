<?php

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>MAZUMA</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- แทบด้านบน -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top pt-4 pb-4 ps-5">
                <div class="col-5">
                    <a class="navbar-brand" href="index.php">
                        <img src="images/Asset-1@4x.png" alt="" width="240" height="53">
                    </a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">หน้าหลัก</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">การรับสมัคร</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">ระบบสารสนเทศออนไลน์</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                หน่วยงาน
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">หน่วยที่ 1</a></li>
                                <li><a class="dropdown-item" href="#">หน่วยที่ 2</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">เบอร์ติดต่อภายใน</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">ปฏิทินกิจกรรม</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- จบแทบด้านบน -->

            <!-- ไลด์ข่าวสำคัญ -->
            <div class="col bg-warning pb-3 ">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner ">
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

        <div class="row">
            <!-- พนักงาน -->
            <div class="col-md-3 pt-3 ps-4 pb-3 bg-primary">
                <div class="card card-image-size" style="max-width: 18rem;">
                    <div class="card-header">
                        <h5 class="card-title">พนักงานใหม่</h5>
                    </div>
                    <img src="images/pngegg.png" class="card-img-top " alt="...">
                    <hr>
                    <div class="card-body">
                        <p class="card-text">ชื่อ-นามสกุล ชื่อเล่น
                    </div>
                </div>
            </div>
            <!-- จบพนักงานใหม่ -->

            <div class="col ps-4 pt-3 pe-4 pb-3 bg-success">
                <div class="card">
                    <div class="card-header text-center">
                        <h4>กระดานข่าว</h4>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                    <div class="card-footer text-muted">
                        2 days ago
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>