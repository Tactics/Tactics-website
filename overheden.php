<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    $PageTitle="Tactics bvba | Lokale Overheden";
    include('header.php');
    ?>
</head>
<body>
<?php
    include('menu.php');
?>

<!--Header Section-->
<section id="page-title">
    <div class="container">
        <div class="row">
            <div class="col-md-12 title-orange">
                <h2>Lokale overheden</h2>
            </div>
        </div>
    </div>
</section>
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


<!--Content Section-->
<section id="content">
    <div class="container">

        <div class="row margin-0">
            <div class="col-md-12">
                <h2 class="gray">Dienstverlening met een plus</h2>
            </div>
        </div>

        <div class="row margin-0">
            <div class="col-md-10">
                <p>
                    Tactics ontwikkelde een modulair platform, op maat van gemeenten en overheidsdiensten. Zo maakt u uw informatie toegankelijk via internet.
                    En ondersteunt u uw ambtenaren bij de uitvoering van hun taken. Meer voordelen:
                </p>
                <ul>
                    <li>U automatiseert uw administratie.</li>
                    <li>U verhoogt uw effici&euml;ntie.</li>
                    <li>U verbetert en versnelt uw procedures</li>
                    <li>U bespaart kosten.</li>
                    <li>U houdt uw burgers tevreden en up-to-date.</li>
                </ul>
                <p>
                    Laat u inspireren door <a class="container-link" href="casestudies.php">deze cases</a>.
                    Of neem <a class="container-link" href="contact.php">contact</a> met ons op om te brainstormen over uw idee&euml;n.
                </p>
            </div>
        </div><!-- End row -->

        <div class="row margin-0">
            <div class="col-md-12">
                <h2 class="gray">Vernuftige modules</h2>
            </div>
        </div>

        <div class="row margin-0">
            <div class="col-md-10">
                <p>
                    Tactics bouwt applicaties om &aacute;l uw bedrijfsprocessen te automatiseren.
                    Van optimaal klantbeheer, over digitale registratie, tot facturering en personeelplanning.
                    Een greep uit ons aanbod:
                </p>
                <ul>
                    <li>Algemeen</li>
                        <ul>
                            <li>customer relationship management (crm)</li>
                            <li>digitale formulieren, processen en dossiers</li>
                            <li>digitaal loket</li>
                        </ul>
                    <li>Domein cultuur/sport/jegud</li>
                        <ul>
                            <li>activiteiten en inschrijvingen</li>
                            <li>subsidies</li>
                            <li>uitleendiensten</li>
                            <li>verhuur van infrastructuur</li>
                        </ul>
                    <li>Domein kinderopvang</li>
                        <ul>
                            <li>voor- en buitenschoolse kinderopvang</li>
                            <li>onderwijs</li>
                        </ul>
                    <li>Domein human resources</li>
                        <ul>
                            <li>e-recruitment</li>
                            <li>loonsimulatie</li>
                            <li>personeelsplanning</li>
                        </ul>
                    <li>Domein financ&euml;n</li>
                        <ul>
                            <li>facturering</li>
                            <li>betalingsfollow-up</li>
                            <li>kassasyteem</li>
                        </ul>
                    <li>Technische modules</li>
                        <ul>
                            <li>koppelingen met eID en KBO</li>
                            <li>webservices</li>
                            <li>single sign-on-oplossingen</li>
                        </ul>
                </ul>
                <p>
                    Andere modules nodig? <a class="container-link" href="contact.php">Bespreek uw wensen</a> met onze consultants.
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