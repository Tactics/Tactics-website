<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        $PageTitle="Tactics bvba | Contact";
        include('header.php');
    ?>
</head>
<body class="contact">
    <?php
        include('menu.php');
    ?>
  
  <!--Page Title-->
  <section id="page-title">
    <div class="container">
      <div class="row">
        <div class="col-md-12 title-white">
          <h2>Contacteer ons</h2>
        </div>
      </div>
    </div>
  </section>
  
  
  <!--Content Section-->
  <section id="content">
    <div class="container">
      
      <div class="row">
        <div class="col-md-8">
          <?php
          if(isset($_GET['e']))
          {
            echo '<p class="error">' . $_GET['e'] . '</p>';
          }
          if(isset($_GET['s']))
          {
            echo '<p class="success">' . $_GET['s'] . '</p>';
          }
          ?>
          <form method="POST" action="contact-form-submission.php">
            <input type="text" class="col-xs-12" name="contact_name" placeholder="Naam">
            <input type="text" class="col-xs-12" name="contact_email" placeholder="Email">
            <input type="text" class="col-xs-12" name="contact_subject" placeholder="Onderwerp">
            <textarea class="col-xs-12" name="contact_message" placeholder="Bericht"></textarea>
            <input type="hidden" name="save" value="contact">
            <p><button class="btn-main" type="submit">Send Message</button></p>
          </form>
        </div><!--End Span8-->
        
        <div class="col-md-4">
          <p class="lead">Bedankt voor uw bezoek<p>
    				<p class="gray">Bedankt voor uw bezoek aan onze website. Voor vragen of opmerkingen kan u steeds het contact formulier invullen.</p>
        </div>
        
      </div><!--End Row-->   
    </div>
  </section> 
   

  
  <!--Map Section-->
    <section id="map">
    
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2494.415116080103!2d4.3966596!3d51.30348665!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c4099c48e7c675%3A0x89436e7fd15d0ff9!2sKerkstraat+115!5e0!3m2!1snl!2sbe!4v1392993420879"></iframe>
      
    </section>

    <!--Bottom Section-->
    <section id="bottom">
      <div class="container">
        <div class="row margin-40">
          <div class="col-md-10 col-md-offset-1 text-center">
            <p>Kerkstraat 115, 2940 Hoevenen | <i class="fa fa-phone-square"></i> +32 3 665 25 22 | fax +32 3 665 33 29  |  <a href="mailto:info@tactics.be"><i class="fa fa-envelope-o"></i> info@tactics.be</a></p>
            <hr>
          </div>
        </div>

        <div class="row">
          <div class="col-md-10 col-md-offset-1 text-center">
            <!--Social Icons-->
            <ul class="social-icons">
              <li><a class="twitter" href="https://twitter.com/TacticsBvba" target="_blank"><i class="fa fa-twitter fa-3x"></i></a></li>
              <li><a class="facebook" href="https://www.facebook.com/tacticsbvba" target="_blank"><i class="fa fa-facebook fa-3x"></i></a></li>
              <li><a class="linkedin" href="http://www.linkedin.com/profile/view?id=6133370&locale=en_US&trk=tyah&trkInfo=tas%3Atac%2Cidx%3A2-1-2" target="_blank"><i class="fa fa-linkedin fa-3x"></i></a></li>
              <li><a class="Github" href="https://github.com/Tactics" target="_blank"><i class="fa fa-github-alt fa-3x"></i></a></li>
            </ul>
          </div>
        </div>

      </div>
    </section>

    <section id="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <p>Tactics bvba</p>
          </div>
        </div>
      </div>
    </section>

    
    <!-- Javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.10.1.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <script src="js/classie.js"></script>
    <script src="js/cbpanimatedheader-min.js"></script>

<style>
 .error
 {
   font-weight:bold;
   color:#931a1a;
 }
 .success
 {
   font-weight:bold;
   color:#206a0f;
 }
</style>
    </body>
</html>