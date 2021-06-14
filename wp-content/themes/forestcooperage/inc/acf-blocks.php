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
      'name' => 'sidewise-image-content',
      'title' => __('SideWise Image + Content'),
      'description' => __('Sidewise image + content section.'),
      'render_template' => 'template-parts/blocks/sidewise-image-content.php',
      'category' => 'layout ',
      'icon' => 'embed-photo',
      'keywords' => ['sidewise-image-content'],
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

    acf_register_block_type([
      'name' => 'faq-section',
      'title' => __('FAQ Area'),
      'description' => __('FAQ Area block.'),
      'render_template' => 'template-parts/blocks/faq-section.php',
      'category' => 'layout ',
      'icon' => 'edit-page',
      'keywords' => ['faq-section'],
    ]);

    acf_register_block_type([
      'name' => 'review-section',
      'title' => __('Review Area'),
      'description' => __('Review Area block.'),
      'render_template' => 'template-parts/blocks/review-section.php',
      'category' => 'layout ',
      'icon' => 'edit-page',
      'keywords' => ['review-section'],
    ]);

    acf_register_block_type([
      'name' => 'contact-section',
      'title' => __('Contact Area'),
      'description' => __('Contact Area block.'),
      'render_template' => 'template-parts/blocks/contact-section.php',
      'category' => 'layout ',
      'icon' => 'edit-page',
      'keywords' => ['contact-section'],
    ]);

    acf_register_block_type([
      'name' => 'contact-map',
      'title' => __('Contact Map'),
      'description' => __('Contact Map block.'),
      'render_template' => 'template-parts/blocks/contact-map.php',
      'category' => 'layout ',
      'icon' => 'edit-page',
      'keywords' => ['contact-map'],
    ]);

    acf_register_block_type([
      'name' => 'product-section',
      'title' => __('Product List'),
      'description' => __('Product List block.'),
      'render_template' => 'template-parts/blocks/product-section.php',
      'category' => 'layout ',
      'icon' => 'edit-page',
      'keywords' => ['product-section'],
    ]);
  }
}