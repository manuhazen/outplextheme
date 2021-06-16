<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package talk2rep
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="error-404 not-found">
            <div class="error-404-not-found-header">
                <h2>ERROR</h2>
                <h1>404</h1>
            </div>
                <div>
                    <h3>Unfortunately the page you are looking for is not here.</h3>
                </div>
			</section><!-- .error-404 -->

            <section class="error-404-bottom-section">
            <div class="error-bottom-header">
                <h4>YOU MIGHT BE LOOKING TO</h4>
                <span></span>
            </div>
            <div class="container img-404-container">
                <div class="col-lg-4 col-md-4 col-xs-12" style="margin-bottom: 30px;">
                   <a href="/free-quote">
                    <img src="<?=get_template_directory_uri()?>/dist/images/404/getaquote.png" class="img-responsive"/>
                   </a>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-12" style="margin-bottom: 30px;">
                    <a href="/about-us">
                    <img src="<?=get_template_directory_uri()?>/dist/images/404/aboutus.png" class="img-responsive"/>
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-12" style="margin-bottom: 30px;">
                    <a href="/solutions">
                    <img src="<?=get_template_directory_uri()?>/dist/images/404/services.png" class="img-responsive"/>
                    </a>
                </div>

            </div>
            </section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
