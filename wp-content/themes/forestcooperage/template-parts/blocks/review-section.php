<?php
/**
 * Review Area Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

$id = 'review-area-' . $block['id'];
if (!empty($block['anchor'])) {
  $id = $block['anchor'];
}
$className = 'reviewsec';
if (!empty($block['className'])) {
  $className .= ' ' . $block['className'];
}
?>

<section id="<?php echo esc_attr($id); ?>" class="coverbg <?php echo esc_attr(
  $className
); ?> padd__lg text-<?php the_field('color'); ?>">
    <div class="coverbg__img <?php echo get_field('bg_image')
      ? 'hasbg'
      : ''; ?>" <?php echo get_field('bg_color')
  ? 'style="background-color: ' . get_field('bg_color') . ';"'
  : ''; ?>>
        <?php if (get_field('bg_image')) {
          echo wp_get_attachment_image(get_field('bg_image')['id'], 'full');
        } ?>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10">
                <?php if (have_rows('reviews')) {
                  while (have_rows('reviews')) {
                    the_row(); ?>
                <div class="reviewsec__item">
                    <?php if (get_sub_field('image')) {
                      echo wp_get_attachment_image(
                        get_sub_field('image')['id'],
                        'review-size'
                      );
                    } ?>
                    <div class="reviewsec__cont">
                        <h3><?php the_sub_field('title'); ?></h3>
                        <h4><?php the_sub_field('sub_title'); ?></h4>
                        <p><?php the_sub_field('contents'); ?></p>
                    </div>
                </div>
                <?php
                  }
                } ?>
                <div class="text-center">
                    <?php if (have_rows('buttons')) {
                      echo '<ul class="ctalist">';
                      while (have_rows('buttons')) {
                        the_row();
                        if (get_sub_field('link')) {

                          $link = get_sub_field('link');
                          $link_url = $link['url'];
                          $link_title = $link['title'];
                          $link_target = $link['target']
                            ? $link['target']
                            : '_self';
                          ?>
                    <li>
                        <a href="<?php echo esc_url(
                          $link_url
                        ); ?>" target="<?php echo esc_attr(
  $link_target
); ?>" class="btton btton-<?php the_sub_field('type'); ?>"><?php echo esc_html(
  $link_title
); ?></a>
                    </li>
                    <?php
                        }
                      }
                      echo '</ul>';
                    } ?>
                </div>
            </div>
        </div>
    </div>
</section>