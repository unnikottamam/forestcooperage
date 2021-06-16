<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package capitalbike
 */

$post_class = "padd__lgb post__thumb ";
$count = $args['class'] ? $args['class'] : '';
$post_class .= $count == 0 ? 'even' : 'odd';
?>
<section data-aos="fade-up" id="post-<?php the_ID(); ?>" <?php post_class(
  $post_class
); ?>>
    <a href="<?php the_permalink(); ?>">
        <div class="container">
            <div class="row <?php echo $count == 0
              ? 'justify-content-end'
              : ''; ?>">
                <div class="col-md-6 post__thumbcont">
                    <?php the_title('<h2>', '</h2>'); ?>
                    <p><em><?php echo get_the_date(); ?></em></p>
                    <?php if (has_post_thumbnail()) {
                      echo '<div class="post__thumbimg">';
                      the_post_thumbnail('blog-thumb');
                      echo '</div>';
                    } ?>
                    <p>
                        <?php echo wp_trim_words(
                          get_the_excerpt(),
                          50,
                          '...'
                        ); ?>
                    </p>
                    <span data-aos="fade-up" class="btton btton-<?php echo $count ==
                    0
                      ? 'primary'
                      : 'success'; ?>">Read More</span>
                </div>
            </div>
        </div>
    </a>
</section>