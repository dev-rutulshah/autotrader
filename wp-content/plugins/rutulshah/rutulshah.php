<?php
/**
* Plugin Name: Rutul Shah
* Plugin URI: https://www.rutulshah.com/
* Description: This plugin will a blurb at the end of each posts
* Version: 1.0
* Author: Rutul Shah
* Author URI: http://rutulshah.com/
**/

add_filter( 'the_content', 'my_static_text');
/**
 * @uses is_single()
 */
function my_static_text( $content ) {

    if ( is_single() )
        // Add static text to the end of each post
        $content = sprintf('%s This is a static text that will appear at the end of each post. Feel free to edit the text from plugin file', $content);

    // Returns updated content.
    return $content;
}