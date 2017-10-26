<!DOCTYPE html>
<html lang="en">
<head>
  <?php
  $PageTitle = "Tactics bvba | Kinderopvang Aalst";
  include('header.php');
  ?>
</head>
<body class="projecten">
<?php
include('menu.php');
?>

<!--Page Title-->
<section id="page-title">
    <div class="container">
        <div class="row">
            <div class="col-md-12 title-orange">
                <h2>Kinderopvang stad Aalst</h2>
            </div>
        </div>
    </div>
</section>


<!--About Content-->
<section id="orange-container">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p class="white">
                    Voor de stad Aalst ontwikkelden we een centraal aanmeldingsregister voor alle opvangvragen voor
                    voorschoolse opvang.<br/>
                    Een aantal modules die werden voorzien ter ondersteuning van deze dienst:<br/>
                <ul class="white">
                    <li>Aanmeldplatform</li>
                    <li>Planningsysteem</li>
                    <li>Aanwezighedenregistratie</li>
                    <li>Facturatie</li>
                    <li>Communicatie</li>
                </ul>
                </p>
            </div>
        </div>
    </div>
</section>


<section id="content">
    <div class="container">
        <div class="row">
            <div class="bxslider">
                <div><img src="img/Aalst_1.jpg"></div>
                <div><img src="img/Aalst_2.jpg"></div>
                <div><img src="img/Aalst_3.jpg"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10">
                <div class="col-md-10">
                    <h2 class="dark-gray">Links</h2>
                    <p>Nog geen publieke link beschikbaar.</p>
                </div>
            </div>
        </div>
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
<script>
    $(function () {
        $('.bxslider').bxSlider({
            mode: 'fade',
            captions: true,
            slideWidth: 600
        });
    });
</script>
</body>
</html>