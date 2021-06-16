<?php
/**
 * Template part for displaying post lists
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package forestcooperage
 */

if (have_posts()) {
  $ct = 0;
  echo '<div class="text-center text-md-start post__list padd__lgt">';
  while (have_posts()) {
    the_post();
    $ct = $ct == 1 ? 0 : ++$ct;
    get_template_part('template-parts/content', 'blog', [
      'class' => $ct,
    ]);
  }
  if ($wp_query->max_num_pages > 1) { ?>
<div class="container text-center padd__lgb">
    <button data-aos="fade-up" class="load-more btton btton-black">Load More</button>
</div>
<?php }
  echo '</div>';
} else {
  get_template_part('template-parts/content', 'none');
}