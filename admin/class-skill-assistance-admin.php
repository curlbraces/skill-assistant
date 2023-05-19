<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://www.seasonalcoder.com/skill-assistance
 * @since      1.0.0
 *
 * @package    Skill_Assistance
 * @subpackage Skill_Assistance/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Skill_Assistance
 * @subpackage Skill_Assistance/admin
 * @author     Seasonal Coder <messsage@seasonalcoder.com>
 */
class Skill_Assistance_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Skill_Assistance_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Skill_Assistance_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/skill-assistance-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Skill_Assistance_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Skill_Assistance_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/skill-assistance-admin.js', array( 'jquery' ), $this->version, false );

	}

	public function register_custom_post_type(){

		  $labels = array(

			'name'                     => __( 'Doctor Listing', 'skill-assistance' ),
			'singular_name'            => __( 'Doctor Listing', 'skill-assistance' ),
			'add_new'                  => __( 'Add New', 'skill-assistance' ),
			'add_new_item'             => __( 'Add New Doctor', 'skill-assistance' ),
			'edit_item'                => __( 'Edit Doctor', 'skill-assistance' ),
			'new_item'                 => __( 'New Doctor', 'skill-assistance' ),
			'view_item'                => __( 'View Doctor', 'skill-assistance' ),
			'view_items'               => __( 'View Doctor', 'skill-assistance' ),
			'search_items'             => __( 'Search Doctor', 'skill-assistance' ),
			'not_found'                => __( 'No Doctor found.', 'skill-assistance' ),
			'not_found_in_trash'       => __( 'No Doctor found in Trash.', 'skill-assistance' ),
			'parent_item_colon'        => __( 'Parent Doctor:', 'skill-assistance' ),
			'all_items'                => __( 'All Doctor', 'skill-assistance' ),
			'archives'                 => __( 'Doctor Archives', 'skill-assistance' ),
			'attributes'               => __( 'Doctor Attributes', 'skill-assistance' ),
			'insert_into_item'         => __( 'Insert into Doctor', 'skill-assistance' ),
			'uploaded_to_this_item'    => __( 'Uploaded to this Doctor', 'skill-assistance' ),
			'featured_image'           => __( 'Featured Image', 'skill-assistance' ),
			'set_featured_image'       => __( 'Set featured image', 'skill-assistance' ),
			'remove_featured_image'    => __( 'Remove featured image', 'skill-assistance' ),
			'use_featured_image'       => __( 'Use as featured image', 'skill-assistance' ),
			'menu_name'                => __( 'Doctor', 'skill-assistance' ),
			'filter_items_list'        => __( 'Filter Announcement list', 'skill-assistance' ),
			'filter_by_date'           => __( 'Filter by date', 'skill-assistance' ),
			'items_list_navigation'    => __( 'Doctor list navigation', 'skill-assistance' ),
			'items_list'               => __( 'Doctor list', 'skill-assistance' ),
			'item_published'           => __( 'Doctor published.', 'skill-assistance' ),
			'item_published_privately' => __( 'Doctor published privately.', 'skill-assistance' ),
			'item_reverted_to_draft'   => __( 'Doctor reverted to draft.', 'skill-assistance' ),
			'item_scheduled'           => __( 'Doctor scheduled.', 'skill-assistance' ),
			'item_updated'             => __( 'Doctor updated.', 'skill-assistance' ),
			'item_link'                => __( 'Doctor Link', 'skill-assistance' ),
			'item_link_description'    => __( 'A link to an Doctor.', 'skill-assistance' ),

		);

		$args = array(

			'labels'                => $labels,
			'description'           => __( 'organize and manage Doctors', 'skill-assistance' ),
			'public'                => false,
			'hierarchical'          => false,
			'exclude_from_search'   => false,
			'publicly_queryable'    => false,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'show_in_nav_menus'     => false,
			'show_in_admin_bar'     => false,
			'show_in_rest'          => true,
			'menu_position'         => null,
			'menu_icon'             => 'dashicons-megaphone',
			'capability_type'       => 'post',
			'capabilities'          => array(),
			'supports'              => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
			'taxonomies'            => array('category', 'post_tag'),
			'has_archive'           => true,
			'rewrite'               => array( 'slug' => 'doctor_listing' ),
			'query_var'             => true,
			'can_export'            => true,
			'delete_with_user'      => false,
			'template'              => array(),
			'template_lock'         => false,

		);

		register_post_type( 'doctor', $args );


		// Now register the taxonomy
		register_taxonomy('doctor_listing', array(
			'hierarchical' => true,
			'labels' => $labels,
			'show_ui' => true,
			'show_in_rest' => true,
			'show_admin_column' => true,
			'query_var' => true,
			'rewrite' => array( 'slug' => 'subject' ),
		));

	}

}
