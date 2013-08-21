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

$MoveOnCampaigns = MoveOn_Campaigns::get_instance();

?>