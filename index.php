<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Go Warmindo</title>
</head>
<body id="body" class="body-light" data-spy="scroll" data-target="#navbarKu" data-offset="1">
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
                    <a class="nav-link" href="tentang.php">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="makanan.php">Makanan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="minuman.php">Minuman</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="testimoni.php">Testimoni</a>
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
                <div class="col-md-5 container-left fade-in">
                    <h1 class="text-green">Go Warmindo</h1>
                    <b>
                        Cobain makanan lezat kami.
                    </b><br>
                    <a href="#sectionMinuman" class="btn btn-danger">Lihat Menu</a>
                    <br><br>
                </div>
                <div class="col-md-5 container-right">
                    <img src="images/home.png" class="image-show fade-in" alt="">
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
    </section>
    <footer class="footer text-center">&copy; 2021 - Kelompok C3 . All right reserved</footer>
    <script src="jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
            $('body').scrollspy({target: "#navbarKu"})

            //toggle theme
            $('#toDarkTheme').click(function(){
                $('#navbar').removeClass("navbar-light");
                $('#navbar').removeClass("bg-light");
                $('#body').removeClass("body-light");
                $('#navbar').addClass("navbar-dark");
                $('#navbar').addClass("bg-dark");
                $('#body').addClass("body-dark");
                $('.menu-card-light').addClass("menu-card-dark");
                $('.menu-card-light').removeClass("menu-card-light");
                $('#toDarkTheme').css("display","none");
                $('#toLightTheme').css("display","block");
            })

            $('#toLightTheme').click(function(){
                $('#navbar').removeClass("navbar-dark");
                $('#navbar').removeClass("bg-dark");
                $('#body').removeClass("body-dark");
                $('#navbar').addClass("navbar-light");
                $('#navbar').addClass("bg-light");
                $('#body').addClass("body-light");
                $('.menu-card-dark').addClass("menu-card-light");
                $('.menu-card-dark').removeClass("menu-card-dark");
                $('#toDarkTheme').css("display","block");
                $('#toLightTheme').css("display","none");
            })
            //------------

            // $(window).scroll(function() {
            //     var windowBottom = $(this).scrollTop() + $(this).innerHeight();
            //     $(".fade-in").each(function() {
            //         var objectBottom = $(this).offset().top + $(this).outerHeight();
                    
            //         if (objectBottom < windowBottom) {
            //             if ($(this).css("opacity") == 0) {
            //                 $(this).fadeTo(500,0.5, function() {
            //                     $(this).css("opacity","1");
            //                     $(this).css("margin-top","0px");
            //                 });
            //             }
            //         }
            //     });
            // }).scroll();
        });
    </script>
</body>
</html>