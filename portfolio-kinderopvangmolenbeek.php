<!DOCTYPE html>
<html lang="en">
<?php
$PageTitle = "Tactics bvba | Kinderopvang Antwerpen";
include('header.php');
?>
<body class="projecten">
<?php
include('menu.php');
?>

<!--Page Title-->
<section id="page-title">
    <div class="container">
        <div class="row">
            <div class="col-md-12 title-orange">
                <h2>Kinderopvang De Molenketjes</h2>
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
                    Voor De Molenketjes ontwikkelden we een centraal aanmeldingsregister voor alle opvangvragen voor
                    buitenschoolse opvang.
                    <br/>
                    Een aantal modules die werden voorzien ter ondersteuning van deze diensten :
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
            <div class="row">
                <div class="bxslider">
                    <div><img src="img/Molenketjes_1.jpg"></div>
                    <div><img src="img/Molenketjes_2.jpg"></div>
                </div>
            </div>
            <div class="col-md-10">
                <h2 class="dark-gray">Links</h2>
                <ul>
                    <li>
                        <a class="content-link" href="https://opvang.demolenketjes.be/" target="_blank">
                            Kinderopvang de Molenketjes
                        </a>
                    </li>
                </ul>
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