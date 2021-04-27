<?php
/**
 * Register all shortcodes
 *
 * @return null
 */
function register_shortcodes()
{
  add_shortcode('social-media', 'shortcode_social_media');
}
add_action('init', 'register_shortcodes');

/**
 * Social Media Shortcode Callback
 */
function shortcode_social_media()
{
  $html = '';
  return $html;
}