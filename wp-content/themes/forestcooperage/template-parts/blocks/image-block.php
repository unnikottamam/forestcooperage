<?php
/**
 * Image Block Template.
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
$className = 'imageblock';
if (!empty($block['className'])) {
  $className .= ' ' . $block['className'];
}
?>

<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr(
  $className
); ?>" <?php echo get_field('bg_color')
  ? 'style="background-color: ' . get_field('bg_color') . ';"'
  : ''; ?>>
    <?php if (get_field('image')) {
      echo wp_get_attachment_image(get_field('image')['id'], 'full');
    } ?>
</section>