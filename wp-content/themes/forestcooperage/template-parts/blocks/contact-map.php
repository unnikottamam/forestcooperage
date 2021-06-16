<?php
/**
 * Contact Map Block Template.
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
$className = 'contactmap';
if (!empty($block['className'])) {
  $className .= ' ' . $block['className'];
}
?>

<section data-aos="fade-up" id="<?php echo esc_attr(
  $id
); ?>" class="<?php echo esc_attr($className); ?>">
    <?php the_field('map_iframe'); ?>
</section>