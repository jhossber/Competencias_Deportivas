<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>BizPage Bootstrap Template</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="{!! asset('assets/page/img/favicon.png') !!}" rel="icon">
  <link href="{!! asset('assets/page/img/apple-touch-icon.png') !!}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{!! asset('assets/page/lib/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{!! asset('assets/page/lib/font-awesome/css/font-awesome.min.css') !!}" rel="stylesheet">
  <link href="{!! asset('assets/page/lib/animate/animate.min.css') !!}" rel="stylesheet">
  <link href="{!! asset('assets/page/lib/ionicons/css/ionicons.min.css') !!}" rel="stylesheet">
  <link href="{!! asset('assets/page/lib/owlcarousel/assets/owl.carousel.min.css') !!}" rel="stylesheet">
  <link href="{!! asset('assets/page/lib/lightbox/css/lightbox.min.css') !!}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{!! asset('assets/page/css/style.css') !!}" rel="stylesheet">

</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto">Kronus Voley</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#intro">Inicio</a></li>
          <li><a href="#about">Quienes Somos</a></li>
          {{-- <li><a href="#services">Servicios</a></li> --}}
          <li><a href="#portfolio">Galeria</a></li>
          {{-- <li><a href="#team">Equipos</a></li> --}}
          <li><a href="#contact">Contactos</a></li>
          <li><a href="{{ route('login') }}">Ingresar</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active">
            <div class="carousel-background"><img src="{!! asset('assets/page/img/intro-carousel/6.jpg') !!}" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Escuela de Voleibol Kronus</h2>
                <h2>"Mas que un equipo un familia"</h2>
                <a href="#featured-services" class="btn-get-started scrollto">Empezar</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="{!! asset('assets/page/img/intro-carousel/7.jpg') !!}" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Trabajo en Equipo</h2>
                <p>Preparacion del jugador en su estado fisico y mental, desarrollo de sus capacitades Psicomotrices</p>
                <a href="#featured-services" class="btn-get-started scrollto">Empezar</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="{!! asset('assets/page/img/intro-carousel/8.jpg') !!}" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Tecnicas de Juego</h2>
                <p>Preparacion de Jugador en las tecnicas como: Colocaciones, Bloqueo, Defensa, Remate, Ofensiva, Sistemas de Juego</p>
                <a href="#featured-services" class="btn-get-started scrollto">Empezar</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="{!! asset('assets/page/img/intro-carousel/9.jpg') !!}" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Voleibol</h2>
                <p>No es el equipo con los mejores jugadores el que gana. Son los jugadores con el mejor equipo los que ganan.</p>
                <a href="#featured-services" class="btn-get-started scrollto">Empezar</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="{!! asset('assets/page/img/intro-carousel/10.jpeg') !!}" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Comunicate con Nosotros</h2>
                <p>Ven y forma Parte de Nuestra Familia</p>
                <a href="#featured-services" class="btn-get-started scrollto">Empezar</a>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      Featured Services Section
    ============================-->
    <section id="featured-services">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 box">
            <i class="ion-ios-bookmarks-outline"></i>
            <h4 class="title"><a href="">Categorias</a></h4>
            <p class="description">- Damas ( 15 Años en adelante )</p>
            <p class="description">- Varones ( 15 Años en adelante )</p>
            <p class="description">- Menores y Formativo ( 10 Años en adelante )</p>
          </div>

          <div class="col-lg-4 box box-bg">
            <i class="ion-ios-stopwatch-outline"></i>
            <h4 class="title"><a href="">Horarios de Entrenamiento</a></h4>
            <p class="description">Lunes y Jueves</p>
            <p class="description">- Damas ( 6:00PM - 7:30PM )</p>
            <p class="description">- Varones ( 7:30PM - 9:00PM )</p>
          </div>

          <div class="col-lg-4 box">
            <i class="ion-ios-heart-outline"></i>
            <h4 class="title"><a href="">Kronus Voley</a></h4>
            <p class="description">"Mas que un Equipo una Familia"</p>
            <p class="description"><hr></p>
            <p class="description"> Mira que te mando que te esfuerces y seas valiente; no temas ni desmayes, porque Jehová tu Dios estará contigo en dondequiera que vayas. Jos 1:9</p>
          </div>

        </div>
      </div>
    </section><!-- #featured-services -->

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">

        <header class="section-header">
          <h3>Quienes Somos</h3>
          <p>
            Kronus Voley nació el año 2016 donde un grupo de amigos que después de recorrer otros clubes y vivencias, nos surgió la idea de formar algo nuestro, algo donde pudiéramos formar el voleibol tal y como creemos, donde cada uno pueda expresarse y lograr objetivos altos, pero empezando desde abajo y en la Ciudad de El Alto - La Paz Bolvia, donde se empezaban a consolidar otros club de voleibol.
          </p>
          <p>
            Después de estos años, ya somos un club consolidado, con equipos en distintas categorías. A pesar de nuestro corto tiempo de vida, ya somos conocidos en toda la Ciudad de El Alto, como un equipo que crece año a año, siendo unos de los clubes que participan en más competiciones.
          </p>
          <p>
            Así que allá vamos, con nuestras ideas de un voleibol bien realizado y con paciencia, donde cada día nos ponemos retos a nosotros mismos.
          </p>
        </header>

        <div class="row about-cols">

          <div class="col-md-4 wow fadeInUp">
            <div class="about-col">
              <div class="img">
                <img src="img/about-mission.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Mision</a></h2>
              <p>
                Enseñar, promover, organizar y fomentar el desarrollo integral de nuestra juventud a través del deporte del voleibol, proveyéndole a la comunidad una oportunidad de participar en una actividad sana y familiar.
              </p>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="about-col">
              <div class="img">
                <img src="img/about-plan.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-list-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Plan</a></h2>
              <p> • Promover la disciplina deportiva como una alternativa de convivencia. </p>
              <p> • Favorecer naturalmente el juego limpio y la conducta ética educativa.</p>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
            <div class="about-col">
              <div class="img">
                <img src="img/about-vision.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-eye-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Vision</a></h2>
              <p>
                La Escuela de Voleibol de Kronus Voley (Club Kronus) estimula, por vía de la disciplina deportiva, a crear ciudadanos responsables, útiles y conscientes de sus deberes y obligaciones.
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #about -->

    <!--==========================
      Call To Action Section
    ============================-->
    <section id="call-to-action" class="wow fadeIn">
      <div class="container text-center">
        <h3>Call To Action</h3>
        <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <a class="cta-btn" href="#">Call To Action</a>
      </div>
    </section><!-- #call-to-action -->


    <!--==========================
      Portfolio Section
    ============================-->
    <section id="portfolio"  class="section-bg" >
      <div class="container">

        <header class="section-header">
          <h3 class="section-title">Galeria</h3>
        </header>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Toda la Galeria</li>
              <li data-filter=".filter-app">Categoria Damas</li>
              <li data-filter=".filter-card">Categoria Juveniles</li>
              <li data-filter=".filter-web">Categoria Mayores</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="{!! asset('assets/page/img/portfolio/app11.png') !!}" class="img-fluid" alt="">
                <a href="{!! asset('assets/page/img/portfolio/app11.png') !!}" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">App 1</a></h4>
                <p>App</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="{!! asset('assets/page/img/portfolio/web13.jpg') !!}" class="img-fluid" alt="">
                <a href="{!! asset('assets/page/img/portfolio/web13.jpg') !!}" class="link-preview" data-lightbox="portfolio" data-title="Web 3" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Web 3</a></h4>
                <p>Web</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="{!! asset('assets/page/img/portfolio/app12.jpg') !!}" class="img-fluid" alt="">
                <a href="{!! asset('assets/page/img/portfolio/app12.jpg') !!}" class="link-preview" data-lightbox="portfolio" data-title="App 2" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">App 2</a></h4>
                <p>App</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="{!! asset('assets/page/img/portfolio/card12.jpg') !!}" class="img-fluid" alt="">
                <a href="{!! asset('assets/page/img/portfolio/card12.jpg') !!}" class="link-preview" data-lightbox="portfolio" data-title="Card 2" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Card 2</a></h4>
                <p>Card</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="{!! asset('assets/page/img/portfolio/web12.jpg') !!}" class="img-fluid" alt="">
                <a href="{!! asset('assets/page/img/portfolio/web12.jpg') !!}" class="link-preview" data-lightbox="portfolio" data-title="Web 2" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Web 2</a></h4>
                <p>Web</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="{!! asset('assets/page/img/portfolio/app13.jpg') !!}" class="img-fluid" alt="">
                <a href="{!! asset('assets/page/img/portfolio/app13.jpg') !!}" class="link-preview" data-lightbox="portfolio" data-title="App 3" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">App 3</a></h4>
                <p>App</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="{!! asset('assets/page/img/portfolio/card11.jpg') !!}" class="img-fluid" alt="">
                <a href="{!! asset('assets/page/img/portfolio/card11.jpg') !!}" class="link-preview" data-lightbox="portfolio" data-title="Card 1" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Card 1</a></h4>
                <p>Card</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="{!! asset('assets/page/img/portfolio/card13.jpg') !!}" class="img-fluid" alt="">
                <a href="{!! asset('assets/page/img/portfolio/card13.jpg') !!}" class="link-preview" data-lightbox="portfolio" data-title="Card 3" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Card 3</a></h4>
                <p>Card</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="{!! asset('assets/page/img/portfolio/web11.jpg') !!}" class="img-fluid" alt="">
                <a href="{!! asset('assets/page/img/portfolio/web11.jpg') !!}" class="link-preview" data-lightbox="portfolio" data-title="Web 1" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Web 1</a></h4>
                <p>Web</p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #portfolio -->

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="section-bg wow fadeInUp">
      <div class="container">

        <div class="section-header">
          <h3>Contactate con Nosotros</h3>
          <p>Ven y se parte de nuestra Familia.</p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Dirección</h3>
              <address><a href="https://www.google.com/maps/place/Colegio+Particular+Libertad/@-16.5009225,-68.2060946,18z/data=!4m5!3m4!1s0x915ede477337679d:0x713627af95b15890!8m2!3d-16.5005233!4d-68.2062256">Zona Villa Tunari - Tinglado Libertad</a></address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Telefono</h3>
              <p><a href="https://api.whatsapp.com/send?phone=59171255705">+591 71255705</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Envianos Mensaje</h3>
              <p><a href="https://www.facebook.com/Club-de-Voleibol-Kronus-193079111580696">Kronus Voley</a></p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #contact -->

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>Kronus Voley</h3>
            <p>La ventaja del voleibol es que tienes un marcador para contar cómo ha ido el equipo. La cosa es que en la vida no hay marcador, al menos no uno que puedas ver.</p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Navegacion</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="#intro">Inicio</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#about">Quienes Somos</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#portfolio">Galeria</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Comunicate con Nosotros</h4>
            <p>
              Zona Villa Tunari <br>
              Tinglado Libertad<br>
              El Alto - La Paz Boliva <br>
              <strong>Telefono:</strong> +591 71255705<br>
            </p>

            <div class="social-links">
              {{-- <a href="#" class="twitter"><i class="fa fa-twitter"></i></a> --}}
              <a href="https://www.facebook.com/Club-de-Voleibol-Kronus-193079111580696" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="https://www.instagram.com/kronusvoley/" class="instagram"><i class="fa fa-instagram"></i></a>
              {{-- <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a> --}}
            </div>

          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Escuela Kronus Voley</h4>
            <p>"Mas que un Equipo una Familia"</p>
            <p>

            </p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit"  value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Jos-Ber</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
        -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script src="{!! asset('assets/page/lib/jquery/jquery.min.js') !!}"></script>
  <script src="{!! asset('assets/page/lib/jquery/jquery-migrate.min.js') !!}"></script>
  <script src="{!! asset('assets/page/lib/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>
  <script src="{!! asset('assets/page/lib/easing/easing.min.js') !!}"></script>
  <script src="{!! asset('assets/page/lib/superfish/hoverIntent.js') !!}"></script>
  <script src="{!! asset('assets/page/lib/superfish/superfish.min.js') !!}"></script>
  <script src="{!! asset('assets/page/lib/wow/wow.min.js') !!}"></script>
  <script src="{!! asset('assets/page/lib/waypoints/waypoints.min.js') !!}"></script>
  <script src="{!! asset('assets/page/lib/counterup/counterup.min.js') !!}"></script>
  <script src="{!! asset('assets/page/lib/owlcarousel/owl.carousel.min.js') !!}"></script>
  <script src="{!! asset('assets/page/lib/isotope/isotope.pkgd.min.js') !!}"></script>
  <script src="{!! asset('assets/page/lib/lightbox/js/lightbox.min.js') !!}"></script>
  <script src="{!! asset('assets/page/lib/touchSwipe/jquery.touchSwipe.min.js') !!}"></script>
  <!-- Contact Form JavaScript File -->
  <script src="{!! asset('assets/page/contactform/contactform.js') !!}"></script>
  <!-- Template Main Javascript File -->
  <script src="{!! asset('assets/page/js/main.js') !!}"></script>
</body>
</html>
