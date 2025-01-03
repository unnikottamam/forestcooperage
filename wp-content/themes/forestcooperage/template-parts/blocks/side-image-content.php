<?php
/**
 * Side Image + Content Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

$id = 'side-image-' . $block['id'];
if (!empty($block['anchor'])) {
  $id = $block['anchor'];
}
$className = 'sideimage';
if (!empty($block['className'])) {
  $className .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
  $className .= ' align' . $block['align'];
}
$imgpos = get_field('image_position') ? get_field('image_position') : 'left';
?>

<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr(
  $className
); ?> text-<?php the_field('color'); ?> padd__lg">
    <div class="sideimage__img align<?php echo $imgpos; ?>">
        <div data-aos="fade-<?php echo $imgpos == 'right'
          ? 'left'
          : 'right'; ?>">
            <?php if (get_field('image')) {
              echo wp_get_attachment_image(get_field('image')['id'], 'full');
            } ?>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-lg-<?php echo $imgpos == 'right'
          ? 'start'
          : 'end'; ?>">
            <div data-aos="fade-<?php echo $imgpos == 'right'
              ? 'right'
              : 'left'; ?>" class="col-lg-7 text-center text-lg-start">
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