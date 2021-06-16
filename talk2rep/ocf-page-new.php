<?php
/**
 * Template Name: OCF Page NEW
 * @site talk2rep
 */
get_header();
 ?>
<div id="primary" class="content-area">
  <!-- Header -->
<div class="ocf-header">
  <h1>OutPlex Cares Foundation (OCF)</h1>
</div>
<!-- Header -->

<section class="ocf-first-section-new">
  <div class="container">
  <div class="row">
  <div class="col-lg-12 col-md-12 ocf-header-pragraph">
  <p>We are committed to affect positive change in the communities where we live and work by offering our support via time and money.  We donate supplies, give blood, walk, run,  build habitats, write checks and more to help our world be a better place.  How can we help?  Please complete the form below and we would love to hear from you!
</p>
  </div>
</div>
</div>



<div class="container ocf-slider-container">

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
    <li data-target="#carousel-example-generic" data-slide-to="5"></li>
    <li data-target="#carousel-example-generic" data-slide-to="6"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="<?=get_template_directory_uri()?>/dist/images/ocf/new/1x.jpg" alt="Casa Amor 2018" class="img-responsive">
    </div>
    <div class="item">
      <img src="<?=get_template_directory_uri()?>/dist/images/ocf/new/2x.jpg" alt="Casa Amor 2018">
    </div>

        <div class="item">
      <img src="<?=get_template_directory_uri()?>/dist/images/ocf/new/3x.jpg" alt="Casa Amor 2018">
    </div>

    <div class="item">
      <img src="<?=get_template_directory_uri()?>/dist/images/ocf/new/4x.jpg" alt="Casa Amor 2018">
    </div>

        <div class="item">
      <img src="<?=get_template_directory_uri()?>/dist/images/ocf/new/5x.jpg" alt="Casa Amor 2018">
    </div>

        <div class="item">
      <img src="<?=get_template_directory_uri()?>/dist/images/ocf/new/6x.jpg" alt="Casa Amor 2018">
    </div>

  <!-- 2017 -->
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>



</div>

</section>

<section class="ocf-second-section-new">
  <div class="container">
  <div class="row">

<!-- Form Show -->
<div class="col-lg-12 col-md-12">
<div class="col-lg-4 col-md-4 bg-left-form">

</div>
<div class="col-lg-8 col-md-8 ocf-right-form col-lg-offset-4  col-md-offset-4">
    <?php
    if(isset($_POST['SubmitButton'])) {
        ?>
        <div class="label label-success col-lg-12 col-md-12">
            <p class="success-message-text">Your message has been successfully sent.</p>
        </div>
        <?php
    }
    ?>
<div class="col-lg-12 col-md-12 ocf-form-content">
<div class="ocf-right-form-title">
<h3>GET IN TOUCH</h3>
<span></span>
</div>
</div>
<form action="" method="post">
<div class="col-lg-12 col-md-12 ">
  <div class="col-lg-6 col-md-6 ocf-form-content">
    <label>FIRST NAME</label>
    <input type="text" name="firstname" required/>
</div>

  <div class="col-lg-6 col-md-6 ocf-form-content">
  <label>LAST NAME</label>
    <input type="text" name="lastname" required />
</div>
</div>

<div class="col-lg-12 col-md-12">
  <div class="col-lg-6 col-md-6 ocf-form-content">
    <label>EMAIL</label>
    <input type="email" name="email" required/>
</div>

  <div class="col-lg-6 col-md-6 ocf-form-content">
  <label>PHONE</label>
    <input type="text" name="phone" required />
</div>
</div>

<div class="col-lg-12 col-md-12">
<div class="col-lg-6 col-md-6 ocf-form-content">
  <label>COMPANY / ORGANIZATION</label>
    <input type="text" name="company" required />
</div>
</div>
<div class="col-lg-12 col-md-12">
<div class="col-lg-12 col-md-12 ocf-form-content">
<label>TELL US MORE</label>
<textarea rows="10" name="message" required></textarea>
<p class="ocf-term-cond"><span><input type="checkbox" required/></span>By contacting us, you agree to our privacy policy and the information you provide
here will be collected by OutPLEX
  </p>
</div>
</div>

<div class="col-lg-12 col-md-12">
  <div class="ocf-form-button-content">
 <button class="ocf-form-button" type="submit" name="SubmitButton">SUBMIT</button>
</div>
</div>
</form>
</div>
<div>
<!-- End Form Show -->
</div>
</div>
</section>
</div>
<?php

if(isset($_POST['SubmitButton'])){ //check if form was submitted

    $checkArry = $_POST['fqchecks'];

    $to = 'ocf@outplex.com';
    $subject = 'OCF - OutPlex Site';
    $message = "<h3>OCF Contact Form</h3> <br />".

        "<b>First name:</b> ".$_POST['firstname']."<br />".
        "<br />".
        "<b>Last name:</b> ".$_POST['lastname']."<br />".
        "<br />".
        "<b>Email:</b> ".$_POST['email']."<br />".
        "<br />".
        "<b>Company:</b> ".$_POST['company']."<br />".
        "<br />".
        "<b>Phone:</b> ".$_POST['phone']."<br />".
        "<br />".
        "<b>Tell us about your needs: \n</b><br />".
        "<br />".
        $_POST['message'];
    wp_mail( $to, $subject, $message);

}



?>
  <?php
get_footer();
 ?>