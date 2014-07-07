<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        $PageTitle="Tactics bvba | Case studies";
        include('header.php');
    ?>
</head>
<body class="casestudies">
    <?php
        include('menu.php');
    ?>
    
    <!--Header Section-->
<section id="page-title">
  <div class="container">
    <div class="row">
      <div class="col-md-12 title-white">
        <h2>Case studies</h2>
      </div>
    </div>
  </div>
</section>
<!--    <section id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            
            &lt;!&ndash;BxSlider&ndash;&gt;
              <ul class="bxslider">
                <li>
                  <img src="img/main_photo_2.jpg" alt="Webapplicaties" />
                  <div class="row text-center">
                    <div class="col-sm-10 col-sm-offset-1">
                    <h1><span class="mainCaption">Webapplicaties</span><br/><br/><span class="subCaption">Op maat naar eigen wens</span></h1><br />
                    <a class="btn-main" href="about.php">Learn More</a>
                    </div>
                  </div>
                </li>
                &lt;!&ndash;&ndash;&gt;
                &lt;!&ndash;<li>&ndash;&gt;
                  &lt;!&ndash;<img src="img/main_photo.png" alt="Title" />&ndash;&gt;
                  &lt;!&ndash;<div class="row text-center">&ndash;&gt;
                    &lt;!&ndash;<div class="col-sm-10 col-sm-offset-1">&ndash;&gt;
                    &lt;!&ndash;<h1><span class="mainCaption">Built to look good on all devices.</span><br/><br/><span class="subCaption">Resize your browser to take a look for yourself.</span></h1><br />&ndash;&gt;
                    &lt;!&ndash;<a class="btn-main" href="about.php">Learn More</a>&ndash;&gt;
                    &lt;!&ndash;</div>&ndash;&gt;
                  &lt;!&ndash;</div>&ndash;&gt;
                &lt;!&ndash;</li>&ndash;&gt;
              </ul>
          
          </div>&lt;!&ndash;End Span12&ndash;&gt;
        </div>
      </div>
    </section>-->

    <!-- Start nieuwe app -->
    <!--<div id="nieuweApp">
      <p><span class="orange">Start nu</span> met uw nieuwe webapplicatie ! <a href="#" class="button">Klik hier</a></p>
    </div>-->

    <!--Home Content-->
    <!--<section id="home-content">-->
      <!--<div class="container">-->
        <!--<div class="row">-->
          <!---->
          <!--&lt;!&ndash;Section 1&ndash;&gt;-->

          <!---->
          <!---->
        <!--</div>-->
      <!--</div>-->
    <!--</section>-->
    
    
    <!--Content Section-->
    <section id="content">
      <div class="container">

       <div class="row margin-0">
          <div class="col-md-pull-0">
            <p>
              Binnenkort krijgt u hier enkele van onze case studies te zien.
            </p>
          </div>
        </div><!--End Row-->
        
      </div>
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
    <!--BxSlider - Animation options (horizontal, vertical, or fade) For full list of options check out www.bxslider.com -->
    <script>
    $(document).ready(function(){
            $('.bxslider').bxSlider({
              mode: 'fade',
              auto: true,
              pause: 4000,
              autoHover: false,
              touchEnabled: true,
              adaptiveHeight: false,
              autoControls: false
            }); 
    });    
    </script>
    </body>
</html>