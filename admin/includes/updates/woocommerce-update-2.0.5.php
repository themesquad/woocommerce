<?php
/**
 * Update WC to 2.5
 *
 * @author 		WooThemes
 * @category 	Admin
 * @package 	WooCommerce/Admin/Updates
 * @version     2.0.5
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $wpdb, $woocommerce;

// Modify Downloadable Product Permissions Table Keys
$wpdb->query( "ALTER TABLE {$wpdb->prefix}woocommerce_downloadable_product_permissions DROP PRIMARY KEY" );
$wpdb->query( "ALTER TABLE {$wpdb->prefix}woocommerce_downloadable_product_permissions ADD COLUMN permission_id bigint(20) NOT NULL auto_increment PRIMARY KEY" );