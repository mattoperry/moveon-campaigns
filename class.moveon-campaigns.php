<?php
/**
 * MoveOn Campaigns -- feature MoveOn campaigns in WordPress
 *
 * @package   Moveon_Campaigns
 * @author    Matt Perry
 * @license   GPL-2.0+
 * @link      http://moveon.org
 * @copyright 2013 MoveOn.org
 */

/**
 * MoveOn Campaigns Class
 *
 * @package MoveOn_Campaigns
 * @author  Matt Perry
 */
class Moveon_Campaigns {

	/**
	 * Plugin version
	 *
	 * @since   1.0.0
	 * @var     string
	 */
	protected $version = '1.0.0';

	/**
	 * Instance of this class.
	 *
	 * @since    1.0.0
	 * @var      object
	 */
	protected static $instance = null;

	/**
	 * shortname for the plugin
	 *
	 * @since    1.0.0
	 * @var      string
	 */
	protected $shortname = 'moveon-campaigns';

	/**
	 * Initialize the plugin
	 *
	 * @since     1.0.0
	 */
	private function __construct() {

	}

	/**
	 * Return an instance of this class.
	 *
	 * @since     1.0.0
	 * @return    object    A single instance of this class.
	 */
	public static function get_instance() {

		// If the single instance hasn't been set, set it now.
		if ( null == self::$instance ) {
			self::$instance = new self;
		}

		return self::$instance;
	}
}//class