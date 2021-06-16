<?php
/**
 * Faq Area Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

$id = 'faq-area-' . $block['id'];
if (!empty($block['anchor'])) {
  $id = $block['anchor'];
}
$className = 'faqsec';
if (!empty($block['className'])) {
  $className .= ' ' . $block['className'];
}
$faq_size = get_field('faq_size') ? get_field('faq_size') : 'full';
?>

<section id="<?php echo esc_attr($id); ?>" class="coverbg <?php echo esc_attr(
  $className
); ?> padd__0 text-<?php the_field('color'); ?>">
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
        <div class="row justify-content-center faqsec__row">
            <?php if (have_rows('faqs')) {
              $count = 0;
              while (have_rows('faqs')) {

                $count++;
                the_row();
                ?>
            <div data-aos="fade-up" class="col-lg-<?php echo $faq_size == 'half'
              ? '6'
              : '12'; ?> faqsec__item <?php if ($count == 1) {
   echo 'active';
 } ?>">
                <div class="faqsec__inn">
                    <h3><?php the_sub_field('title'); ?></h3>
                    <div class="faqsec__cont">
                        <p><?php the_sub_field('contents'); ?></p>
                    </div>
                </div>
            </div>
            <?php
              }
            } ?>
        </div>
    </div>
</section>