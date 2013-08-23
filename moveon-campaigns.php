<?php
/***
 *
 * MoveOn Campaigns
 *
 * @package   MoveOn_Campaigns
 * @author    Matt Perry matt.perry@moveon.org
 * @license   GPL-2.0+
 * @link      http://moveon.org
 * @copyright MoveOn.org
 *
 * @wordpress-plugin
 * Plugin Name: MoveOn_Campaigns
 * Plugin URI:  https://github.com/mattoperry/moveon-campaigns
 * Description: Feature MoveOn campaigns on your blog or website -- includes sidebar widgets, a content shortcode and more
 * Version:     1.0.0
 * Author:      Matt Perry, MoveOn.org
 * Author URI:  http://moveon.org
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
    die;
}

require_once( plugin_dir_path( __FILE__ ) . 'class.moveon-campaigns.php' );
require_once( plugin_dir_path( __FILE__ ) . 'class.moveon-campaigns-widget.php' );

//instantiate the plugin's class
$MoveOnCampaigns = Moveon_Campaigns::get_instance();

//register widgets
function moveon_campaigns_register_widgets() {
	register_widget( 'Moveon_Campaigns_Widget' );
}
add_action( 'widgets_init', 'moveon_campaigns_register_widgets' );

/** Theme wrapper functions **/

/**
 * displays a petition
 *
 * @since     1.0.0
 * @param     string name -- the shortname of the petition, the string in the first URI segement of the petition 
 * @param     string style -- some CSS to apply to the iframe that will contain the peitition
 * @return    null
 */

function moveon_campaigns_petition( $name, $style ) {
	global $MoveOnCampaigns;
	$MoveOnCampaigns->petition( $name, $style );
}

?>