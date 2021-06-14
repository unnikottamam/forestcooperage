<?php
/**
 * Contact Area Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

$id = 'contact-area-' . $block['id'];
if (!empty($block['anchor'])) {
  $id = $block['anchor'];
}
$className = 'contactsec';
$textalign = get_field('text_align') ? get_field('text_align') : 'center';
$className .= ' text-' . $textalign;
if (!empty($block['className'])) {
  $className .= ' ' . $block['className'];
}
?>

<section id="<?php echo esc_attr($id); ?>" class="coverbg <?php echo esc_attr(
  $className
); ?> padd__lg text-<?php the_field('color'); ?>">
    <div class="coverbg__img" <?php echo get_field('bg_image')
      ? 'style="background-color: ' . get_field('bg_color') . ';"'
      : ''; ?>>
        <?php if (get_field('bg_image')) {
          echo wp_get_attachment_image(get_field('bg_image')['id'], 'full');
        } ?>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-xl-6 text-center text-lg-start">
                <?php the_field('contents'); ?>
            </div>
        </div>
        <div class="row justify-content-between text-center text-lg-start">
            <div class="col-lg-3 contactsec__left">
                <?php if (have_rows('buttons')) {
                  echo '<ul class="ctalist d-lg-flex flex-column">';
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
); ?>" class="btton d-lg-grid px-lg-0 btton-<?php the_sub_field(
  'type'
); ?>"><?php echo esc_html($link_title); ?></a>
                </li>
                <?php
                    }
                  }
                  echo '</ul>';
                } ?>
            </div>
            <div class="col-lg-8 col-xl-7 contactsec__right">
                <div class="text-lg-end text-center">
                    <p><em>Send us a message, we’re on standby.</em></p>
                </div>
                <div class="contactsec__form text-white">
                    <?php echo do_shortcode(
                      '[contact-form-7 id="131" title="Contact form"]'
                    ); ?>
                </div>
            </div>
        </div>
    </div>
</section>