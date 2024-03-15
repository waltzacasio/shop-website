<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    
    <!--Import Google Icon Font-->
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
    <!-- Compiled and minified CSS -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css"
    />
    <title>Document</title>
    <style>

      body {
        font-family: 'Roboto', sans-serif;
      }

      .carousel.carousel-slider {
        max-height: 500px;
      }

      #pisowifi-image {
        /* min-height: fit-content; */
        max-height: 400px;
      }

      #gsat-image {
        /* min-height: fit-content; */
        max-height: 330px;
      }

      section {
        margin: 0.75rem 0rem; /* Adjust the padding value according to your design */
      }
      
      #wifivendo {
        margin-top: 0px;
      }

      h2 {
        font-size: 3.5rem;
      }

      p {
        font-size: 1.5rem;
      }

      .tv-image {
        max-height: 30px;
      }

      #nba-image {
        max-height: 40px;
      }



      @media screen and (max-width: 402px) {
        #navtext {
          font-size: 1.3rem;
          margin-top: 5px

        }      
      }

      @media screen and (max-width: 270px) {
        #navtext {
          font-size: 1rem;
          margin-top: 5px
        }
      }

    </style>
  </head>
  <body>
    <header>  
      <div class="navbar-fixed">
        <nav class="nav-wrapper white">
            <div class="container">
              <a href="#" class="brand-logo black-text" id="navtext"><b>WDM</b><img src="img/tv.png" class="tv-image"><b>.Shop</b></a>
                <a href="#" class="sidenav-trigger" data-target="mobile-menu"><i class="material-icons"><span class="black-text">menu</span></i></a>
              <ul class="right hide-on-med-and-down black-text">
                <li><a href="#products"><span class="black-text"><b>Products</b></span></a></li>
                <li><a href="#wifivendo"><span class="black-text"><b>WiFi Vendo</b></span></a></li>
                <li><a href="#contact"><span class="black-text"><b>Contact</b></span></a></li>
              </ul>
            </div>
        </nav>
      </div>
            <div>
              <ul class="sidenav white" id="mobile-menu">
                <li><a href="#products"><b>Products</b></a></li>
                <li><a href="#wifivendo"><b>WiFi Vendo</b></a></li>
                <li><a href="#contact"><b>Contact</b></a></li>
              </ul>
            </div>
    </header>

    <section class="section">
      <div class="container center-align"><a href="#contact">Contact us</a> to order online.</div>
    </section>

    <!-- <div class="carousel carousel-slider"> -->
      <!-- <div class="carousel-fixed-item center">
        <a class="btn waves-effect white grey-text darken-text-2">button</a>
      </div> -->
      <!-- <div class="carousel-item">
        <img src="img/landscape.jpg" alt="" class="responsive-img" />
      </div>
      <div class="carousel-item">
        <img src="img/sunset.jpg" alt="" class="responsive-img" />
      </div>
    </div> -->

<!-- gsat -->
    <section class="section green lighten-1" id="products">
      <div class="container">
        <!-- desktop view -->
        <div class="row section valign-wrapper  hide-on-small-only">
          <div class="col s12 l6 left-align">
            <img src="img/gsat.png" alt="" class="responsive-img" id="gsat-image">
          </div>
          <div class="col s12 l6 center-align">
              <h2 class="black-text text-darken-4"><b>GSAT HD & GPINOY</b></h2>
              <ul class="collapsible popout">
                <li>
                  <div class="collapsible-header green darken-1"><i class="material-icons"><b>arrow_forward</b></i><span><b>Learn More</b></span></div>
                  <div class="collapsible-body"><span  class="flow-text">₱120 only per month for 56 channels.</span></div>
                </li>
              </ul>
          </div>
        </div>
        
        <!-- mobile view -->
        <div class="row hide-on-med-and-up">
          <div class="col s12 m6 center-align">
            <h3 class="black-text text-darken-4"><b>GSAT HD & GPINOY</b></h3>
            <img src="img/gsat.png" alt="" class="responsive-img" id="gsat-image">
            <ul class="collapsible popout">
              <li>
                <div class="collapsible-header green darken-1"><i class="material-icons"><b>arrow_forward</b></i><span><b>Learn More</b></span></div>
                <div class="collapsible-body"><span class="flow-text">₱120 only per month for 56 channels.</span></div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

<!-- cignal -->
    <section class="section white">
      <div class="container">
        <!-- desktop view -->
        <div class="row section valign-wrapper  hide-on-small-only">
          <div class="col s12 l6 center-align">
            <h2 class="black-text text-darken-4"><b>CIGNAL HD</b></h2>
            <ul class="collapsible popout">
              <li>
                <div class="collapsible-header red darken-1"><i class="material-icons white-text"><b>arrow_forward</b></i><span class="white-text"><b>Learn More</b></span></div>
                <div class="collapsible-body"><span  class="flow-text"><img src="img/nba.png" id="nba-image"> available at ₱320 per month.</span></div>
              </li>
            </ul>
          </div>
          <div class="col s12 l6 center-align">
            <img src="img/cignal.png" alt="" class="responsive-img" id="gsat-image">
          </div>
        </div>
        
        <!-- mobile view -->
        <div class="row hide-on-med-and-up">
          <div class="col s12 m6 center-align">
            <h3 class="black-text text-darken-4"><b>CIGNAL HD</b></h3>
            <img src="img/cignal.png" alt="" class="responsive-img" id="gsat-image">
            <ul class="collapsible popout">
              <li>
                <div class="collapsible-header red darken-1"><i class="material-icons white-text"><b>arrow_forward</b></i><span class="white-text"><b>Learn More</b></span></div>
                <div class="collapsible-body"><span class="flow-text"><img src="img/nba.png" id="nba-image"> available at ₱320 per month.</span></div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

<!-- satlite -->
    <section class="section orange lighten-1">
      <div class="container">
        <!-- desktop view -->
        <div class="row section valign-wrapper  hide-on-small-only">
          <div class="col s12 l6 left-align">
            <img src="img/satlite.png" alt="" class="responsive-img" id="gsat-image">
          </div>
          <div class="col s12 l6 center-align">
            <h2 class="black-text text-darken-4"><b>SATLITE TV</b></h2>
            <ul class="collapsible popout">
              <li>
                <div class="collapsible-header orange darken-1"><i class="material-icons"><b>arrow_forward</b></i><span><b>Learn More</b></span></div>
                <div class="collapsible-body"><span  class="flow-text">Pinakabagong nationwide prepaid digital pay TV service powered by Cignal.</span></div>
              </li>
            </ul>
          </div>
        </div>
        
        <!-- mobile view -->
        <div class="row hide-on-med-and-up">
          <div class="col s12 m6 center-align">
            <h3 class="black-text text-darken-4"><b>SATLITE TV</b></h3>
            <img src="img/satlite.png" alt="" class="responsive-img" id="gsat-image">
            <ul class="collapsible popout">
              <li>
                <div class="collapsible-header orange darken-1"><i class="material-icons"><b>arrow_forward</b></i><span><b>Learn More</b></span></div>
                <div class="collapsible-body"><span class="flow-text">Pinakabagong nationwide prepaid digital pay TV service powered by Cignal.</span></div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

<!-- piso wifi -->
    <section class="section" id="wifivendo">
      <div class="container">
        <!-- desktop view -->
        <div class="row section valign-wrapper  hide-on-small-only">
          <div class="col s12 l6 center-align">
              <h2 class="black-text text-darken-4"><b>START YOUR PISO WIFI BUSINESS</b></h2>
              <ul class="collapsible popout">
                <li>
                  <div class="collapsible-header"><i class="material-icons"><b>arrow_forward</b></i><span><b>Learn More</b></span></div>
                  <div class="collapsible-body"><span  class="flow-text">Plug & play! VLAN ready, anti-lag feature w/ immediate tech-support. We are an <a href="https://www.adopisoft.com/users/7836">Official Adopisoft Piso Wifi Distributor</a>.</span></div>
                </li>
              </ul>
          </div>
          <div class="col s12 l6 center-align">
            <img src="img/pisowifi.jpg" alt="" class="responsive-img" id="pisowifi-image">
          </div>
        </div>
        
        <!-- mobile view -->
        <div class="row hide-on-med-and-up">
          <div class="col s12 m6 center-align">
            <h3 class="black-text text-darken-4"><b>START YOUR PISO WIFI BUSINESS</b></h3>
            <img src="img/pisowifi.jpg" alt="" class="responsive-img" id="pisowifi-image">
            <ul class="collapsible popout">
              <li>
                <div class="collapsible-header"><i class="material-icons"><b>arrow_forward</b></i><span><b>Learn More</b></span></div>
                <div class="collapsible-body"><span class="flow-text">Plug & play! VLAN ready, anti-lag feature w/ immediate tech-support. We are an <a href="https://www.adopisoft.com/users/7836">Official Adopisoft Piso Wifi Distributor</a>.</span></div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

      <!-- contact form -->
  <!-- mobile -->
  <section class="section scrollspy z-depth-3" id="contact">
    <div class="row container hide-on-med-and-up">
          <div class="col s12 l5 center-align">
            <h2 class="black-text text-darken-4"><b>Contact Us</b></h2>
            <p>Let us know which product would you like to avail.</p>
          </div>
        <div class="col s12 l5 offset-l2">
            <div class="center-align">
              <a class="waves-effect waves-light btn black" href="http://m.me/waltersdigitalmerchandise" target="_blank" id="messenger-text"><i class="material-icons left">send</i>Messenger</a>
            </div>
        </div>
    </div>
    <!-- desktop -->
    <div class="row container valign-wrapper  hide-on-small-only">
          <div class="col s12 l5 center-align">
            <h2 class="black-text text-darken-4"><b>Contact Us</b></h2>
            <p>Let us know which product would you like to avail.</p>
          </div>
        <div class="col s12 l5 offset-l2">
            <div class="center-align">
              <a class="waves-effect waves-light btn black" href="http://m.me/waltersdigitalmerchandise" target="_blank" id="messenger-text"><i class="material-icons left">send</i>Messenger</a>
            </div>
        </div>
    </div>
  </section>

  <!-- footer -->
  <footer class="page-footer grey darken-4">
    <div class="footer-copyright grey darken-4">
      <div class="container center-align">&copy; <?= date('Y'); ?> Walter's Digital Merchandise</div>
    </div>
  </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
    <script>
      $(document).ready(function () {
        $('.sidenav').sidenav();
        $(".carousel.carousel-slider").carousel({
          fullWidth: true,
          indicators: true,
        });
        $('.collapsible').collapsible();
        $('.tap-target').tapTarget();
      });
    </script>
  </body>
</html>
