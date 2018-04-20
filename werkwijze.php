<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    $PageTitle="Tactics bvba | Werkwijze";
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
            <div class="col-md-12 title-red">
                <h2>Werkwijze</h2>
            </div>
        </div>
    </div>
</section>
<section id="orange-container">
    <div class="container">
        <div class="row">
            <div class="col-md-10 margin-10">
                <p class="white">
                    Tactics geeft vorm aan uw ideeën. Met een combinatie van formele, beproefde methodes en een flexibele houding.
                    Het eerste garandeert een duidelijke en transparante werkwijze; het tweede laat ons toe snel in te spelen op wijzigingen.
                    Een typisch softwaretraject bestaat uit vier fasen:<br /><br />
                    <ol class="white">
                        <li><a class="container-link" href="werkwijze.php#kennismaking">kennismaking</a></li>
                        <li><a class="container-link" href="werkwijze.php#ontwikkeling">ontwikkeling</a></li>
                        <li><a class="container-link" href="werkwijze.php#oplevering">oplevering</a></li>
                        <li><a class="container-link" href="werkwijze.php#evaluatie">evaluatie en nazorg</a></li>
                    </ol>
                </p>
            </div>

        </div>
    </div>
</section>


<!--Content Section-->
<section id="content">
    <div class="container">

        <div class="row margin-0">
            <div class="col-md-6 margin-50">
                <div class="col-md-12 margin-20 text-center">
                    <h2><span class="dark-gray">1. Kennismaking</span></h2>
                </div>
                <p>
                    U kent uw business door en door. Wij nemen ruim de tijd om uw bedrijf en procedures te doorgronden via gesprekken met alle betrokkenen.
                    Zo analyseren we uw problematiek. En bepalen we de nodige functionaliteiten.
                    We kijken ook verder dan onze neus lang is: we nemen uw procedures, sector en concurrenten onder de loep.
                    Zodra u onze analyse goedkeurt, start de ontwikkelingsfase.
                </p>

            </div>

            <div class="col-md-6">
                <div class="col-md-12 margin-20 text-center">
                    <h2><span class="dark-gray">2. Ontwikkeling</span></h2>
                </div>
                <p>
                    Uw betrokkenheid tijdens de ontwikkeling is van cruciaal belang om een geslaagd eindproduct op te leveren.
                    Daarom stellen we testgebruikers aan. Deze ‘proefkonijnen’ evalueren de ontwikkelde functies in de acceptatieomgeving – een interactief prototype.
                    Ze noteren opmerkingen en suggesties in het bug tracking-systeem. Zo voldoet uw applicatie geheid aan uw gebruikerswensen.
                </p>
            </div>
        </div><!--End Row-->


        <div class="row margin-0">
            <div class="col-md-6 margin-50">
                <div class="col-md-12 margin-20 text-center">
                    <h2><span class="dark-gray">3. Oplevering</span></h2>
                </div>
                <p>
                    U kent uw business door en door. Wij nemen ruim de tijd om uw bedrijf en procedures te doorgronden via gesprekken met alle betrokkenen.
                    Zo analyseren we uw problematiek. En bepalen we de nodige functionaliteiten.
                    We kijken ook verder dan onze neus lang is: we nemen uw procedures, sector en concurrenten onder de loep.
                    Zodra u onze analyse goedkeurt, start de ontwikkelingsfase.
                </p>

            </div>

            <div class="col-md-6">
                <div class="col-md-12 margin-20 text-center">
                    <h2><span class="dark-gray">4. Evaluatie en nazorg</span></h2>
                </div>
                <p>
                    Uw betrokkenheid tijdens de ontwikkeling is van cruciaal belang om een geslaagd eindproduct op te leveren.
                    Daarom stellen we testgebruikers aan. Deze ‘proefkonijnen’ evalueren de ontwikkelde functies in de acceptatieomgeving – een interactief prototype.
                    Ze noteren opmerkingen en suggesties in het bug tracking-systeem. Zo voldoet uw applicatie geheid aan uw gebruikerswensen.
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