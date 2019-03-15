<?php
add_action( 'wp_enqueue_scripts', 'enqueue_scripts_tbtbb' );
function enqueue_scripts_tbtbb() {
	$tbtbb_options = get_option( 'tbtbb_options' );
	if ( $tbtbb_options === 'class' ) {
		$script = "jQuery(document).ready(function(){jQuery('.wp-block-button.blank > .wp-block-button__link').each(function(){if ( jQuery(this).attr('target') != '_blank' ) {jQuery(this).attr('target', '_blank');}});});";
	} else {
		$script = "jQuery(document).ready(function(){jQuery('.wp-block-button__link').each(function(){if ( jQuery(this).attr('target') != '_blank' ) {jQuery(this).attr('target', '_blank');}});});";
	}
	if ( ! wp_script_is( 'jquery', 'done' ) ) {
		wp_enqueue_script( 'jquery' );
	}
	wp_add_inline_script( 'jquery-migrate', $script );
}