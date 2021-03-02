<?php
/**
 * Plugin Name: Disqus Comments Preview Fix
 * Version: 1.1
 * Plugin URI: http://crvmdev.net/
 * Description: Este plugin resulve los problemas de los comentarios en modo vista previa para algunos temas como NewsPaper y NewsMag.
 * Author: Christian R.
 * Author URI: https://crvmdev.net/
 * Requires at least: 5.0
 * Tested up to: 5.6.2
 *
 * Text Domain: fix-comments
 * Domain Path: /
 *
 * @package WordPress
 * @author Richard Watterson
 * @since 1.1
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_filter( 'comments_template', function ( $template ) {
    if (is_preview()){
        return ;
    }
	return $template;
},999);

