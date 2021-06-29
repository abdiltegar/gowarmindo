<?php 
session_start();
include 'library/user.php';
$user = new User();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script src="script/jquery.js"></script>
    <title>Go Warmindo</title>
</head>
<body id="body" class="body-light" data-spy="scroll" data-target="#navbarKu" data-offset="1">
    <?php include 'login.php'; ?>
    <a href="#" class="float">
        <img src="images/noun_up_1684524.svg" alt="">
    </a>
    <nav class="navbar navbar-expand-lg sticky-top navbar-light bg-light" id="navbar">
        <div class="container">
          <a class="navbar-brand" href="#">Go Warmindo</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarKu" aria-controls="navbarKu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarKu">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#sectionBeranda">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="tentang/">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="makanan/">Makanan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="minuman/">Minuman</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="testimoni/">Testimoni</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="images/149071.png" alt="" class="icon">
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <?php
                        if(isset($_SESSION['user_id'])){
                        ?>
                        <span style="width: 100%;padding: .25rem 1rem;"> Hi <?php echo $_SESSION['user_nama']?> </span>
                        <hr>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modalLogout">Logout</a>
                        <?php
                        }else{
                        ?>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modalLogin">Login</a>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modalRegister">Register</a>
                        <?php
                        }
                        ?>
                        
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:;" id="toDarkTheme" style="display: block;"><img src="images/noun_dark theme_1664849.svg" alt="" class="icon"></a>
                    <a class="nav-link" href="javascript:;" id="toLightTheme" style="display: none;"><img src="images/noun_light theme_2853779.svg" alt="" class="icon"></a>
                </li>
            </ul>
          </div>
        </div>
    </nav>
    <section class="section" id="sectionBeranda">
        <div class="container">
            <div class="row">
                <div class="col-md-1"></div>
                    <div class="col-md-5 container-left fade-in"> &nbsp;
                    <h1 class="text-green">Go Warmindo</h1>
                    <b>
                        Cobain makanan lezat kami.
                    </b><br>
                    <a href="#sectionMinuman" class="btn btn-danger">Lihat Menu</a>
                    <br><br>
                </div>
                <div class="col-md-5 container-right">
                    <img src="images/logo.png" class="image-show fade-in" alt="">
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
    </section>
    <?php include 'footer.php'; ?>
</body>
</html>