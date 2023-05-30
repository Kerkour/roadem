git<?php include('fb.php');
?>

<!DOCTYPE html>
<html lang="fr">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

    <title>Roadem</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/cssprincipale.css">
    <link rel="stylesheet" href="assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <script src="script1.js" defer></script>
<!--

TemplateMo 565 Onix Digital

https://templatemo.com/tm-565-onix-digital

-->
  </head>
<body>
  <!-- <div>
    <a href="indeex.php?lang=fr">FR</a>
    <a href="indeex.php?lang=en">EN</a>
    <a href="indeex.php?lang=ar">AR</a> 
  </div> -->

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.html" class="logo">
              <img class="imge" src="assets/images/3.png">
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="#top" class="active"><?php echo $lang['15'];?></a></li>

              <li class="scroll-to-section"><a href="#about"> <?php echo $lang['one'];?></a></li>
              <li class="scroll-to-section"><a href="#porfolio">forums</a></li>
              <li class="scroll-to-section"><a href="#partenaires"><?php echo $lang['three'];?></a></li> 
              <li class="scroll-to-section"><a href="#contact"><?php echo $lang['for'];?> </a></li> 
 

              <li class="scroll-to-section"><div class="main-red-button-hover"><a href="nouveau.php"><?php echo $lang['9'];?></a></div></li> 
            </ul>        
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
    <!-- <div class="language-switcher">
  <button class="btn-fr"><a href="indeex.php?lang=fr">fr</a></button>
  <button class="btn-en"><a href="indeex.php?lang=en">en</a></button>
</div> -->
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="main-banner" id="top">
    
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="owl-carousel owl-banner">
                <div class="item header-text">
                  <!-- <h6>Welcome to Roadem</h6> -->
                  
<img src="assets/images/3.png" class="a">
                  <p class="b">
<strong><?php echo $lang['10'];?>  <span style="color: rgb(195, 6, 6);"><?php echo $lang['11'];?></span> <?php echo $lang['12'];?></strong></p>
                </div>
                <div class="item header-text">
                  <h2><?php echo $lang['13'];?> <em style="color: rgb(202, 17, 17);"> <?php echo $lang['14'];?></em> <span></span></h2>
                  <div class="down-buttons">
                    <div class="main-blue-button-hover">
                      <a href="#sales"><?php echo $lang['five'];?></a>
                    </div>
                    <div class="call-button">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="about container" id="about">
    <div class="about-img">
        <img src="assets/images/side2.png" alt="">
    </div>
    <div class="about-text">
        <span><?php echo $lang['six'];?></span>
        
        <h2><?php echo $lang['seven'];?></h2>
      <p> <?php echo $lang['two'];?></p>
        <a href="#" class="btn"><?php echo $lang['8'];?></a>
    </div>
  </section>
  
  <div id="porfolio" class="our-portfolio section">
    <div class="portfolio-left-dec">
      <!-- <img src="assets/images/portfolio-left-dec.png" alt=""> -->
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading" id="porfolio">
            <br><br><br><br><br><br>
            <h2> <em>Forums</em> &amp; derniers postes de la <span style="color:rgb(195, 6, 6)";> Roadem</span></h2>
          <!-- <br>  <span>p</span> -->
          </div>
        </div>
      </div>
    </div>
  <section class="sales containere" >
        
    <div class="box">
        <i class='bx bx-user'></i>
        <h3>Emplois</i></h3>
        <p>Ce forum concerne toutes les annonces d’emplois CDI & CDD, de postes, de thèses, de post-doc... </p>
    </div>
    <div class="box">
        <i class='bx bx-desktop'></i>
        <h3>Conf. / Articles</h3>
        <p>Ce forum concerne les conférences, séminaires, workshops, thèses, groupes de travail, livres.

</p>
    </div>
    <div class="box">
        <i class='bx bx-home-alt'></i>
        <h3>Stages</h3>
        <p>Ce forum concerne uniquement les annonces de stages en Recherche Opérationnelle et Aide à la Décision

</p>
    </div>
</section>


 <div class="container">
    <div class="row">
      <div class="col-lg-6 offset-lg-3">
        <div class="section-heading" id="partenaires">
          <br><br><br>
          <h2>les <em>partenaires</em> &amp; l'equipe de la<span style="color:rgb(195, 6, 6)";> Roadem</span></h2>
          <br><br>
        <!-- <br>  <span>p</span> -->
        </div>
      </div>
    </div>
 <div class="wrapper" id="partenaires">
    <i id="left" class="fa-solid fa-angle-left"></i>
    <div class="carousel">
      <img src="assets/images/4.jpg" alt="img" draggable="false"> 
      <img src="assets/images/4.jpg" alt="img" draggable="false">
      <img src="assets/images/4.jpg" alt="img" draggable="false">
      <img src="assets/images/4.jpg" alt="img" draggable="false">
      <img src="assets/images/4.jpg" alt="img" draggable="false">
      <img src="assets/images/4.jpg" alt="img" draggable="false">
      <img src="assets/images/4.jpg" alt="img" draggable="false">
      <img src="assets/images/4.jpg" alt="img" draggable="false">
      <img src="assets/images/4.jpg" alt="img" draggable="false">
    </div>
    <i id="right" class="fa-solid fa-angle-right"></i>
  </div>
  <br>
 <section class="contact-us" id="#contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 align-self-center">
          <div class="row">
            <div class="col-lg-12">
              <form id="contact" action="" method="post">
                <div class="row">
                  <div class="col-lg-12">
                    <h2>contactez-nous</h2>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                      <input class="m" name="name" type="text" id="name" placeholder="YOURNAME...*" required="">
                    </fieldset>
                    <fieldset>
                        <input class="n" name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="YOUR EMAIL..." required="">
                      </fieldset>
                      <fieldset>
                        <input class="o" name="subject" type="text" id="subject" placeholder="SUBJECT...*" required="">
                      </fieldset>
                      <fieldset>
                        <textarea name="message" type="text" class="form-control" id="message" placeholder="YOUR MESSAGE..." required=""></textarea>
                      </fieldset>
                  </div>
                 
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="button">envoyez le message</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- <div class="col-lg-3">
          <div class="right-info">
            <ul>
              <li>
                <h6>Phone Number</h6>
                <span>010-020-0340</span>
              </li>
              <li>
                <h6>Email Address</h6>
                <span>info@meeting.edu</span>
              </li>
              <li>
                <h6>Street Address</h6>
                <span>Rio de Janeiro - RJ, 22795-008, Brazil</span>
              </li>
              <li>
                <h6>Website URL</h6>
                <span>www.meeting.edu</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    -->
  </section>
  <!-- Scripts -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/animation.js"></script>
  <script src="assets/js/imagesloaded.js"></script>
  <script src="assets/js/custom.js"></script>

  <script>
  // Acc
    $(document).on("click", ".naccs .menu div", function() {
      var numberIndex = $(this).index();

      if (!$(this).is("active")) {
          $(".naccs .menu div").removeClass("active");
          $(".naccs ul li").removeClass("active");

          $(this).addClass("active");
          $(".naccs ul").find("li:eq(" + numberIndex + ")").addClass("active");

          var listItemHeight = $(".naccs ul")
            .find("li:eq(" + numberIndex + ")")
            .innerHeight();
          $(".naccs ul").height(listItemHeight + "px");
        }
    });
  </script>
   <script src="script.js"></script>
   <!-- code HTML du widget de traduction Google -->
   <div id="google_translate_element"></div>
    <script type="text/javascript">
      function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: 'fr', includedLanguages: 'en,es,ar'}, 'google_translate_element');
      }
    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <!-- fin du code HTML du widget de traduction Google -->
    
</body>
</html>