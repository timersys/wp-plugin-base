<?php
	$options = get_option( $this->options_name );
	/* General Settings
	===========================================*/
	
	$this->settings['enable'] = array(
		'title'   => __( 'Enable / Disable' , $this->WPB_PREFIX),
		'desc'    => __( 'Enable / Disable the Social PopUP plugin.' , $this->WPB_PREFIX),
		'std'     => 'true',
		'type'    => 'select',
		'section' => 'general',
		'choices' => array(
			'true' => __( 'Enabled' , $this->WPB_PREFIX),
			'false' => __( 'Disabled' , $this->WPB_PREFIX)
		)
	);
	
	$this->settings['credits'] = array(
		'title'   => __( 'Credits Url' , $this->WPB_PREFIX),
		'desc'    => __( 'Give us some support by enabling the small link on footer.' , $this->WPB_PREFIX),
		'std'     => 'false',
		'type'    => 'select',
		'section' => 'general',
		'choices' => array(
			'true' => __( 'Yes' , $this->WPB_PREFIX),
			'false' => __( 'No' , $this->WPB_PREFIX)
		)
	);


	$this->settings['google'] = array(
		'title'   => __( 'Google "+1" Url' , $this->WPB_PREFIX),
		'desc'    => __( 'The Google url you want to +1 (include "http://"). Leave empty for current visitor page.' , $this->WPB_PREFIX),
		'std'     => '',
		'type'    => 'text',
		'section' => 'general'
	);

	$this->settings['twitter'] = array(
		'title'   => __( 'Twitter Username' , $this->WPB_PREFIX),
		'desc'    => __( 'Your twitter username without "@" sign.' , $this->WPB_PREFIX),
		'std'     => 'chifliiiii',
		'type'    => 'text',
		'section' => 'general'
	);

	$this->settings['facebook'] = array(
		'title'   => __( 'Facebook Url' , $this->WPB_PREFIX),
		'desc'    => __( 'You facebook page (include "http://").' , $this->WPB_PREFIX),
		'std'     => 'https://www.facebook.com/pages/Timersys/146687622031640',
		'type'    => 'text',
		'section' => 'general'
	);
	
	$this->settings['example_heading'] = array(
		'section' => 'general',
		'title'   => '', // Not used for headings.
		'desc'    => 'Advanced settings',
		'type'    => 'heading'
	);
	
	$this->settings['close'] = array(
		'title'   => __( 'Show Close Button' , $this->WPB_PREFIX),
		'desc'    => __( 'Enable / Disable the close button.' , $this->WPB_PREFIX),
		'std'     => 'true',
		'type'    => 'select',
		'section' => 'general',
		'choices' => array(
			'true' => __( 'Yes' , $this->WPB_PREFIX),
			'false' => __( 'No' , $this->WPB_PREFIX)
		)
	);

	$this->settings['close-advanced'] = array(
		'title'   => __( 'Close Advanced keys' , $this->WPB_PREFIX),
		'desc'    => __( 'If enabled, users can close the popup by pressing the escape key or clicking outside of the popup.' , $this->WPB_PREFIX),
		'std'     => 'true',
		'type'    => 'select',
		'section' => 'general',
		'choices' => array(
			'true' => __( 'Enabled' , $this->WPB_PREFIX),
			'false' => __( 'Disabled' , $this->WPB_PREFIX)
		)
	);
	
	$this->settings['days-no-click'] = array(
		'title'   => __( 'Days until popup shows again?' , $this->WPB_PREFIX),
		'desc'    => __( 'When a user closes the popup he won\'t see it again until all these days pass' , $this->WPB_PREFIX),
		'std'     => '99',
		'type'    => 'text',
		'section' => 'general'
	);

	$this->settings['seconds-to-show'] = array(
		'title'   => __( 'Seconds for popup to appear ?' , $this->WPB_PREFIX),
		'desc'    => __( 'After the page is loaded, popup will be shown after X seconds' , $this->WPB_PREFIX),
		'std'     => '1',
		'type'    => 'text',
		'section' => 'general'
	);
	
	$this->settings['example_checkbox'] = array(
		'section' => 'other',
		'title'   => __( 'Example Checkbox' , $this->WPB_PREFIX),
		'desc'    => __( 'This is a description for the checkbox.' , $this->WPB_PREFIX),
		'type'    => 'checkbox',
		'std'     => 1 // Set to 1 to be checked by default, 0 to be unchecked by default.
	);
	
	$this->settings['example_heading'] = array(
		'section' => 'other',
		'title'   => '', // Not used for headings.
		'desc'    => 'Advanced settings',
		'type'    => 'heading'
	);
	
	$this->settings['example_radio'] = array(
		'section' => 'other',
		'title'   => __( 'Example Radio' , $this->WPB_PREFIX),
		'desc'    => __( 'This is a description for the radio buttons.' , $this->WPB_PREFIX),
		'type'    => 'radio',
		'std'     => '',
		'choices' => array(
			'choice1' => 'Choice 1',
			'choice2' => 'Choice 2',
			'choice3' => 'Choice 3'
		)
	);
	
		
	/* Styling
	===========================================*/
	
	$this->settings['template'] = array(
		'section' => 'styling',
		'title'   => __( 'Template' , $this->WPB_PREFIX),
		'desc'    => __( 'Edit the default template. Add or remove buttons with {twitter}, {facebook}, {google} and edit or add your custom HTML.' , $this->WPB_PREFIX).'<button class="reset_html" value="reset_html">'.__( 'RESET HTML CODE' , $this->WPB_PREFIX).'</button>',
		'type'    => 'textarea',
		'std'     => "<div id='spu-title'>Please support the site</div>
<div id='spu-msg-cont'>
     <div id='spu-msg'>
     By clicking any of these buttons you help our site to get better </br>
     {twitter} {facebook} {google}
     </div>
    <div class='step-clear'></div>
</div>"
	);
	$this->settings['css'] = array(
		'section' => 'styling',
		'title'   => __( 'CSS Rules' , $this->WPB_PREFIX),
		'desc'    => __( 'This are some rules for the default template. Feel free to create yours.' , $this->WPB_PREFIX).'<button class="reset_css">'.__( 'RESET CSS CODE' , $this->WPB_PREFIX).'</button>',
		'type'    => 'textarea',
		'std'     => ".spu-button {
		margin-left:15px;
		margin-left: 15px;
		display: inline-table;
		margin-top: 12px;
		vertical-align: middle;
}
#spu-msg-cont {
	border-bottom:1px solid#ccc;
	border-top:1px solid#ccc;
	background-image:linear-gradient(bottom,#D8E7FC 0%,#EBF2FC 65%);
	background-image:-o-linear-gradient(bottom,#D8E7FC 0%,#EBF2FC 65%);
	background-image:-moz-linear-gradient(bottom,#D8E7FC 0%,#EBF2FC 65%);
	background-image:-webkit-linear-gradient(bottom,#D8E7FC 0%,#EBF2FC 65%);
	background-image:-ms-linear-gradient(bottom,#D8E7FC 0%,#EBF2FC 65%);
	background-image:-webkit-gradient(linear,left bottom,left top,color-stop(0,#D8E7FC),color-stop(0.85,#EBF2FC));
	padding:16px;
}
#spu-msg {
	margin:0 0 22px;
}
.step-clear {
	clear:both!important;
}
#spu-title {
	font-family:'Lucida Sans Unicode,Lucida Grande,sans-serif!important;
	font-size:12px;
	padding:12px 0 9px 10px;
	font-size:16px;
}"
	);
	
	$this->settings['bg_opacity'] = array(
		'section' => 'styling',
		'title'   => __( 'Opacity' , $this->WPB_PREFIX),
		'desc'    => __( 'Change background opacity. Default is 0.65' , $this->WPB_PREFIX),
		'type'    => 'text',
		'std'     => '0.65'
	);
	
				
	/* Display Rules
	===========================================*/
	
	$this->settings['mobiles'] = array(
		'title'   => __( 'Mobiles / Tablets' , $this->WPB_PREFIX),
		'desc'    => __( 'If enabled, popup will show in mobiles, tablets, iphones, etc .' , $this->WPB_PREFIX),
		'std'     => 'true',
		'type'    => 'select',
		'section' => 'display_rules',
		'choices' => array(
			'true' => __( 'Enabled' , $this->WPB_PREFIX),
			'false' => __( 'Disabled' , $this->WPB_PREFIX)
		)
	);
	
	
	
	$this->settings['where'] = array(
		'section' => 'display_rules',
		'title'   => __( 'Show in' , $this->WPB_PREFIX),
		'type'    => 'checkbox',
		'std'     => array("everywhere"),
		'desc'    => __( 'Where to show popup.', $this->WPB_PREFIX),
		'choices' => array(
					'home' 		=> __( 'Home', $this->WPB_PREFIX),
					'pages' 	=> __( 'Pages', $this->WPB_PREFIX),
					'posts' 	=> __( 'Posts', $this->WPB_PREFIX),
					'everywhere' => __( 'Everywhere', $this->WPB_PREFIX)
		)
	);

	$this->settings['show_to'] = array(
		'section' => 'display_rules',
		'title'   => __( 'Show to' , $this->WPB_PREFIX),
		'type'    => 'checkbox',
		'std'     => array("logged","nologged"),
		'desc'    => '',
		'choices' => array(
					'logged' 	=> __( 'Logged in users', $this->WPB_PREFIX),
					'nologged' 	=> __( 'Non Logged users', $this->WPB_PREFIX)
		)
	);

	$this->settings['roles'] = array(
		'section' => 'display_rules',
		'title'   => __( 'User roles' , $this->WPB_PREFIX),
		'type'    => 'checkbox',
		'std'     => array("Administrator","Editor","Author","Contributor","Subscriber"),
		'desc'    => __( 'Choose which user roles will see the popup.( Logged in users must be checked )',$this->WPB_PREFIX) ,
		'choices' => array(
					'Administrator' 	=> __( 'Administrator', $this->WPB_PREFIX),
					'Editor' 			=> __( 'Editor', $this->WPB_PREFIX),
					'Author' 			=> __( 'Author', $this->WPB_PREFIX),
					'Contributor' 		=> __( 'Contributor', $this->WPB_PREFIX),
					'Subscriber' 		=> __( 'Subscriber', $this->WPB_PREFIX),
		)
	);

	$this->settings['show_if'] = array(
		'section' => 'display_rules',
		'title'   => __( 'Show only if' , $this->WPB_PREFIX),
		'type'    => 'checkbox',
		'std'     => '',
		'desc'    => __( 'Choose which user roles will see the popup.( Logged in users must be checked )',$this->WPB_PREFIX) ,
		'choices' => array(
					'never_commented' 	=> __( 'The user has never left a comment', $this->WPB_PREFIX),
					'search_engine' 	=> __( 'The user arrived via a search engine. ', $this->WPB_PREFIX),
					'internal' 			=> __( 'The user did not arrive on this page via another page on your site. ', $this->WPB_PREFIX)
		)
	);
	
	$this->settings['referer'] = array(
		'title'   => __( 'Show only if' , $this->WPB_PREFIX),
		'desc'    => __( 'The user arrived via the following referrer' , $this->WPB_PREFIX),
		'std'     => '',
		'type'    => 'text',
		'section' => 'display_rules'
	);

	$this->settings['on_url'] = array(
		'title'   => __( 'Show only if' , $this->WPB_PREFIX),
		'desc'    => __( 'The user is on a certain URL (enter one URL per line)' , $this->WPB_PREFIX),
		'std'     => '',
		'type'    => 'textarea',
		'section' => 'display_rules'
	);

	$this->settings['not_on_url'] = array(
		'title'   => __( 'Show only if' , $this->WPB_PREFIX),
		'desc'    => __( 'The user is NOT on a certain URL (enter one URL per line)' , $this->WPB_PREFIX),
		'std'     => '',
		'type'    => 'textarea',
		'section' => 'display_rules'
	);

	
	/**
	* Debugging Area
	*/
	$days = isset($options['days-no-click']) ? $options['days-no-click'] : '99';
	$this->settings['clear_cookies'] = array(
		'section' => 'debugging',
		'title'   => __( 'Delete Cookies' , $this->WPB_PREFIX),
		'type'    => 'button',
		'onclick' => "return clearCookie('spushow');",
		'class'   => 'warning', // Custom class for CSS
		'desc'    => sprintf( __( 'If you already closed the popup and don\'t want to wait for %s days, click this button to see the popup again.', $this->WPB_PREFIX ), $days)
	);	
	
	$this->settings['reset_plugin'] = array(
		'section' => 'debugging',
		'title'   => __( 'Reset Plugin' , $this->WPB_PREFIX),
		'type'    => 'checkbox',
		'std'     => 0,
		'class'   => 'warning', // Custom class for CSS
		'desc'    => __( 'Check this box and click "Save Changes" below to reset the plugin options to their defaults.' )
	);
	