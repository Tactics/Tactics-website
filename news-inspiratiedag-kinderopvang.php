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
                <h2>Inspiratiedag kinderopvang</h2>
                <p class="orange">
                    Tactics bvba was aanwezig als hoofdpartner op de inspiratiedag kinderopvang georganiseerd door de VVSG.
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
                <img src="img/inspiratiedag-kinderdagverblijven-tactics.jpg" class="img-responsive center-block"/>
            </div>
        </div>

        <div class="row">
            <div class="col-md-10">
                <div class="col-md-10">
                    <h2 class="dark-gray">Links</h2>
                    <ul>
                        <li><a class="content-link"
                               href="http://www.vvsg.be/Lists/Kalender/DispForm_copy%281%29.aspx?ID=4106"
                               target="_blank">Inspiratiedag Kinderopvang | VVSG</a></li>
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