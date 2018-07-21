<?php
/**
 * Settings: User's "Settings > Email" screen handler
 *
 * @package BuddyBoss
 * @subpackage SettingsScreens
 * @since 3.0.0
 */

/**
 * Show the notifications settings template.
 *
 * @since 1.5.0
 */
function bp_settings_screen_notification() {

	if ( bp_action_variables() ) {
		bp_do_404();
		return;
	}

	/**
	 * Filters the template file path to use for the notification settings screen.
	 *
	 * @since 1.6.0
	 *
	 * @param string $value Directory path to look in for the template file.
	 */
	bp_core_load_template( apply_filters( 'bp_settings_screen_notification_settings', 'members/single/settings/notifications' ) );
}