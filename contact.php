<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        $PageTitle="Tactics bvba | Contact";
        include('header.php');
    ?>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true&libraries=places"></script>
    <script src="js/maps.js"></script>
    <link rel="stylesheet" href="css/maps.css">
</head>
<body class="contact">
    <?php
        include('menu.php');
    ?>
  
  <!--Page Title-->
  <section id="page-title">
    <div class="container">
      <div class="row">
        <div class="col-md-12 title-red">
          <h2>Contacteer ons</h2>
        </div>
      </div>
    </div>
  </section>
  
  
  <!--Content Section-->
  <section id="content">
    <div class="container">
      
      <div class="row">
        <div class="col-md-12">
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
            <p><button class="btn-main right" type="submit">Send Message</button></p>
          </form>
        </div><!--End Span8-->
      </div><!--End Row-->   
    </div>
  </section>

  <!--Map Section-->
    <section id="map">
    </section>

<!--Bottom Section-->
<?php
    include('footer.php');
?>
    <!-- Javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <?php
        include('scripts.php');
    ?>
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