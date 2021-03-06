<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    $PageTitle="Tactics bvba | CMS";
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
                <h2>Content Management Systemen</h2>
            </div>
        </div>
    </div>
</section>
<section id="orange-container">
    <div class="container">
        <div class="row">
            <div class="col-md-10 margin-10">
                <p class="white">
                    Wilt u een website die meer is dan een virtueel visitekaartje? Of een webshop waarmee u uw producten of diensten online aan de man brengt?
                    Dan hebt u een cms nodig: een contentmanagementsysteem. In mensentaal: een stukje software &aacute;chter uw website, om zelf de inhoud te bewerken.
                    Zo wordt u baas over uw eigen webstek. En biedt u uw klanten een schitterende shopbeleving!<br />
                    <a class="container-link" href="contact.php">Tactics loodst u door uw e-commerceproject.</a>
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
                <h2 class="gray">Voordelen in vogelvlucht</h2>
            </div>
        </div>

        <div class="row margin-30">
            <div class="col-md-10">
                <p>
                    Tactics verkiest gebruiksvriendelijke contentmanagementsystemen als <a class="content-link" href="http://www.drupal.org/" target="_blank">Drupal</a>
                    en  <a class="content-link" href="http://www.magento.com/" target="_blank">Magento</a>.
                    Daarmee beheert u snel, live en eenvoudig uw webshop – zónder technische kennis. De belangrijkste voordelen:
                </p>
                <ul>
                    <li>U betaalt geen licentiekosten, want uw cms is een opensourcesysteem.</li>
                    <li>U geniet flexibiliteit: uw cms werkt op eenvoudige sites en complexe applicaties.</li>
                    <li>U hoeft de inhoud niet opnieuw in te voeren als uw ontwerp verandert: vormgeving en inhoud zijn gescheiden.</li>
                    <li>Uw lay-out blijft uniform omdat nieuwe pagina’s trouw zijn aan de vormgeving.</li>
                    <li>U bouwt zelf verder aan uw site, zonder experts – en dus zonder extra kosten.</li>
                    <li>U hebt alleen een internetverbinding nodig om uw site up-to-date te houden.</li>
                    <li>U beslist zelf wie toegang heeft. Zo beheren uw medewerkers alleen relevante secties.</li>
                    <li>Uw site is actueel: u reduceert de tijd tussen schrijven en publiceren.</li>
                    <li>Uw cms is SEO-vriendelijk: zoekmachines vinden uw site gemakkelijker.</li>
                    <li>Uw cms biedt talloze functies die u in- of uitschakelt, afhankelijk van de bezoekersrechten.</li>
                    <li>U breidt uw systeem gemakkelijk uit met nieuwe applicaties. Of u integreert het met bestaande toepassingen.</li>
                </ul>
                <p>
                    <a class="content-link" href="contact.php">Profiteer n&uacute;</a> van een gebruiksvriendelijk en multifunctioneel cms.
                    Tactics bouwt uw cms en het raamwerk eromheen, &uacute; focust op uw business.
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