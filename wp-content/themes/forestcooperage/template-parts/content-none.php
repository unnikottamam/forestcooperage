<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package forestcooperage
 */
?>

<section class="no-results not-found padd__lg text-center text-dark">
    <div class="container">
        <div class="row justify-content-center">
            <div data-aos="fade-up" class="col-md-8">
                <h2><?php esc_html_e(
                  'Nothing Found',
                  'forestcooperage'
                ); ?></h2>
                <?php if (is_search()): ?>
                <p><?php esc_html_e(
                  'Sorry, but nothing matched your search terms. Please try again with some different keywords.',
                  'forestcooperage'
                ); ?></p>
                <?php get_search_form();else: ?>

                <p><?php esc_html_e(
                  'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.',
                  'forestcooperage'
                ); ?></p>
                <div data-aos="fade-up">
                    <?php get_search_form();endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>