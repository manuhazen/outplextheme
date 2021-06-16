<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package talk2rep
 */

get_header();
if (have_posts()) : while (have_posts()) : the_post(); 
?>

	<div id="primary" class="content-area">
	<div class="container">
	<div class="col-lg-12 col-md-12 single-header">
	<h1 class="single-title"> <?php the_title(); ?></h1>

	</div>
	<div class="col-lg-12 col-md-12 single-body">
		
		<?php 
		$imgUrl = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'single-post-thumbnail' )[0];
		?>
		<div id="custom-bg" style="background-image: url('<?php echo $imgUrl ?>');" class="detail-image-top">
		</div>

		<?php the_content(); ?>

</div>	
	</div>
	<section class="relate-post-container">

	<div class="container">

<?php
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 3,
        'paged' => $paged,
    );

$post_query = new WP_Query($args);
if($post_query->have_posts() ) {
  while($post_query->have_posts() ) {
    $post_query->the_post();
    ?>
		<!-- post relate -->
		<div class="col-lg-4 relate-new">
		<?php echo the_post_thumbnail( 'medium_large' );?> 
	<h3><?php the_title(); ?></h3>
	<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">READ MORE</a>
</div>	
<!-- post relatEND -->

<!-- [end] SINGLE POST -->
<?php
}  // Close while
}
	?>
	
</div>	
</section>	
	</div><!-- #primary -->

<?php
endwhile;
endif;
get_footer();
