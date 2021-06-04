<?php
/**
 * ACF Blocks
 *
 * @package forestcooperage
 */

add_action('acf/init', 'my_acf_init_block_types');
function my_acf_init_block_types()
{
  if (function_exists('acf_register_block_type')) {
    acf_register_block_type([
      'name' => 'banner',
      'title' => __('Banner'),
      'description' => __('Banner block.'),
      'render_template' => 'template-parts/blocks/banner.php',
      'category' => 'layout ',
      'icon' => 'format-image',
      'keywords' => ['banner'],
    ]);

    acf_register_block_type([
      'name' => 'side-image-content',
      'title' => __('Side Image + Content'),
      'description' => __('Side image + content block.'),
      'render_template' => 'template-parts/blocks/side-image-content.php',
      'category' => 'layout ',
      'icon' => 'embed-photo',
      'keywords' => ['side-image-content'],
    ]);

    acf_register_block_type([
      'name' => 'side-image-gallery',
      'title' => __('Side Image Gallery'),
      'description' => __('Side image gallery block.'),
      'render_template' => 'template-parts/blocks/side-image-gallery.php',
      'category' => 'layout ',
      'icon' => 'format-image',
      'keywords' => ['side-image-gallery'],
    ]);

    acf_register_block_type([
      'name' => 'content-section',
      'title' => __('Content Area'),
      'description' => __('Content Area block.'),
      'render_template' => 'template-parts/blocks/content-section.php',
      'category' => 'layout ',
      'icon' => 'edit-page',
      'keywords' => ['content-section'],
    ]);
  }
}