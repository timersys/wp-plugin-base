<?php

/**********
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

  
class WP_Plugin_Base {

	protected $WPB_PREFIX		=	'wpb';
	protected $WPB_SLUG			=	'wp-plugin-base'; // Need to match plugin folder name
	protected $WPB_PLUGIN_NAME	=	'WP Plugin Base';
	protected $WPB_VERSION		=	'1.0';
	protected $WPB_ABS_PATH;	
	protected $WPB_REL_PATH;
	protected $WPB_PLUGIN_URL;
	protected $PLUGIN_FILE;
	
	var $_options;
	var $_credits;
	var $_defaults;
	
	function __construct() {
	
		$this->WPB_ABS_PATH 	= WP_PLUGIN_DIR . '/'. $this->WPB_SLUG;
		$this->WPB_REL_PATH		=	dirname( plugin_basename( __FILE__ ) );
		$this->WPB_PLUGIN_URL	=	WP_PLUGIN_URL . '/'. $this->WPB_SLUG;
	
		//activation hook
		register_activation_hook( __FILE__, array(&$this,'activate' ));        
				
		//register database options
        add_action( 'admin_init', array(&$this,'register_options' ));
				
		//load js and css 
		add_action( 'init',array(&$this,'load_base_scripts' ) );	
		
		//adding settings links on plugins page
		add_filter( 'plugin_action_links', array(&$this,'add_settings_link'), 10, 2 );
		
		//translations
		
		if ( function_exists ('load_plugin_textdomain') ){
			load_plugin_textdomain ( $this->WPB_PREFIX, false, $this->WPB_REL_PATH . '/languages/' );
		}
		
		
		//Ajax hooks here	
	
		
	}	
		
	/**
	* Check technical requirements before activating the plugin. 
	* Wordpress 3.0 or newer required
	*/
	function activate()
	{
		if ( ! function_exists ('register_post_status') ){
			deactivate_plugins (basename (dirname (__FILE__)) . '/' . basename (__FILE__));
			wp_die( __( "This plugin requires WordPress 3.0 or newer. Please update your WordPress installation to activate this plugin.", $this->WPB_PREFIX ) );
		}
		
	}	


	
	/**
	* Add a settings link to the Plugins page
	*
	* http://www.whypad.com/posts/wordpress-add-settings-link-to-plugins-page/785/
	*/
	function add_settings_link( $links, $file )
	{
		
		
		if ( $file == $this->PLUGIN_FILE ){
			$settings_link = '<a href="options-general.php?page='.$this->WPB_SLUG.'">' . __( "Settings" ) . '</a>';
	
			array_unshift( $links, $settings_link );
		}
	
		return $links;
	}

	/**
	*	function that register plugin options 
	*/
 	 function register_options()
	{
		register_setting( $this->WPB_PREFIX.'_options', $this->WPB_PREFIX.'_settings' );
		
	}



	/**
	* Load scripts and styles
	*/
	function load_base_scripts()
	{
			
		
			if( is_admin() && isset($_GET['page']) && $_GET['page'] == $this->WPB_SLUG )
			{
				wp_enqueue_style('wsi-admin-css', plugins_url( 'admin/assets/style.css', __FILE__ ) , __FILE__,'','all',$this->WPB_VERSION );
			}	
		
	}
	
	 /**
	 * Render Options Page
	 */
	 function options_page()
	{
		global $wpb_page;
		?>
		<form method="post" action="options.php" >
		<?php
		
		    settings_fields( $this->WPB_PREFIX.'_options' );
			
			//wich tab page we are now
			$wpb_page = isset( $_REQUEST['wpb_page'] ) ?  $_REQUEST['wpb_page'] : 'index';
			
			//Headers and tabs
			require_once( dirname (__FILE__).'/admin/header.php');
			
			//Tabs content page
			require_once( dirname (__FILE__).'/admin/tabs/'.$wpb_page.'.php');	
		
		?>
		</form>
		<?php
		
		//Sidebar credits
		require_once( dirname (__FILE__).'/admin/sidebar.php');	
		
		
	}
	
		
	
	
}
