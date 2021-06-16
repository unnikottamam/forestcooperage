<?php
/**
 * Side Image Gallery Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

$id = 'side-gallery-' . $block['id'];
if (!empty($block['anchor'])) {
  $id = $block['anchor'];
}
$className = 'sidegallery';
if (!empty($block['className'])) {
  $className .= ' ' . $block['className'];
}
$className .= ' ' . get_field('type');
$type = get_field('type');

if (have_rows('gallery')) { ?>
<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr(
  $className
); ?> padd__lgb">
    <div class="container">
        <div data-aos="fade-up" class="sidegallery__slider">
            <?php while (have_rows('gallery')) {
              the_row(); ?>
            <div class="sidegallery__slide">
                <div class="row align-items-end <?php echo $type == 'vertical'
                  ? 'justify-content-between'
                  : ''; ?>">
                    <div class="<?php echo $type == 'vertical'
                      ? 'col-lg-5'
                      : 'col-lg-7 order-lg-2'; ?>">
                        <?php if (get_sub_field('image')) {
                          echo '<p><em>' .
                            wp_get_attachment_caption(
                              get_sub_field('image')['id']
                            ) .
                            '</em></p>';
                          echo wp_get_attachment_image(
                            get_sub_field('image')['id'],
                            'full'
                          );
                        } ?>
                    </div>
                    <div class="col-lg-5 sidegallery__cont">
                        <?php
                        the_sub_field('contents');
                        if (get_sub_field('link')) {

                          $link = get_sub_field('link');
                          $link_url = $link['url'];
                          $link_title = $link['title'];
                          $link_target = $link['target']
                            ? $link['target']
                            : '_self';
                          ?>
                        <a href="<?php echo esc_url(
                          $link_url
                        ); ?>" target="<?php echo esc_attr($link_target); ?>">
                            <?php echo esc_html($link_title); ?>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                <path
                                    d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                            </svg>
                        </a>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
            <?php
            } ?>
        </div>
    </div>
</section>
<?php }