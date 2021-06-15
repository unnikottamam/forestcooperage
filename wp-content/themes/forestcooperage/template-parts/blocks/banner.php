<?php
/**
 * Banner Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

$id = 'banner-' . $block['id'];
if (!empty($block['anchor'])) {
  $id = $block['anchor'];
}
$className = 'coverbg banner';
if (!empty($block['className'])) {
  $className .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
  $className .= ' align' . $block['align'];
}
?>
<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr(
  $className
); ?> text-<?php the_field('color'); ?> <?php the_field('class'); ?>">
    <div class="coverbg__img <?php echo get_field('bg_image')
      ? 'hasbg'
      : ''; ?>">
        <?php if (get_field('bg_image')) {
          echo wp_get_attachment_image(get_field('bg_image')['id'], 'full');
        } ?>
    </div>
    <div class="container">
        <div class="row justify-content-center align-items-center padd__lg min-vh-100">
            <div data-aos="fade-up" class="col-lg-8 col-md-10 text-<?php the_field(
              'text_align'
            ); ?>">
                <?php
                the_field('contents');
                if (have_rows('buttons')) {
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
                <li data-aos="fade-up">
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
                }
                ?>
            </div>
        </div>
    </div>
</section>