<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package forestcooperage
 */

get_header(); ?>

<?php
$page_for_posts_id = get_option('page_for_posts');
$page_for_posts_obj = get_post($page_for_posts_id);
echo apply_filters('the_content', $page_for_posts_obj->post_content);
get_template_part('template-parts/post', 'list');
?>

<?php get_footer();