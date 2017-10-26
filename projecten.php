<!DOCTYPE html>
<html lang="en">
<head>
  <?php
  $PageTitle = "Tactics bvba | Projecten";
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
            <div class="col-md-12 title-white">
                <h2>Projecten</h2>
            </div>
        </div>
    </div>
</section>


<!--Portfolio Content-->
<section id="content">
    <div class="container">
        <ul class="list-inline portfolio text-center">
            <!-- Add wen image and description is available
            <li>
                <div class="thumbs">
                    <img src="img/pringles_color.gif" class="img-responsive" alt="Image Size 430x280">
                </div>

                <div class="project-title margin-30">
                    <h5>Stagebeheer Universiteit Gent</h5>
                </div>
            </li>
            -->
            <li>
                <div class="thumbs">
                    <img src="img/kinderopvangaalst.jpg" class="img-responsive" alt="kinderopvang_aalst">
                    <a href="portfolio-kinderopvangaalst.php">
                      <span class="title">
                          <span><i class="fa fa-link fa-2x"></i></span>
                      </span>
                    </a>
                </div>

                <div class="project-title margin-30">
                    <h5>Kinderopvang in Aalst</h5>
                </div>
            </li>
            <li>
                <div class="thumbs">
                    <img src="img/pringles_color.gif" class="img-responsive" alt="Pringles">
                </div>

                <div class="project-title margin-30">
                    <h5>Pringles automatisatie</h5>
                </div>
            </li>
            <li>
                <div class="thumbs">
                    <img src="img/kinderopvangbrussel.gif" class="img-responsive" alt="kinderopvang_brussel">
                    <a href="portfolio-kinderopvangbrussel.php">
                      <span class="title">
                          <span><i class="fa fa-link fa-2x"></i></span>
                      </span>
                    </a>
                </div>

                <div class="project-title margin-30">
                    <h5>Kinderopvang in Brussel</h5>
                </div>
            </li>
            <li>
                <div class="thumbs">
                    <img src="img/kinderopvangoostende.gif" class="img-responsive" alt="kinderopvang_oostende">
                    <a href="portfolio-kinderopvangoostende.php">
                    <span class="title">
                        <span><i class="fa fa-link fa-2x"></i></span>
                    </span>
                    </a>
                </div>

                <div class="project-title margin-30">
                    <h5>Kinderopvang stad Oostende </h5>
                </div>
            </li>
            <li>
                <div class="thumbs">
                    <img src="img/portfolio1.gif" class="img-responsive" alt="csj">
                    <a href="portfolio-csj.php">
                    <span class="title">
                        <span><i class="fa fa-link fa-2x"></i></span>
                    </span>
                    </a>
                </div>

                <div class="project-title margin-30">
                    <h5>Verenigingendatabank stad Antwerpen</h5>
                </div>
            </li>
            <li>
                <div class="thumbs">
                    <img src="img/portfolio2.gif" class="img-responsive" alt="sportdienst_antwerpen">
                    <a href="portfolio-sportdienst.php">
                    <span class="title">
                        <span><i class="fa fa-link fa-2x"></i></span>
                    </span>
                    </a>
                </div>

                <div class="project-title margin-30">
                    <h5>Sportdienst stad Antwerpen</h5>
                </div>
            </li>
            <li>
                <div class="thumbs">
                    <img src="img/portfolio5.gif" class="img-responsive" alt="kinderopvang_leuven">
                    <a href="portfolio-leuven.php">
                        <span class="title">
                            <span><i class="fa fa-link fa-2x"></i></span>
                        </span>
                    </a>
                </div>

                <div class="project-title margin-30">
                    <h5>Kinderopvang stad Leuven </h5>
                </div>
            </li>
            <li>
                <div class="thumbs">
                    <img src="img/kinderopvangantwerpen.gif" class="img-responsive" alt="kinderopvang_antwerpen">
                    <a href="portfolio-kinderopvangantwerpen.php">
                    <span class="title">
                        <span><i class="fa fa-link fa-2x"></i></span>
                    </span>
                    </a>
                </div>

                <div class="project-title margin-30">
                    <h5>Kinderopvang stad Antwerpen </h5>
                </div>
            </li>

            <li>
                <div class="thumbs">
                    <img src="img/kinderopvanggent.gif" class="img-responsive" alt="kinderopvang_gent">
                    <a href="portfolio-kinderopvanggent.php">
                    <span class="title">
                        <span><i class="fa fa-link fa-2x"></i></span>
                    </span>
                    </a>
                </div>

                <div class="project-title margin-30">
                    <h5>Kinderopvang stad Gent </h5>
                </div>
            </li>
            <li>
                <div class="thumbs">
                    <img src="img/portfolio3.gif" class="img-responsive" alt="kdv_kavka_jespo">
                    <a href="portfolio-kdv-kavka-jespo.php">
                    <span class="title">
                        <span><i class="fa fa-link fa-2x"></i></span>
                    </span>
                    </a>
                </div>

                <div class="project-title margin-30">
                    <h5>Kindervreugd - Kavka - Jespo</h5>
                </div>
            </li>
            <li>
                <div class="thumbs">
                    <img src="img/portfolio4.gif" class="img-responsive" alt="hivset">
                    <a href="portfolio-hivset.php">
                    <span class="title">
                        <span><i class="fa fa-link fa-2x"></i></span>
                    </span>
                    </a>
                </div>

                <div class="project-title margin-30">
                    <h5>Vormingscentrum HIVSET</h5>
                </div>
            </li>
        </ul><!--End Work List-->
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
</body>
</html>