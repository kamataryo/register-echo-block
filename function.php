<?php
/**funct
 * Plugin Name: Register Echo Block
 * Text Domain: register-echo-block
 * Version:     1.0.0
 */

add_action( 'enqueue_block_editor_assets', function() {
  wp_enqueue_script(
    'sandbox-wordpress-gutenberg-blocks',
    plugins_url( 'dist/main.js', __FILE__ ),
    [ 'wp-blocks', 'wp-element' ]
  );
} );
