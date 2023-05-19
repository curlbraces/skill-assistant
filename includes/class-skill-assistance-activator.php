<?php

/**
 * Fired during plugin activation
 *
 * @link       https://www.seasonalcoder.com/skill-assistance
 * @since      1.0.0
 *
 * @package    Skill_Assistance
 * @subpackage Skill_Assistance/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Skill_Assistance
 * @subpackage Skill_Assistance/includes
 * @author     Seasonal Coder <messsage@seasonalcoder.com>
 */
class Skill_Assistance_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {

		flush_rewrite_rules( );

	}

}
