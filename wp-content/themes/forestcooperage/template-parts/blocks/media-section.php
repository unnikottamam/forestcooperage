<?php
/**
 * Media Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

$id = 'content-area-' . $block['id'];
if (!empty($block['anchor'])) {
  $id = $block['anchor'];
}
$className = 'mediasec coverbg';
if (!empty($block['className'])) {
  $className .= ' ' . $block['className'];
}
$media_size = get_field('media_size') ? get_field('media_size') : 'full';
?>

<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr(
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
            <?php if (have_rows('media_items')) {
              while (have_rows('media_items')) {
                the_row();
                if (get_sub_field('file')) {

                  $file = get_sub_field('file');
                  $file_url = $file['url'];
                  ?>
            <div class="col-lg-<?php echo $media_size == 'half'
              ? '6'
              : '12'; ?> mediasec__item <?php if ($count == 1) {
   echo 'active';
 } ?>">
                <a target="_blank" href="<?php echo $file_url; ?>">
                    <h3><?php the_sub_field('title'); ?></h3>
                </a>
            </div>
            <?php
                }
              }
            } ?>
        </div>
    </div>
</section>