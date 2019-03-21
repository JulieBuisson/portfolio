<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Julie Buisson MXC">

  <title>Portfolio - Julie Buisson MCX</title>

  <!-- CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="img/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="css/nivo-lightbox.css" rel="stylesheet" />
  <link href="css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
  <link href="css/owl.carousel.css" rel="stylesheet" media="screen" />
  <link href="css/owl.theme.css" rel="stylesheet" media="screen" />
  <link href="css/animate.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet">
  <link href="css/default.css" rel="stylesheet">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.1.0/css/flag-icon.min.css" rel="stylesheet">

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
  <!-- Preloader -->
  <div id="preloader">
    <div id="load"></div>
  </div>

  <!-- Section: intro -->
  <section id="intro" class="intro">

    <div id="langue">
      <a href="?lang=en">EN</a>
      <a >|</a>
      <a class="text-light" href="?lang=fr">FR</a>
    </div>

    <div class="slogan">
      <a href="#"><img width='250px' src="img/logos/logo_julie_3_FR.png" alt="mon logo" /></a>
    </div>
    <div class="page-scroll">
      <a href="#about">
        <i class="fa fa-angle-down fa-5x animated"></i>
      </a>
    </div>
  </section>
  <!-- /Section: intro -->

  <!-- Navigation -->
  <div id="navigation">
    <nav class="navbar navbar-custom" role="navigation">
      <div class="container">
        <div class="row">
          <div class="col-md-12">

            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
                <i class="fa fa-bars"></i>
              </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="menu">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#">Haut</a></li>
                <li><a href="#about">A propos de moi</a></li>
                <li><a href="#separator">Compétences</a></li>
                <li><a href="#gallery">Réalisations</a></li>
                <li><a href="#contact">Contactez moi</a></li>
              </ul>
            </div>
            <!-- /.Navbar-collapse -->

          </div>
        </div>
      </div>
      <!-- /.container -->
    </nav>
  </div>
  <!-- /Navigation -->

  <!-- Section: about -->
  <section id="about" class="home-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <div class="section-heading text-center">
            <div class="wow bounceInDown" data-wow-delay="0.2s">
              <h1>BIENVENUE</h1>
              <h2>Je m'appelle Julie</h2>
            </div>
            <p class="wow bounceInUp" data-wow-delay="0.3s">J'ai 23 ans, j'habite dans une petite ville près de Paris et j'adore mon job.</p>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-6">

          <img src="img/me.jpg" class="img-responsive img-rounded" alt="" />
        </div>
        <div class="col-md-6">
          <p><strong>You'll fall in love with me at the first sight</strong></p>
          <p>
            Lorem ipsum dolor sit amet, ei purto tamquam ceteros his, eos in graece posidonium. Ex nullam vidisse
            salutatus sed, ea persius phaedrum tincidunt vel. Option virtute nonumes ne est. Id homero expetendis eam,
            dictas rationibus ut has.  
          </p>
          <blockquote>
            Pri pertinacia elaboraret te, an eirmod delicatissimi nec. Eu liber quodsi maiorum mei. Civibus perfecto
            rationibus id his, est noster nostrud aliquando at.
          </blockquote>
          <a href="#gallery" class="btn btn-skin btn-lg btn-scroll">See my photos</a>
        </div>
      </div>
    </div>
  </section>
  <!-- /Section: about -->

  <!-- Section: separator -->
  <section id="separator" class="home-section parallax text-center" data-stellar-background-ratio="0.5">

    <div class="carousel"></div>
    <script>
      var x = 0;
      setInterval(function() {
        document.querySelector('.carousel').style.backgroundPositionX = x + "px";
        x += -1;
      }, 20);
    </script>

  </section>
  <!-- /Section: separator -->


  <!-- Section: gallery -->
  <section id="gallery" class="home-section text-center bg-gray">

    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <div class="wow bounceInDown" data-wow-delay="0.4s">
            <div class="section-heading">
              <h2>Portfolio</h2>
              <p>Take a look at my projects</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
          <div class="wow bounceInUp" data-wow-delay="0.4s">
            <div id="owl-works" class="owl-carousel">
              <div class="item"><a href="img/portfolio/Screenshot_2019-02-01 My Unicorn.png" title="Un jour, une licorne"
                  data-lightbox-gallery="gallery1"><img src="img/portfolio/Screenshot_2019-02-01 My Unicorn.png" class="img-responsive" alt="licorne"></a>
              </div>
              <div class="item"><a href="img/portfolio/Screenshot_2019-01-30 Pop Part.png" title="PopArt"
                  data-lightbox-gallery="gallery1"><img src="img/portfolio/Screenshot_2019-01-30 Pop Part.png" class="img-responsive " alt="PopArt Lion"></a>
              </div>
              <div class="item"><a href="img/portfolio/Screenshot_2019-01-31 Au Pois Gourmand.png" title="Au pois Gourmand"
                  data-lightbox-gallery="gallery1"><img src="img/portfolio/Screenshot_2019-01-31 Au Pois Gourmand.png" class="img-responsive " alt="Site restauration"></a>
              </div>
              <div class="item"><a href="img/portfolio/Screenshot_2019-01-30 Forum Vodoo.png" title="Forum Vodoo"
                  data-lightbox-gallery="gallery1"><img src="img/portfolio/Screenshot_2019-01-30 Forum Vodoo.png" class="img-responsive " alt="Vodoo"></a>
              </div>
              <div class="item"><a href="img/portfolio/Screenshot_2019-01-30 Jurassic l'Exposition.jpg" title="Exposition Jurassic"
                  data-lightbox-gallery="gallery1"><img src="img/portfolio/Screenshot_2019-01-30 Jurassic l'Exposition.jpg" class="img-responsive " alt="Jurassic Park"></a>
              </div>
              <div class="item"><a href="img/portfolio/Screenshot_2019-01-31 Base CDN (Content Delivery Network).jpg" title="Super Topa"
                  data-lightbox-gallery="gallery1"><img src="img/portfolio/Screenshot_2019-01-31 Base CDN (Content Delivery Network).jpg" class="img-responsive " alt="Bootstrap"></a>
              </div>
              <div class="item"><a href="img/portfolio/Screenshot_2019-01-30 Le Donjon .png" title="Le donjon"
                  data-lightbox-gallery="gallery1"><img src="img/portfolio/Screenshot_2019-01-30 Le Donjon .png" class="img-responsive " alt="Jeux donjon inspiré Dofus"></a>
              </div>
              <div class="item"><a href="img/portfolio/Screenshot_2019-01-31 Eshop.jpg" title="E-Shop"
                  data-lightbox-gallery="gallery1"><img src="img/portfolio/Screenshot_2019-01-31 Eshop.jpg" class="img-responsive " alt="Boutique EShop"></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /Section: services -->




  <!-- Section: contact -->
  <section id="contact" class="home-section text-center">
    <div class="heading-contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-offset-2">

            <div class="section-heading">
              <div class="wow bounceInDown" data-wow-delay="0.4s">
                <h2>Email or phone are welcome</h2>
              </div>
              <p class="wow lightSpeedIn" data-wow-delay="0.3s">Gentleman, introduce your self and get in touch with me
                privately</p>
            </div>

          </div>
        </div>
      </div>
    </div>
    <div class="container">

      <div class="row">
        <div class="col-lg-8 col-md-offset-2">
          <div class="form-wrapper marginbot-50">
            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>
            <form id="contact-form" action="" method="post" role="form" class="contactForm">
              <div class="form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                  data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                  data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                  data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required"
                  data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validation"></div>
              </div>

              <div class="text-center"><button type="submit" class="btn btn-skin btn-block" id="btnContactUs">Send
                  Message</button></div>
            </form>
          </div>
          <div class="text-center">
            <p class="lead"><i class="fa fa-phone"></i> Call me +1 888 9796 88</p>
          </div>
        </div>

      </div>

    </div>
  </section>
  <!-- /Section: contact -->

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-12">
          <p>&copy; Julie Buisson MCX</p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Core JavaScript Files -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/jquery.scrollTo.js"></script>
  <script src="js/stellar.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/nivo-lightbox.min.js"></script>
  <!-- Custom Theme JavaScript -->
  <script src="js/custom.js"></script>
  <script src="js/contactform.js"></script>

</body>

</html>