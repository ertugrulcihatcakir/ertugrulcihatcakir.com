<?php 
include("vt.php"); // veritabanı bağlantımızı sayfamıza ekliyoruz. 
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Ertuğrul Cihat Çakır</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/main.css">

    <!-- script
    ================================================== -->
    <script src="js/modernizr.js"></script>

    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

</head>

<body >
    <!-- header ================================================== -->
    <header class="s-header header">
        <div class="header__logo">
            <a class="logo" href="index.php">
                <img src="images/logo2.png">
            </a>
        </div> <!-- end header__logo -->
        <nav class="header__nav-wrap">
            <ul class="header__nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="index.php">Ana Sayfa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#hakkımda">Hakkımda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="iletisim.php">İLETİŞİM</a>
          </li>
        </ul>
        </nav> <!-- end header__nav-wrap -->
    </header> <!-- s-header -->
    <!-- featured ================================================== -->
    <section class="s-featured">
        <div class="row">
            <div class="col-full">
                <div class="featured-slider featured" data-aos="zoom-in">
                    <div class="featured__slide">
                        <div class="entry">
                            <div class="entry__background" style="background-image:url('images/4.jpg');"></div>
                            <div class="entry__content">
                                <h1><a  title="">Kendine özgü içerikler ve fikirlerin birleştiği yer.</a></h1>
                            </div> <!-- end entry__content -->-
                        </div> <!-- end entry -->
                    </div> <!-- end featured__slide -->
                    <div class="featured__slide">
                        <div class="entry">
                            <div class="entry__background" style="background-image:url('images/2.jpg');"></div>
                            <div class="entry__content">
                                <h1><a title="">Herkesin kendini belli ettiği yer vardır.</a></h1>
                            </div> <!-- end entry__content -->
                        </div> <!-- end entry -->
                    </div> <!-- end featured__slide -->
                    <div class="featured__slide">
                        <div class="entry">
                            <div class="entry__background" style="background-image:url('images/3.jpg');"></div>
                            <div class="entry__content">
                                <h1><a title="">Kendinizi geliştirmek için kendiniz olun.</a></h1>
                            </div> <!-- end entry__content -->
                        </div> <!-- end entry -->
                    </div> <!-- end featured__slide -->
                </div> <!-- end featured -->
            </div> <!-- end col-full -->
        </div>
    </section>
    <!-- hakkımda ================================================== -->
    <section class="s-featured" id="hakkımda" >
      <div class="container">
      <!-- Örnek Projeler Row -->
      <div class="row align-items-center no-gutters mb-4 mb-lg-5">
        <div class="col-xl-8 col-lg-7">
          <img class="img-fluid mb-3 mb-lg-0" src="img/g.jpg" alt="">
        </div>
        <div class="col-xl-4 col-lg-5">
          <div class="featured-text text-center text-lg-left">
            <h2>Hakkımda</h2>
            <p class="text-black-50 mb-0">
                - Merhaba ben Ertuğrul. 1999 yılında İstanbul'da doğdum. Sonunda 20 yaşındayım.<br>
                - İlk okulu Esenyalı Turgut Reis İlkokul'unda okudum.<br>
                - Liseyi Tuzla Mesleki ve Teknik Anadolu Lises'inde Bilgisyar Programcılıgı/Web Tasarım Bölümünde okudum ve mezun oldum üniversiteye hazırlandım.<br>
                - Üniversiteyi kazandım ve Sakarya Uygulamalı Bilimler Üniversitesin de Bilgisayar Programcılığı okuyorum.                <br>
                - Kendimi bu alanda geliştirmek için internetten hep araştırma yapıyorum.<br>
                - Hobilerim yüzmek,gezmek,oyun oynamak.<br>
                - Yalnız kalmaktan hoşlanmam. <br>
                - Buradan benim <a class="nav-link js-scroll-trigger" href="">CV'me</a> ulaşabilirsiniz.
            </p><br>
            <a href="iletisim.php" class="btn btn-primary js-scroll-trigger">Benimle İletişime Geç</a>
          </div>
          <br>
          <br>
          <div>

            <!-- LightWidget WIDGET --><script src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script><iframe src="//lightwidget.com/widgets/a595570be5695760a69d9285be007fe0.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width:100%;border:0;overflow:hidden;"></iframe>
            
          </div>
        </div>
      </div>
    </section class="s-featured">      
    <!-- s-footer
    ================================================== -->
    <footer class="s-footer">
        <center>
            <div class="s-footer__bottom">
                <div class="row">
                    <span>
                        <a href="https://www.twitter.com/ertgrulcihat/" class="mx-2">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="https://www.instagram.com/ertugrulcihatcakir/" class="mx-2">
                            <i class="fab fa-instagram "></i>
                        </a>
                        <a href="https://www.twitch.tv/akadestino" class="mx-2">
                            <i class="fab fa-twitch "></i>
                        </a>
                        <br>
                         Copyright &copy; <a href="http://bydes.tk/" target="_blank">BYDES</a>  2019
                    </span> 
                </div>
            </div> <!-- end s-footer__bottom -->
        </center>
    </footer> <!-- end s-footer -->

    <!-- Java Script
    ================================================== -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>


    <!-- Bootstrap core JavaScript -->
</body>


</html>
