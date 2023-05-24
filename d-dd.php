<?php

/**
 * Plugin Name:       d-dd
 * Plugin URI:        https://mediumrare.dev/
 * Description:       Add debug functions d() and dd().
 * Version:           1.0.0
 * Requires at least: 6.0
 * Requires PHP:      7.4
 * Author:            Medium Rare
 * Author URI:        https://mediumrare.dev/
 * License:           GPL v3
 * License URI:       https://www.gnu.org/licenses/gpl-3.0.txt
 * Text Domain:       d-dd
 */

defined( 'ABSPATH' ) || exit;

if ( !function_exists( 'd' ) )
{
    function d( $var )
    {
        echo "<pre style=\"max-height: 800px; z-index: 9999; position: relative; overflow-y: scroll; white-space: pre-wrap; word-wrap: break-word; padding: 10px 15px; border: 1px solid #fff; background-color: #161616; text-align: left; line-height: 1.5; font-family: Courier; font-size: 16px; color: #fff; \">";
        print_r( $var );
        echo "</pre>";
    }
}

if ( !function_exists( 'dd' ) )
{
    function dd( $var )
    {
        d( $var );
        exit;
    }
}

