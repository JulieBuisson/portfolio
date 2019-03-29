<!DOCTYPE html>
<html lang="en">

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
  <link href="css/animate.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet">
  <link href="css/default.css" rel="stylesheet">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.1.0/css/flag-icon.min.css" rel="stylesheet">

  
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
  <!-- Preloader -->
  <div id="preloader">
    <div id="load"></div>
  </div>

  <!-- Section: intro -->
  <section id="intro" class="intro">

  <div id="langue">
      <a class="text-light" href="?lang=en">EN</a>
      <a id="back-door">|</a>
      <script src="js/script.js"></script>
      <a href="?lang=fr">FR</a>
    </div>

    <div class="slogan">
      <a href="index.php"><img width='250px' src="img/logo julie 3.png" alt="mon logo" /></a>
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
                <li class="active"><a href="#">Top</a></li>
                <li><a href="#about">About me</a></li>
                <li><a href="#separator">Skills</a></li>
                <li><a href="#gallery">Works</a></li>
                <li><a href="#contact">Contact me</a></li>
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
              <h1><?=$intro['titre']?></h1>
            </div>
              <h2><?=$intro['sous-titre']?></h2>
            <p><?=$intro['description']?></p>
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
          <p><strong>Let me introduce myself.</strong></p>
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
      }, 6);
    </script>

  </section>
  <!-- /Section: separator -->


  <!-- Section: gallery -->
  <section id="gallery" class="home-section text-center bg-gray">

    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <div class="section-heading">
            <h2>Portfolio</h2>
            <p>Take a look at my projects</p>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">

          <div class="card" style="width: 32rem; border: 0.5px solid #FC5772; border-radius: 3%; padding: 2%">
            <img src="img/pop_art.png" class="card-img-top img-responsive" alt="Pop Art">
            <div class="card-body">
              <h3 class="card-title">Pop Art</h3>
              <blockquote>HTML/CSS</blockquote>
              <a href="view/projet/pop/index.html" class="btn btn-info" target="_blank">Voir</a>
            </div>
          </div>
          
          <div class="card" style="width: 32rem; border: 0.5px solid #FC5772; border-radius: 3%; padding: 2%">
            <img src="img/my_unicorn.png" class="card-img-top img-responsive" alt="licorne">
            <div class="card-body">
              <h3 class="card-title">My Unicorn</h3>
              <blockquote>HTML/CSS</blockquote>
              <a href="view/projet/licorne/index.html" class="btn btn-info" target="_blank">Voir</a>
            </div>
          </div>

          <div class="card" style="width: 32rem; border: 0.5px solid #FC5772; border-radius: 3%; padding: 2%">
            <img src="img/voodoo.png" class="card-img-top img-responsive" alt="Forum Vodoo">
            <div class="card-body">
              <h3 class="card-title">Forum Vodoo</h3>
              <blockquote>HTML/CSS</blockquote>
              <a href="view/projet/forum/index.html" class="btn btn-info" target="_blank">Voir</a>
            </div>
          </div>

          <div class="card" style="width: 32rem; border: 0.5px solid #FC5772; border-radius: 3%; padding: 2%">
            <img src="img/donjon.png" class="card-img-top img-responsive" alt="Jeu de role">
            <div class="card-body">
              <h3 class="card-title">Le donjon</h3>
              <blockquote>JS</blockquote>
              <a href="view/projet/jdr/jdr.html" class="btn btn-info" target="_blank">Voir</a>
            </div>
          </div>

          <div class="card" style="width: 32rem; border: 0.5px solid #FC5772; border-radius: 3%; padding: 2%">
            <img src="img/facture.png" class="card-img-top img-responsive" alt="Facture">
            <div class="card-body">
              <h3 class="card-title">Facture</h3>
              <blockquote>JS</blockquote>
              <a href="view/projet/facture/facture.html" class="btn btn-info" target="_blank">Voir</a>
            </div>
          </div>

          <div class="card" style="width: 32rem; border: 0.5px solid #FC5772; border-radius: 3%; padding: 2%">
            <img src="img/sapin.png" class="card-img-top img-responsive" alt="Sapin">
            <div class="card-body">
              <h3 class="card-title">Sapin</h3>
              <blockquote>JS</blockquote>
              <a href="view/projet/sapin/index.html" class="btn btn-info" target="_blank">Voir</a>
            </div>
          </div>

          <div class="card" style="width: 32rem; border: 0.5px solid #FC5772; border-radius: 3%; padding: 2%">
            <img src="img/pois.png" class="card-img-top img-responsive" alt="Au pois Gourmand">
            <div class="card-body">
              <h3 class="card-title">Au Pois Gourmand</h3>
              <blockquote>PHP</blockquote>
              <a href="view/projet/atelier/atelier1.php" class="btn btn-info" target="_blank">Voir</a>
            </div>
          </div>

          <div class="card" style="width: 32rem; border: 0.5px solid #FC5772; border-radius: 3%; padding: 2%">
            <img src="img/crud.png" class="card-img-top img-responsive" alt="CRUD">
            <div class="card-body">
              <h3 class="card-title">CRUD</h3>
              <blockquote>POO</blockquote>
              <a href="view/projet/CRUD/index.php" class="btn btn-info" target="_blank">Voir</a>
            </div>
          </div>

          <div class="card" style="width: 32rem; border: 0.5px solid #FC5772; border-radius: 3%; padding: 2%">
            <img src="img/dn.jpg" class="card-img-top img-responsive" alt="CRUD">
            <div class="card-body">
              <h3 class="card-title">Déclics Nutrition</h3>
              <blockquote>POO</blockquote>
              <a href="view/projet/dn/view/index.php" class="btn btn-info" target="_blank">Voir</a>
            </div>
          </div>

          <br>
          <div class="clear"></div>
          <br>

          <span>See more on my <a href="https://github.com/JulieBuisson" target="_blank">GitHub <i class="fab fa-github"></i></a></span>

      </div>
    </div>
  </section>
  <!-- /Section: gallery -->


  <!-- Section: contact -->
  <section id="contact" class="home-section text-center">
    <div class="heading-contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-offset-2">

            <div class="section-heading">
              <h2>Get in touch with me.</h2>
              <p>My profil suits your project or idea ? Don't hesitate to contact me via this form !</p>
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
        </div>
      </div>

      <img src="img/type_10.png" alt="divider">

    </div>
  </section>
  <!-- /Section: contact -->

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-12">
          <a href="#">&copy; Julie Buisson MCX</a>
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
  <script src="js/nivo-lightbox.min.js"></script>
  <!-- Custom Theme JavaScript -->
  <script src="js/custom.js"></script>
  <script src="js/contactform.js"></script>

</body>

</html>