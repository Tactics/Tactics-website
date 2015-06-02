<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        $PageTitle="Tactics bvba | Home";
        include('header.php');
    ?>
</head>
<body class="home">
    <?php
        include('menu.php');
    ?>

<!--Header Section-->
<section id="page-title">
    <div class="container">
        <div class="row">
            <div class="col-md-12 title-orange">
                <h2>Onze hoofdactiviteiten</h2>
            </div>
        </div>
    </div>
</section>

<!--Home Content-->
<section id="home-content">
    <div class="container">
        <div class="row">

            <!--Section 1-->
            <div class="col-md-4 text-center home-box" data-url="webapplicaties.php">
                <i class="fa fa-desktop fa-4x"></i>
                <h3>Applicaties</h3>
                <p>
                    Tactics ontwikkelt <a class="container-link" href="webapplicaties.php#maatwerk">(web)applicaties op maat</a>, die uw bedrijfsactiviteiten <a class="container-link" href="webapplicaties.php#vereenvoudigen">vereenvoudigen</a> en stroomlijnen.
                    En het takenpakket van uw gebruikers verlichten door functies te automatiseren.
                    We benutten daarbij maximaal de <a class="container-link" href="webapplicaties.php#voordelen">voordelen en vrijheden</a> van het internet. En omarmen de <a class="container-link" href="webapplicaties.php#technologie">nieuwste technologie&euml;n</a>.
                    Want als wij mee zijn, bent &ugrave; dat ook!<br />
                    <a class="container-link" href="contact.php">Waarmee zijn we &ugrave; van dienst?</a>
                </p>
            </div>

            <!--Section 2-->
                <div class="col-md-4 text-center home-box" data-url="overheden.php">
                    <i class="fa fa-university fa-4x"></i>
                    <h3>Lokale overheden</h3>
                    <p>
                        Bij uw dienstverlening aan de burger komt een berg administratie kijken - tijd die u beter spendeert aan uw service.
                        Doe uw voordeel met de slimme webapplicaties van Tactics. Zo automatiseert u uw administratieve handelingen, werkt u
                        effici&euml;nter en houdt u uw burgers up-to-date<br />
                        <a class="container-link" href="overheden.php">Verbeter uw dienstverlening</a>
                    </p>
                </div>

            <!--Section 3-->
                <div class="col-md-4 text-center home-box" data-url="cms.php">
                    <i class="fa fa-cogs fa-4x"></i>
                    <h3>Content Management Systemen</h3>
                    <p>
                        Droomt u van een eigen webshop of een dynamische website die u gemakkelijk zélf beheert? Dan zet Tactics uw droom om in realiteit.
                        Met flexibele en gebruiksvriendelijke contentmanagementsystemen (cms) die voldoen aan ál uw eisen.
                        En waarmee u snel, veilig en eenvoudig uw aanwezigheid op het internet optimaliseert.<br />
                        <a class="container-link" href="cms.php">Zet uw bedrijf op de digitale kaart</a>
                    </p>
                </div>

        </div>
    </div>
</section>


<!--Content Section-->
<section id="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="dark-gray">Welkom bij Tactics</h1>
            </div>
        </div>

        <div class="row col-md-12">
            <div class="col-md-6">
                <h2 class="gray">Dit doen wij voor u</h2>
                <ul>
                    <li>Tactics ontwikkelt webtoepassingen, groot en klein, op maat;</li>
                    <li>geeft uw bedrijf een volwaardige plek op het web met websites met karakter;</li>
                    <li>beheert uw digitaal verkeer: e-mail, hosting, domeinregistraties;</li>
                    <li>beveiligt uw gegevens, met online backup.</li>
                </ul>
            </div>
        </div>

        <div class="row col-md-12">
            <div class="col-md-6">
                <h2 class="gray">Hoe we werken</h2>
                <ul>
                    <li>Met kennis van zaken.  En een vleugje passie voor de job.</li>
                    <li>Met visie op lange termijn.  We werken samen met u aan uw toekomst.</li>
                    <li>Met zorg voor mens en natuur.  Duurzaam ondernemen is het uitgangspunt.</li>
                    <li>Met moderne technologiën.  Wij zijn mee, u dus ook.</li>
                </ul>
            </div>
        </div>

        <div class="row col-md-12">
            <div class="col-md-6">
                <h2 class="gray">Gingen u reeds voor</h2>
                <ul>
                    <li>Stad Antwerpen: met onder andere applicaties voor kinderopvang en sport.</li>
                    <li>Stad Gent: Voorschoolse kinderopvang en buitenschoolse kinderopvang</li>
                    <li>Stad Leuven: Voorschoolse kinderopvang </li>
                    <li>K.U. Leuven, beheer van studentenstages</li>
                </ul>
                <p>
                    In ons <a class="content-link" href="projecten.php">portfolio</a> presenteren we nog meer klanten en de oplossingen die we met hen uitwerkten.
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 text-center margin-top-50">
                <a class="btn-main" href="contact.php">Contacteer Ons</a>
            </div>
        </div><!--End Row-->

    </div>
</section>

<!--Clients Section-->
<section id="clients">
    <div class="container">

        <div class="row clients text-center">

            <!--Insert Client Logos Below-->
            <div class="col-sm-3">
                <img src="img/client_A.gif" alt="Antwerpen">
            </div>

            <div class="col-sm-3">
                <img src="img/client_H.gif" alt="Hivset">
            </div>

            <div class="col-sm-3">
                <img src="img/client_P.gif" alt="Pringles">
            </div>

            <div class="col-sm-3">
                <img src="img/client_L.gif" alt="Kinderopvang Leuven">
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

        $('.home-box').on('click', function() {
            window.location = $(this).data('url');
        })
    });
</script>

</body>
</html>