<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    $PageTitle="Tactics bvba | Case Studie Kinderdagverblijven Leuven";
    include('header.php');
    ?>
</head>
<body class="case-kinderopvangleuven">
    <?php
        include('menu.php');
    ?>

<!--Header Section-->

<section id="page-title">
    <div class="container">
        <div class="row">
            <div class="col-md-12 title-red">
                <h2>Kinderdagverblijven Leuven</h2>
                <p class="orange">
                    Aanmeldingsregister voor het Centraal Loket Kinderopvang om aanvragen te beheren voor buiten- en voorschoolse kinderopvang, en de opvang van zieke kinderen.                </p>
            </div>
        </div>
    </div>
</section>
<!--
<section id="orange-container">
    <div class="container">
        <div class="row">
            <div class="col-md-10 margin-10">
                <p class="white">
                    Wilt u uw webbezoeker m&eacute;&eacute;r bieden dan een onlineformuliertje om een vergunning aan te vragen? En tegelijk uw bedrijfsprocessen automatiseren om uw
                    workload te verminderen? Kies dan voor een slimme webapplicatie van Tactics.
                    Zo verandert u uw digitale dienstverlening van een zorgenkind in een <a class="container-link" href="casestudies.php">toonbeeld van effici&euml;ntie</a>!
                    Net als de gemeenten Antwerpen, Gent, Brugge en Leuven - zij leveren puike prestaties dankzij Tactics.
                </p>
            </div>

        </div>
    </div>
</section>
-->

<!--Content Section-->
<section id="content">
    <div class="container">

        <div class="row margin-0">
            <div class="col-md-12">
                <h2 class="gray">Vlekkeloos communiceren, registreren, monitoren</h2>
            </div>
        </div>

        <div class="row margin-0">
            <div class="col-md-10">
                <p>
                    Deelnemende verblijven in de stad Leuven hebben toegang tot hún deel van de wachtlijst.
                    Via een uitgebreide planningsmodule beantwoorden ze vlotjes (aan)vragen over opvang, volgen ze overzichtelijk dossiers, en registreren ze in een muisklik aanwezigheden.
                    Ze besparen ook veel tijd met de automatische opmaak van facturen en aflevering van fiscale attesten. Het mooiste van de applicatie? Ze is helemaal gratis!
                </p>
            </div>
        </div><!-- End row -->

        <div class="row margin-0">
            <div class="col-md-12">
                <h2 class="gray">Flexibel en toekomstgericht</h2>
            </div>
        </div>

        <div class="row margin-30">
            <div class="col-md-10">
                <p>
                    Tactics hield bij de ontwikkeling van de applicatie rekening met soepele integratiemogelijkheden.
                    Zo programmeerden we aangepaste koppelingen en exportmogelijkheden voor verblijven met afwijkende boekhoudpakketten.
                    En ook functionele wijzigingen verlopen gesmeerd.
                    Zo updateten we prompt de software van CLK in lijn met het <a class="content-link" href="http://www.kindengezin.be/kinderopvang/nieuw-decreet/">nieuwe decreet Kinderopvang</a>.
                </p>
            </div>
        </div><!-- End row -->


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