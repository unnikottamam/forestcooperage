<?php
/**
 * Gallery Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

$id = 'gallery-area-' . $block['id'];
if (!empty($block['anchor'])) {
  $id = $block['anchor'];
}
$className = 'gallerysec coverbg';
if (!empty($block['className'])) {
  $className .= ' ' . $block['className'];
}
?>

<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr(
  $className
); ?>">
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
            <?php
            $images = get_field('gallery');
            $size = 'gallery-size';
            $size__full = 'full';
            if ($images) {
              foreach ($images as $image) { ?>
            <div class="col-md-4 col-6 gallerysec__item">
                <a data-aos="fade-up" data-fancybox="gallery" data-type="image" data-caption="<?php echo $image[
                  'alt'
                ]; ?>" href="<?php echo esc_url($image['url']); ?>">
                    <?php echo wp_get_attachment_image($image['id'], $size); ?>
                </a>
            </div>
            <?php }
            }
            ?>
        </div>
    </div>
</section>