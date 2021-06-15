<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package forestcooperage
 */

get_header(); ?>

<?php while (have_posts()) {
  the_post();
  get_template_part('template-parts/content', get_post_type());
  $url = urlencode(get_permalink());
  $title = str_replace(' ', '%20', get_the_title());
} ?>
<div class="container padd__mdb">
    <div class="row text-center align-items-center">
        <div class="col-md-4 text-md-start">
            <ul class="blog__social">
                <li>
                    <a href="<?php echo 'https://www.facebook.com/sharer/sharer.php?u=' .
                      $url; ?>" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                            <path
                                d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                        </svg>
                    </a>
                    <a href="<?php echo 'https://twitter.com/intent/tweet?text=' .
                      $title .
                      '&amp;url=' .
                      $url .
                      '&amp;via=wpvkp'; ?>" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                            <path
                                d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                        </svg>
                    </a>
                </li>
                <li>Share</li>
            </ul>
        </div>
        <div class="col-md-8 text-md-end">
            <div class="blog__footer">
                <?php the_post_navigation([
                  'prev_text' =>
                    '<span class="nav-subtitle">' .
                    esc_html__('Previous:', 'forestcooperage') .
                    '</span>',
                  'next_text' =>
                    '<span class="nav-subtitle">' .
                    esc_html__('Next:', 'forestcooperage') .
                    '</span>',
                ]); ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer();