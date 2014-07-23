<!-- NAVBAR
================================================== -->
  <body>
    <div class="navbar-wrapper" id="top">
      <div class="container">

        <div class="navbar navbar-default navbar-fixed-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="/index.php">Warren Woo</a>
          </div>

            <div class="navbar-collapse collapse">

              <ul class="nav navbar-nav">
                <li class="<?php if ($section == "calendar") { echo "active"; } ?>"><a href="/pages/calendar.php">Calendar</a></li>

                <li class="dropdown <?php if ($section == "full") { echo "active"; } ?>
                  <?php if ($section == "bodyscapes") { echo "active"; } ?>
                  <?php if ($section == "justin") { echo "active"; } ?>
                  <?php if ($section == "performances") { echo "active"; } ?>
                  <?php if ($section == "will_hughes") { echo "active"; } ?>
                  <?php if ($section == "body_shapes") { echo "active"; } ?>
                  <?php if ($section == "bodypaint") { echo "active"; } ?>
                  <?php if ($section == "georgetown") { echo "active"; } ?>
                  <?php if ($section == "dancing") { echo "active"; } ?>
                  ">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Portfolio <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li class="<?php if ($section == "full") { echo "active"; } ?>"><a href="/pages/photos.php">Full Portfolio</a></li>
                    <li class="divider"></li>
                    <li class="<?php if ($section == "bodyscapes") { echo "active"; } ?>"><a href="/pages/1_p_bodyscapes.php">&nbsp;&nbsp;Bodyscapes</a></li>
                    <li class="<?php if ($section == "justin") { echo "active"; } ?>"><a href="/pages/2_p_justin_engelman.php">&nbsp;&nbsp;Fun with Justin</a></li>
                    <li class="<?php if ($section == "performances") { echo "active"; } ?>"><a href="/pages/3_p_performances.php">&nbsp;&nbsp;Dancing &amp; Performances</a></li>
                    <li class="<?php if ($section == "will_hughes") { echo "active"; } ?>"><a href="/pages/4_p_will_hughes.php">&nbsp;&nbsp;Yoga &amp; Gestures With Will</a></li>
                    <li class="<?php if ($section == "body_shapes") { echo "active"; } ?>"><a href="/pages/5_p_human_pho.php">&nbsp;&nbsp;Body Shapes</a></li>
                    <li class="<?php if ($section == "bodypaint") { echo "active"; } ?>"><a href="/pages/6_p_bodypaint.php">&nbsp;&nbsp;Bodypaint Yoga</a></li>
                    <li class="<?php if ($section == "georgetown") { echo "active"; } ?>"><a href="/pages/7_p_georgetown.php">&nbsp;&nbsp;Playing in Georgetown</a></li>
                    <li class="<?php if ($section == "dancing") { echo "active"; } ?>"><a href="/pages/8_p_dancing.php">&nbsp;&nbsp;Dancing, Cleaning, &amp; Juggling</a></li>
                  </ul>
                </li>

                <li class="<?php if ($section == "testimonials") { echo "active"; } ?>"><a href="/pages/testimonials.php">Testimonials</a></li>
              </ul>

              <ul class="nav navbar-nav navbar-right">
                <li class="<?php if ($section == "contact") { echo "active"; } ?>"><a href="/pages/contact.php" >Contact</a></li>
              </ul>

            </div>
          </div>
        </div>

      </div>
    </div>
