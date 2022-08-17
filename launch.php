    <!DOCTYPE html>
    <html lang="en">
    <head>
       <meta charset="UTF-8">
        <title>GEOWEEK2021 - Launching Ceremony</title>
        <!-- ===================== META ===================== -->
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta name="format-detection" content="telephone=no">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="shortcut icon" href="assets/img/susl_logo.png">
        <!-- ===================== STYLE ===================== -->
        <link rel="stylesheet" href="assets/css/slick.min.css">
        <link rel="stylesheet" href="assets/css/bootstrap-grid.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>

        <!DOCTYPE html>
    <html lang="en">
    <head>
        <style>
.vertical-center {
  margin: 0;
  position: absolute;
  top: 50%;
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}
</style>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="HTML5, CSS3, Bootstrap5, JQuery, PHP, MySQL">
        <meta name="author" content="Bhathiya Kariyawasam">
        <title>GEOWEEK2021  - Launching Ceremony</title>

        <!-- Favicon Icon -->
        <link rel="icon" href="assets/images/favicon.ico">

        <!-- Bootstrap 5 -->
        <link rel="stylesheet" href="./vendor/css/bootstrap.min.css">
        <!-- Fontawesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
        <!-- ColorBox CSS-->
        <link rel="stylesheet" href="./vendor/css/colorbox.css">
        <!-- AOS CSS -->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="./vendor/css/style.css">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="./vendor/css/responsive.css">

        <!-- JQuery 3.6 -->
        <script src="./vendor/js/jquery.min.js"></script>
    </head>
    <body>

        <!-- Header section begins -->
        <section class="page-header">
            <div class="bg-white-tr">
                <div class="container text-center">
                    <h1 class="header-title"><center>Launching Ceremony</center></h1>
                    <br>
                    <img src="assets/img/GeoWeek_logo_withbackground.png" class="img-fluid" alt="ICSUSL2021">

                    
                    <div class="header-sub-title"></div>
                    <br>
                    <div class="vertical-center">
                        <button type="button" class="btn btn-primary btn-lg" onclick="launchSite()" id="output">Start</button>
                       

                    </div>
                </div>
            </div>
        </section>
        <!-- Header section ends -->

        <script>
            function launchSite() {
              score = 10;

              console.log(score);

              setInterval(function() {
                score -= 1;
                $('#output').html(score);
                //$("#output").css("background-color", getRandomColor());
                if (score == 0) {
                    window.location.href = "index.php";
                }
              }, 1000);

            }

            function getRandomColor() {
      var letters = '0123456789ABCDEF';
      var color = '#';
      for (var i = 0; i < 6; i++) {
        color += letters[Math.floor(Math.random() * 16)];
      }
      return color;
    }
        </script>


        <!-- Popper JS -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
        <!-- Bootstrap JS -->
        <script src="./vendor/js/bootstrap.min.js"></script>
        <!-- ColorBox JS -->
        <script src="./vendor/js/jquery.colorbox.js"></script>
        <!-- AOS JS -->
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <!-- JCounter JS -->
        <script src="./vendor/js/jquery.jCounter-0.1.4.js"></script>
        <!-- Custom JS -->
        <script src="vendor/js/custom.js"></script>
        <script>
            // Preloader
            $(window).on("load", function(){
                $(".se-pre-con").fadeOut("slow");
            });

            // AOS library animations
            AOS.init();
        </script>
    </body>
    <div class="se-pre-con"></div>
    </html>

      <!--===================== FOOTER =====================-->
       <footer> <div class="container">
                <div class="row">
                    <div class="col-12 col-md-4">
                        <a href="index.html" class="logo-footer">
                            <img src="assets/img/ezgif.com-gif-maker.gif" alt="logo" style="height: 120px; margin-left: 10px;">
                            <!-- <div class="logo-text"><span>Geo</span>week2021</div> -->
                        </a>
                        <div class="footer-text">The place where academia and industry come together</div>
                        <ul class="soc-link">
                            <li><a target="_blank" href="https://www.facebook.com/rovadex"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a target="_blank" href="https://twitter.com/RovadexStudio"><i class="fab fa-twitter"></i></a></li>
                            <li><a target="_blank" href="https://www.instagram.com/rovadex"><i class="fab fa-instagram"></i></a></li>
                            <li><a target="_blank" href="https://www.youtube.com"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4">
                        <h6></h6>
                        <ul class="footer-contacts">
                            <li>
                                <i class="fas fa-map-marker-alt"></i>
                                <a href="contacts.html">Belihuloya, Sri Lanka </a>
                            </li>
                            <li>
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <a href="tel:+940453453009">+94(045)345-3009</a>
                                
                            </li>
                            <li>
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <a href="mailto:geoweek@geo.sab.ac.lk">geoweek@geo.sab.ac.lk</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 insta-list-cover">
                        <h6>Sponsors</h6>
                        <ul class="insta-list">
                            
                            <div class="col-6 col-sm-4 col-md-2"><img class="lazy" src="assets/img/placeholder-all.png" data-src="assets/img/globalGIS.jpeg" alt="img"></div>
				<div class="col-6 col-sm-4 col-md-2"><img class="lazy" src="assets/img/placeholder-all.png" data-src="assets/img/downloadbhoomitech.png" alt="img"></div>
				<div class="col-6 col-sm-4 col-md-2"><img class="lazy" src="assets/img/placeholder-all.png" data-src="assets/img/sathutasmall.jpg" alt="img"></div>
				<div class="col-6 col-sm-4 col-md-2"><img class="lazy" src="assets/img/placeholder-all.png" data-src="assets/img/geomaticssolsmall.jpg" alt="img"></div>
				<div class="col-6 col-sm-4 col-md-2"><img class="lazy" src="assets/img/placeholder-all.png" data-src="assets/img/sulecn1g.jpg" alt="img"></div>
				<div class="col-6 col-sm-4 col-md-2"><img class="lazy" src="assets/img/placeholder-all.png" data-src="assets/img/GISsmall.jpg" alt="img"></div>
                            
                            <li><a target="_blank" href="#"><img src="assets/img/globalGIS.jpeg" alt="social"></a></li>
                            <li><a target="_blank" href="#"><img src="assets/img/downloadbhoomitech.png" alt="social"></a></li>
                            <li><a target="_blank" href="#"><img src="assets/img/sathutasmall.jpg" alt="social"></a></li>
                            <li><a target="_blank" href="#"><img src="assets/img/geomaticssolsmall.jpg" alt="social"></a></li>
                            <li><a target="_blank" href="#"><img src="assets/img/sulecn1g.jpg" alt="social"></a></li>
                            <li><a target="_blank" href="#"><img src="assets/img/GISsmall.jpg" alt="social"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-4"><div class="copyright">© 2021. <a target="_blank" href="#">GEOWEEK</a>. All Rights Reserved.</div></div>
                        <div class="col-8">
                            <ul class="footer-menu">
                                <li class="active">
                                    <a href="home">Home</a>
                                </li>
                                <li><a href="geoweek">Geoweek</a></li>
                                <li><a href="conference">Conference</a></li>
                                <li><a href="news">News</a></li>
                                <li><a href="contact">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div></footer>
        <!--=================== FOOTER END ===================-->

        <!--===================== TO TOP =====================-->
        <a class="to-top" href="#home">
            <i class="fa fa-chevron-up" aria-hidden="true"></i>
        </a>
        <!--=================== TO TOP END ===================-->

        <!--===================== SCRIPT	=====================-->
        <script src="assets/js/header.js"></script>
        <script src="assets/js/footer.js"></script>
        <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
        <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
        <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js"></script>
        <script src="assets/js/slick.min.js"></script>
        <script src="assets/js/scripts.js"></script>



    </body>
    <div class="se-pre-con"></div>
    </html>