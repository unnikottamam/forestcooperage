<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package forestcooperage
 */

get_header(); ?>

<section class="padd__lg text-center text-dark">
    <div class="container">
        <div class="row justify-content-center">
            <div data-aos="fade-up" class="col-md-8">
                <h2><?php esc_html_e(
                  'Oops! That page can&rsquo;t be found.',
                  'forestcooperage'
                ); ?></h2>
                <p><?php esc_html_e(
                  'It looks like nothing was found at this location. Maybe try one of the links below or a search?',
                  'forestcooperage'
                ); ?></p>
                <div data-aos="fade-up">
                    <?php get_search_form(); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer();