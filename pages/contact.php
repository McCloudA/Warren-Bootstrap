<?php
$pageKeywords = "contact";
$pageDescription = "Contact Warren about teaching yoga or private coaching.";
$pageTitle = "Contact Warren Woo";
$section="contact";
include('../includes/header.php');
include('../includes/nav.php');
?>

<div class="container-fluid">
  <div class="row">

    <div class="col-sm-2">
    </div>

    <div class="col-sm-8">
      <div class="page-header">
        <h1>Contact Me!</h1>
      </div>
      <p class="lead">If you would like to schedule an informational session or have any questions about my teaching style please contact me. I look forward to working with you to help you meet your goals!</p>
      <p class="lead">~ Warren Woo</p>
      <p class="lead"><a href="tel:+18082307938"><span class="glyphicon glyphicon-phone"></span>&nbsp;(808) 230-7938</a></p> 
    </div>

    <div class="col-sm-2">
    </div>

  </div>
</div>




    <!-- Contact Form
    ================================================== -->
<div class="container-fluid top-space">
  <div class="row">

    <div class="col-sm-2">
    </div>

    <div class="col-sm-8">

      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Your Message</h3>
        </div>
        <div class="panel-body">

          <form role="form" method="post" action="contact_me.php">

            <fieldset>
              <div class="form-group">
                <label for="full_name">Name</label>
                <input type="text" class="form-control" name="full_name" id="full_name" placeholder="Name">
              </div>

              <div class="form-group">
                <label for="email">Email Address</label>
                <input type="text" class="form-control" name="email" id="email" placeholder="Enter Email">
              </div>
            </fieldset>

            <fieldset>
              <div class="form-group">
                <label for="message">Message</label>
                <textarea class="form-control" rows="7" name="message" id="message" placeholder="Your message here..."></textarea>
              </div>
            </fieldset>

            <div class="form-group">
              <input type="submit" class="btn btn-warning" value="Send&#33;">
            </div>

          </form>

        </div>
      </div>

    </div>

    <div class="col-sm-2">
    </div>

  <div class="row">
</div>









<?php
include('../includes/footer.php');
include('../includes/closing.php');
?>
