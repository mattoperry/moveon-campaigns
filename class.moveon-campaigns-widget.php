<?php

class Moveon_Campaigns_Widget extends WP_Widget {

	protected $MOC;

	public function __construct() {

		//register the widget
		parent::__construct(
			'moveon-campaigns-widget', // Base ID
			'MoveOn Campaigns', // Name
			array( 'description' => 'Display a MoveOn.org petition in your widget area' ) // Args
		);

		//ensure that we can get an instance of Moveon_Campaigns
		if (!class_exists( 'Moveon_Campaigns' ) ) {
			require_once( plugin_dir_path( __FILE__ ) . 'class.moveon-campaigns.php' );
		}

		$this->MOC = Moveon_Campaigns::get_instance();

	}

	public function widget( $args, $instance ) {
		
		$height = ( $instance['petition_height'] ) ?: '500';
		$style =  "min-width:270px;  height: {$height}px";

		$html = ( !empty( $instance['petition_id'] ) ) ? $this->MOC->petition( $instance['petition_id'], $style, true ) : '';	
		if ( $html ) {
			echo $args['before_widget'] . $html . $args['after_widget'];
		}
	}

 	public function form( $instance ) {


		$petition_id = ( !empty( $instance[ 'petition_id' ] ) ) ? $instance[ 'petition_id' ] : '';
		$petition_height = ( !empty( $instance[ 'petition_height' ] ) ) ? $instance[ 'petition_height' ] : '';

 		?>
		<p>
			<label for="<?php echo $this->get_field_name( 'petition_id' ); ?>"><?php echo 'Petition ID &nbsp &nbsp <a href="http://front.moveon.org/petitions-plugin" target="_blank" style="font-size: .8em;">[about]</a>'; ?></label> 
			<input class="widefat" id="<?php echo $this->get_field_id( 'petition_id' ); ?>" name="<?php echo $this->get_field_name( 'petition_id' ); ?>" type="text" value="<?php echo esc_attr( $petition_id ); ?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_name( 'petition_height' ); ?>"><?php echo 'Height &nbsp &nbsp <span style="font-size: .8em;">(in px)</span>'; ?></label> 
			<input class="" id="<?php echo $this->get_field_id( 'petition_height' ); ?>" name="<?php echo $this->get_field_name( 'petition_height' ); ?>" type="text" value="<?php echo esc_attr( $petition_height ); ?>" />
		</p>
		<?php
	}

	public function update( $new_instance, $old_instance ) {

		$instance = array();
		$instance['petition_id'] = ( sanitize_text_field( $new_instance['petition_id'] ) );

		$h = sanitize_text_field( $new_instance['petition_height'] );
		$instance['petition_height'] = ( is_numeric( $h ) && ( $h > 0 ) ) ? $h : '500';
		
		return $instance;
	}
}

?>