<?php
add_action( 'wp_enqueue_scripts', 'enqueue_scripts_tbtbb' );
function enqueue_scripts_tbtbb() {
	$tbtbb_options = get_option( 'tbtbb_options' );
	if ( $tbtbb_options === 'class' ) {
		$script = "
jQuery(document).ready(function(){
	jQuery('.wp-block-button.blank > .wp-block-button__link').each(function(){
		if ( jQuery(this).attr('target') != '_blank' ) {
			jQuery(this).attr('target', '_blank');
			jQuery(this).attr('rel', 'external noreferrer noopener');
			jQuery(this).append('<span class=\"screen-reader-text\" style=\"clip:rect(1px,1px,1px,1px);overflow:hidden;position:absolute !important;height:1px;width:1px;\"> " . esc_html__( 'Opens in a new window', 'target-blank-to-button-block' ) . "</span>');
		}
	});
});
		";
	} else {
		$script = "
jQuery(document).ready(function(){
	jQuery('.wp-block-button__link').each(function(){
		if ( jQuery(this).attr('target') != '_blank' ) {
			jQuery(this).attr('target', '_blank');
			jQuery(this).attr('rel', 'external noreferrer noopener');
			jQuery(this).append('<span class=\"screen-reader-text\" style=\"clip:rect(1px,1px,1px,1px);overflow:hidden;position:absolute !important;height:1px;width:1px;\"> " . esc_html__( 'Opens in a new window', 'target-blank-to-button-block' ) . "</span>');
		}
	});
});
		";
	}
	if ( ! wp_script_is( 'jquery', 'done' ) ) {
		wp_enqueue_script( 'jquery' );
	}
	wp_add_inline_script( 'jquery-migrate', $script );
}