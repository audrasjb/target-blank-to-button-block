<?php
/**
 * Plugin options
 */

add_action('admin_menu', 'tbtbb_register_custom_submenu_page');
 
function tbtbb_register_custom_submenu_page() {
    add_submenu_page(
        'themes.php',
        __( 'Button block target', 'target-blank-to-button-block' ),
        __( 'Button block target', 'target-blank-to-button-block' ),
        'manage_options',
        'tbtbb-submenu-page',
        'tbtbb_submenu_page_callback' );
}
 
function tbtbb_submenu_page_callback() {
	?>
	<div class="wrap">
		<h1><?php esc_html_e( 'Add target blank to Button Block', 'target-blank-to-button-block' ); ?></h1>
		<form action="options.php" method="post">
			<?php settings_fields( 'tbtbb_options_group' ); ?>
			<?php do_settings_sections( 'tbtbb_options_group' ); ?>
			<?php 
			$tbtbb_options = get_option( 'tbtbb_options' ); 
			$tbtbb_options_radio = 'all';
			if ( $tbtbb_options === 'class' ) {
				$tbtbb_options_radio = 'class';
			}
			?>
			<p class="description">
				<?php esc_html_e( 'Specify how target blank is supposed to be added to Button Blocks', 'target-blank-to-button-block' ); ?>
			</p>
			<p>
				<input type="radio" id="tbtbb_1" name="tbtbb_options" value="all" <?php checked( 'all', $tbtbb_options_radio ); ?> />
				<label for="tbtbb_1"><?php esc_html_e( 'All', 'target-blank-to-button-block' ); ?></label>
			</p>
			<p>
				<input type="radio" id="tbtbb_2" name="tbtbb_options" value="class" <?php checked( 'class', $tbtbb_options_radio ); ?> /> 
				<label for="tbtbb_2"><?php esc_html_e( 'Only those with "blank" class', 'target-blank-to-button-block' ); ?></label>
			</p>
			<?php submit_button(); ?>
			<?php wp_nonce_field( 'tbtbb-submenu-page-save', 'tbtbb-submenu-page-save-nonce' ); ?>
		</form>
		<h2><?php esc_html_e( 'How to add a "blank" class to the Button Block?', 'target-blank-to-button-block' ); ?></h2>
		<img src="<?php echo plugins_url( 'assets/screenshot-1.png', dirname( __FILE__ ) ); ?>" alt="" />
	</div>
	<?php
} 

add_action( 'admin_init', 'tbtbb_register_settings' );
function tbtbb_register_settings() {
   register_setting( 'tbtbb_options_group', 'tbtbb_options' );
}
