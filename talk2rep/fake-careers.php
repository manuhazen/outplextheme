<?php
/**
 * Template Name: Carreers-Fake
 * @site talk2rep
 */
get_header();
 ?>
 <style>
 .paragraph {
  font-family: Ubuntu;
    font-size: 21px;
    font-weight: 400;
    font-style: normal;
    font-stretch: normal;
    line-height: 1.71;
    /* letter-spacing: 2px; */
    text-align: left;
    color: #545871;
}

 .iframe-section {

 }

 .iframe-section iframe {

 }

 .iframe-section iframe {
    position: relative;
     display: block;
     width: 100%;
     height: 100vh;
     min-height: 1024px;
 }

  .banner-container {
    display: flex;
    height: 100vh;
    background-image: url('<?=get_template_directory_uri()?>/dist/images/careers/careers-section1-bg.png');
    background-size: contain;
    background-repeat: no-repeat;
    background-position: right;
    align-items: center;
  }

  .fake-center-section {
      height: 720px;
      background-image: url('<?=get_template_directory_uri()?>/dist/images/careers/careers-section2-bg.png');
      background-repeat: no-repeat;
      -webkit-background-size: contain;
      background-size: contain;
  }

.banner-container h1 {
  font-weight: bold;
    font-size: 40px;
}

 </style>
    <div id="primary" class="content-area">
    <section class="iframe-section">
    <!-- TALEO IFRAME -->
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
the_content();
endwhile; else: ?>
<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>
</section>
    </div>
<?php 
get_footer();
?>
