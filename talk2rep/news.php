<?php
/**
 * Template Name: News
 * @site talk2rep
 */
get_header();
 ?>
<div id="primary" class="content-area">
 
<section class="container-fluid main-slider-section-news">
<div class="news-title">
<h1>NEWS</h1>
<span></span>
</div>
</section>  
<section class="container">


<?php
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 4,
        'paged' => $paged,
    );

$post_query = new WP_Query($args);
if($post_query->have_posts() ) {
  while($post_query->have_posts() ) {
    $post_query->the_post();
    ?>


<div class="col-lg-12 col-md-12 news-list-container" data-aos="fade-up" data-aos-delay="200"> <!-- Open List --?
 <!-- left site --> 
<div class="col-lg-6 col-md-6 news-list-text">
  <!-- <h3>LATEST</h3> -->
  <h1><?php the_title(); ?></h1>
 <div class="readmore">
   <span></span>
   <a href="<?php the_permalink(); ?>">READ MORE</a> 
</div> 
</div>
 <!--[End] left site --> 
 <!-- right site -->
<div class="col-lg-6 col-md-6 news-list-img" style="background: url('<?php echo get_the_post_thumbnail_url(get_the_ID(),'large'); ?>');">
</div>
 <!-- [End] right site --> 

</div> <!-- Closed List -->


    <?php
}  // Close while
}
  ?>

<div class="talk-pagination">
    <?php 
    $total_pages = $post_query->max_num_pages;
    $current_page = max(1, get_query_var('paged'));
    echo paginate_links(array(
      'base' => get_pagenum_link(1) . '%_%',
      'format' => '/page/%#%',
      'current' => $current_page,
      'total' => $total_pages,
      'prev_text'    => __('« NEWEST'),
      'next_text'    => __('OLDER »'),
  ));
    ?>
</div>
</section>  
</div>  
  <?php
get_footer();
 ?>
