<?php 
$pageKeywords = "";
$pageDescription = "";
$pageTitle = "Warren Woo: Yoga, Dance, Play";
$section="home";
include('includes/header.php');
include('includes/nav.php');

?>


    <!-- Carousel
    ================================================== -->
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">

          <div class="item active">
            <div id="csl-item1" class="carousel-image hidden-xs visible-sm hidden-md hidden-lg">
              &nbsp;
            </div>
            <div id="csl-item4" class="carousel-image visible-xs hidden-sm hidden-md hidden-lg">
              &nbsp;
            </div>
            <img src="/img/0-1_carousel/carousel-1-a.jpg" alt="Yoga" class="hidden-xs hidden-sm visible-md visible-lg">
            <div class="container">
              <div class="carousel-caption">
                <h1>Yoga</h1>
                <br /><br />
              </div>
            </div>
          </div>

          <div class="item">
          <div id="csl-item2" class="carousel-image visible-xs">
            &nbsp;
          </div>
          <img src="/img/0-1_carousel/carousel-2-a.jpg" alt="Dance" class="visible-lg lets-center">
          <img src="/img/0-1_carousel/carousel-2-a.jpg" alt="Dance" class="visible-md lets-center-2">
          <img src="/img/0-1_carousel/carousel-2-a.jpg" alt="Dance" class="visible-sm">
          <div class="container">
            <div class="carousel-caption">
              <h1>Dance</h1>
              <br /><br />
            </div>
          </div>
          </div>

          <div class="item">
          <div id="csl-item3" class="carousel-image">
            &nbsp;
          </div>
          <!-- <img src="/img/0-1_carousel/carousel-3-b.jpg" alt="Play"> -->
          <div class="container">
            <div class="carousel-caption">
              <h1>Play</h1>
              <br /><br />
            </div>
          </div>
          </div>

        </div>
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
      </div> <!-- /.carousel -->



      <!-- START THE FEATURETTES -->
    <div class="container-fluid">
      <div class="row featurette">
        <div class="col-md-1">
        </div>

        <div class="col-md-9 lead">
          <div class="page-header">
            <h1>Welcome!</h1>
          </div>
              <br/>

              <img src="/img/Warren-HeadShot.jpg" height="38%" width="38%" class="pull-left img-thumbnail image-margin hidden-xs" alt="Warren Woo, me!">

              <p><strong>Warren Woo</strong> found yoga in 2004 and has not looked back since. He has a passion for the practice of yoga and the integration of intentional breath and movement into every aspect of life.</p>
              <p>Warren’s intention is to offer a practice that is grounding, challenging and his directions when leading class are simple, yet detailed. He also trains in dance and focuses on different modalities of movement including acro yoga, dance partnering and circus arts.</p>
              <p>Warren was born in Hawaii and has lived across the country until finally settling in Seattle in 2002. Currently residing in Seattle and completed his 200-hour Yoga Teacher Training at <a href="http://www.yogalife.com/" target="_blank">Yogalife</a> in addition to being a certified ACE personal trainer. </p>
              <p>Warren also dances frequently at <a href="http://www.exitspacedance.com/exitSpaceAdult/" target="blank">eXit SPACE dance</a> and have danced with the Cabiri and at various venues in the Seattle area. Currently having the opportunity to teach yoga at the <a href="http://www.seattleymca.org/Locations/University/pages/Home.aspx" target="_blank">YMCA</a> of greater Seattle and at <a href="http://www.seattlefitness.com/" target="_blank">Seattle Fitness.</a></p>
        </div>

        <div class="col-md-2">
        </div>
        <!-- <div class="col-md-5">
          <img class="featurette-image img-responsive" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div> -->
      </div>
    </div>


<?php
include('includes/footer.php');
include('includes/closing.php');
?>




