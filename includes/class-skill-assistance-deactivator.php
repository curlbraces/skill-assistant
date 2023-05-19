<?php

/**
 * Fired during plugin deactivation
 *
 * @link       https://www.seasonalcoder.com/skill-assistance
 * @since      1.0.0
 *
 * @package    Skill_Assistance
 * @subpackage Skill_Assistance/includes
 */

/**
 * Fired during plugin deactivation.
 *
 * This class defines all code necessary to run during the plugin's deactivation.
 *
 * @since      1.0.0
 * @package    Skill_Assistance
 * @subpackage Skill_Assistance/includes
 * @author     Seasonal Coder <messsage@seasonalcoder.com>
 */
class Skill_Assistance_Deactivator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function deactivate() {

		flush_rewrite_rules( );
	}

}
