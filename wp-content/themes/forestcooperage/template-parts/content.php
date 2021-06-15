<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package forestcooperage
 */
?>

<main id="post-<?php the_ID(); ?>" <?php post_class('blog__main'); ?>>

    <section class="coverbg banner text-white">
        <div class="coverbg__img <?php echo has_post_thumbnail()
          ? 'hasbg'
          : 'bg-dark'; ?>">
            <?php if (has_post_thumbnail()) {
              the_post_thumbnail('full');
            } ?>
        </div>
        <div class="container">
            <div class="row justify-content-center align-items-center padd__lg min-vh-100">
                <div class="col-lg-8 col-md-10 text-center">
                    <h1><?php the_title(); ?></h1>
                    <p><?php echo get_the_date(); ?></p>
                </div>
            </div>
        </div>
    </section>
    <?php the_content(); ?>
</main>