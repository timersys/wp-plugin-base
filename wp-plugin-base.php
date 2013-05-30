<?php
/*
Plugin Name: Plugin Name Here
Plugin URI: Your site url
Description: ************
Version: 1.0
Author: timersys
Author URI: http://www.timersys.com
License: MIT License
Text Domain: ***
Domain Path: languages
*/

/*

**********
* License
****************************************************************************
*	Copyright (C) 2011-2013 Damian Logghe and contributors
*
*	Permission is hereby granted, free of charge, to any person obtaining
*	a copy of this software and associated documentation files (the
*	"Software"), to deal in the Software without restriction, including
*	without limitation the rights to use, copy, modify, merge, publish,
*	distribute, sublicense, and/or sell copies of the Software, and to
*	permit persons to whom the Software is furnished to do so, subject to
*	the following conditions:
*
*	The above copyright notice and this permission notice shall be
*	included in all copies or substantial portions of the Software.
*
*	THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
*	EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
*	MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
*	NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE
*	LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION
*	OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION
*	WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
****************************************************************************/


// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

require(dirname (__FILE__).'/WP_PLugin_Base.class.php');
  
class WP_Plugin_Base_example extends WP_Plugin_Base
{

	
	var $_options;
	var $_credits;
	var $_defaults;
	protected $sections;
	function __construct() {
		
		$this->WPB_PREFIX		=	'spu';
		$this->WPB_SLUG			=	'social-popup'; // Need to match plugin folder name
		$this->WPB_PLUGIN_NAME	=	'Social PopUP';
		$this->WPB_VERSION		=	'1.5';
		$this->PLUGIN_FILE		=   plugin_basename(__FILE__);
		$this->options_name		=   'spu_settings';
		
		$this->sections['general']      		= __( 'Main Settings', $this->WPB_PREFIX );
		$this->sections['styling']   			= __( 'Styling', $this->WPB_PREFIX );
		$this->sections['display_rules']        = __( 'Display Rules', $this->WPB_PREFIX );
		$this->sections['debugging']       		= __( 'Debugging', $this->WPB_PREFIX );
		//activation hook
		register_activation_hook( __FILE__, array(&$this,'activate' ));        
		
		//deactivation hook
		register_deactivation_hook( __FILE__, array(&$this,'deactivate' ));   
		
		//admin menu
		add_action( 'admin_menu',array(&$this,'register_menu' ) );
		
		//load js and css 
		add_action( 'init',array(&$this,'load_scripts' ),50 );	
		
		#$this->upgradePlugin();
			
		#$this->setDefaults();
		
		#$this->loadOptions();
		//Ajax hooks here	
		
		parent::__construct();
		
	
		
	}	
		
	/**
	* Check technical requirements before activating the plugin. 
	* Wordpress 3.0 or newer required
	*/
	function activate()
	{
		parent::activate();
		
		/*global $wpdb;
		$wpdb->query("CREATE TABLE IF NOT EXISTS `".$wpdb->base_prefix."wsm_monitor_index` (
				  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Index ID',
				  `activity_id` varchar(32) NOT NULL COMMENT 'What action was executed?',
				  `user_id` INT NULL COMMENT 'User''s ID',
				  `blog_id` INT NULL COMMENT 'Blog''s ID',
				  `i_datetime` datetime NOT NULL,
				  `data` text COMMENT 'Misc data associated with the query at hand',
			  PRIMARY KEY (`id`),
			  KEY (`activity_id`),
			  INDEX (`i_datetime`, `user_id`, `blog_id`)
			) ENGINE = MYISAM ;
		");
		*/
		do_action( $this->WPB_PREFIX.'_activate' );
		
		
	}	

	/**
	* Run when plugin is deactivated
	* Wordpress 3.0 or newer required
	*/
	function deactivate()
	{
		
	#	global $wpdb;
	#	$wpdb->query("DROP TABLE  `".$wpdb->base_prefix."wsm_monitor_index`");
		
		do_action( $this->WPB_PREFIX.'_deactivate' );
	}
	


	/**
	* function that register the menu link in the settings menu	and editor section inside the option page
	*/
	 function register_menu()
	{
		#add_options_page( 'WP Plugin Base', 'WP Plugin Base', 'manage_options', WPB_SLUG ,array(&$this, 'options_page') );
		add_menu_page( 'WP Simple Monitor', 'WP Simple Monitor', 'manage_options', $this->WPB_SLUG ,array(&$this, 'options_page') );
		
		#add_settings_section('wpb_forms', 'Settings', array(&$this, 'style_box_form'), 'spu_style_form');
		
		#add_settings_section('wpb_support', 'Support the plugin', array(&$this, 'spu_support_form'), 'spu-support');
	}

	/**
	* Load scripts and styles
	*/
	function load_scripts()
	{
		if(!is_admin())
		{
			
			#wp_enqueue_script('wsi-js', plugins_url( 'assets/js/wsi.js', __FILE__ ), array('jquery'),WSI_VERSION,true);
			#wp_enqueue_style('wsi-css', plugins_url( 'assets/css/style.css', __FILE__ ) , __FILE__,'','all',WSI_VERSION );
			#wp_localize_script( 'wsi-js', 'MyAjax', array( 'url' => site_url( 'wp-login.php' ),'admin_url' => admin_url( 'admin-ajax.php' ), 'nonce' => wp_create_nonce( 'wsi-ajax-nonce' ) ) );
			#wp_enqueue('codemirror');
		}

		
	}
	

	
		
	/**
	* Function to display the extended widget
	*/
	function display_widget()
	{
		#require_once( dirname (__FILE__).'/widget/widget.php');
		
	}
	
	/**
	* Load options to use later
	*/	
	function loadOptions()
	{

		$this->_options = get_option($this->WPB_PREFIX.'_settings',$this->_defaults);

		$this->_styling = get_option($this->WPB_PREFIX.'_styling',$this->_defaults);
		$this->_display_rules = get_option($this->WPB_PREFIX.'_display_rules',$this->_defaults);
	}
	
		
	/**
	* loads plugins defaults
	*/
	function setDefaults()
	{
		$this->_defaults = array( 'version' => $this->WPB_VERSION );		
	}
	
}

$wsi = new WP_Plugin_Base_example();