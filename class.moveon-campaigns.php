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
	 * the markup for the petition embed
	 *
	 * @since    1.0.0
	 * @var      string
	 */
	private $embed_markup = '<iframe src="http://petitions.moveon.org/embed/widget.html?v=3&name=%s" class="moveon-petition" id="petition-embed" style="%s"></iframe>';

	/**
	 * Initialize the plugin
	 *
	 * @since     1.0.0
	 */
	private function __construct() {
		add_shortcode( 'moveon-campaigns-petition', array( $this, 'petition_shortcode' ) );
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

	/**
	 * Return or echo the markup for a particular petition
	 *
	 * @since     1.0.0
	 * @param     string name -- the shortname of the petition, the string in the first URI segement of the petition 
	 * @param     string style -- some CSS to apply to the iframe that will contain the peitition
	 * @param 	  bool return -- echos if false (default), returns the markup as a string if true
	 * @return    string or null
	 */
	public function petition( $name, $style='', $return=false) {
		
		//generally, we should enforce that all petition embeds must be at least 450px high and 260px wide -- otherwise display will be poor
		$style = ( !$style ) ? "min-height:450px; min-width:260px;" : $style;

		$markup = sprintf( $this->embed_markup, $name, $style );

		if ( $return ) {
			return $markup;
		}
		
		echo $markup;
	}

	/**
	 * processing function for the peititons shortcode
	 *
	 * @since     1.0.0
	 * @return    string
	 */

	public function petition_shortcode( $atts ) {
		
		//we'll default shortcode petitions to be 500 wide and 400 high since largely they'll appear in the body of txt
		extract( shortcode_atts( array(
			'name' => '',
			'width' => '500',
			'height' => '400',
		), $atts ) );

		if ( trim($name) ) {
			return $this->petition( $name, "height:".$height."px; width:".$width."px", true );	
		}else{
			return false;
		}
	}


}//class