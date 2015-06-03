<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    $PageTitle="Tactics bvba | Kinderopvang live";
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
            <div class="col-md-12 title-white">
                <h2>Loket kinderopvang wint Gouden Kinderschoen 2015</h2>
            </div>
        </div>
    </div>
</section>

<!--Content Section-->
<section id="content">
    <div class="container">

        <div class="row margin-0">
            <div class="col-md-12">
                <div class="col-md-10 margin-20">
                <p>
                Het Leuvense digitale loket kinderopvang werd genomineerd voor de gouden kinderschoen van de VVSG (de belangenbehartiger van de Vlaamse Steden en Gemeenten) binnen de categorie "beleid" konden we, uit handen van minister van Welzijn Jo Vandeurzen, de schoen in ontvangst nemen. Het is een verhaal van vele hoofdstukken, een verhaal van spanning en ontlading, maar bovenal een verhaal waar de kracht van samenwerking voorop staat: een gemeenschappelijk doel dat eenieders eigenheid (h)erkent. Het is een sterk verhaal gebleken, een verhaal dat doorgaat als voorbeeld waar iedereen, terecht, fier op mag zijn.
                </p>

                <p>
                Wij willen vooral de trekkers, pioniers en het unieke samenwerkingsverband van de Leuvense kinderdagverblijven in Leuven (Centrum voor kinderopvang Leuven) bedanken. Het is dankzij hun inzet en aanvoelen van gemeenschappelijke noden en belangen dat het systeem op deze uitzonderlijke wijze is tot stand gekomen.
                </p>
                </div>

                <img src="img/kinderopvangleuven.jpg" class="col-md-2 img-responsive"/>
            </div>
        </div>

        <div class="row">
            <div class="col-md-10">
                <div class="col-md-10">
                    <h2 class="dark-gray">Links</h2>
                    <ul>
                        <li><a class="content-link"
                               href="https://www.kinderopvangleuven.be/"
                               target="_blank">Kinderopvang Leuven</a></li>
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
        $('a.navbar').click(function(){
            $('a.navbar').removeClass("active");
            $(this).addClass("active");
        });
    });
</script>
</body>
</html>