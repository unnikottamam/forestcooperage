<?php
/**
 * Content Area Block Template.
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
$className = 'contentarea';
$textalign = get_field('text_align') ? get_field('text_align') : 'center';
$className .= ' text-' . $textalign;
if (!empty($block['className'])) {
  $className .= ' ' . $block['className'];
}
$blocksize = get_field('block_size');
?>

<section id="<?php echo esc_attr($id); ?>" text-<?php the_field(
  'color'
); ?> class="<?php echo esc_attr($className); ?> padd__lg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-xl-6 <?php echo $blocksize; ?>">
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
                <li>
                    <a href="<?php echo esc_url(
                      $link_url
                    ); ?>" target="<?php echo esc_attr(
  $link_target
); ?>" class="button button-<?php the_sub_field(
  'type'
); ?>"><?php echo esc_html($link_title); ?></a>
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