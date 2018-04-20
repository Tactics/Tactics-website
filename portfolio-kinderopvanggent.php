<!DOCTYPE html>
<html lang="en">
<?php
$PageTitle = "Tactics bvba | Kinderopvang Gent";
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
            <div class="col-md-12 title-red">
                <h2>Kinderopvang stad Gent</h2>
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
                    Voor de stad Gent ontwikkelden we in opdracht van Digipolis Gent een centraal aanmeldingsregister
                    voor alle opvangvragen voor voorschoolse opvang. Alle deelnemende verblijven (alle verblijven binnen
                    de stadsgrenzen) krijgen toegang tot hun deel van de wachtlijst en kunnen via een uitgebreide
                    planningsmodule opvangvragen beantwoorden.<br/>
                    <br/>
                    Na inschrijving van een kind kan ook de volledige dossieropvolging via het systeem gebeuren (t/m
                    registratie en facturatie). Deze dienst wordt aan alle deelnemende verblijven aangeboden.<br/>
                    <br/>
                    Hiernaast werd in 2014 tevens de opdracht gegeven om deze toepassing uit te breiden met modules ter
                    ondersteuning van de buitenschoolse kinderopvang. (in ontwikkeling)
                    <br/>

                </p>
            </div>
        </div>
    </div>
</section>


<!--Team Section-->
<section id="content">
    <div class="container">
        <div class="row">
            <div class="bxslider">
                <div><img src="img/Gent_1.jpg"></div>
                <div><img src="img/Gent_2.jpg"></div>
                <div><img src="img/Gent_3.jpg"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10">
                <h2 class="dark-gray">Links</h2>
                <p><a class="content-link" href="https://kinderopvang.stad.gent/" target="_blank">Kinderopvang Gent</a>
                </p>
                <p><a class="content-link" href="files/persbericht_kop.pdf" target="_blank">Persbericht</a></p>
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