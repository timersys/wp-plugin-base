<?php

// HOOKABLE: 
	do_action( WPB_PREFIX."_admin_ui_header_start" );

	
	
?>
<style>
h1 {
	color: #333333;
	text-shadow: 1px 1px 1px #FFFFFF; 
	font-size: 2.8em;
	font-weight: 200;
	line-height: 1.2em;
	margin: 0.2em 200px 0.6em 0.2em;
}
h2 .nav-tab {
	color: #21759B;
}
h2 .nav-tab-active {
	color: #464646;
	text-shadow: 1px 1px 1px #FFFFFF;
}
hr{ 
	border-color: #EEEEEE;
	border-style: none none solid;
	border-width: 0 0 1px;
	margin: 2px 0 15px;
} 
.wsldiv { 
	margin: 25px 40px 0 20px; 
}
.wsldiv p{  
	line-height: 1.8em;
}
.wslgn{ 
	margin-left:20px;
}
.wslgn p{ 
	margin-left:20px;
}
.wslpre{ 
	font-size:14m;
	border:1px solid #E6DB55; 
	border-radius: 3px;
	padding:5px;
	width:650px;
}
ul {
	list-style: disc outside none;
}
 
.thumbnails:before,
.thumbnails:after {
  display: table;
  line-height: 0;
  content: "";
}

.thumbnail {
  display: block;
  padding: 4px;
  line-height: 20px;
  border: 1px solid #ddd;
  -webkit-border-radius: 4px;
	 -moz-border-radius: 4px;
		  border-radius: 4px;
  -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.055);
	 -moz-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.055);
		  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.055);
  -webkit-transition: all 0.2s ease-in-out;
	 -moz-transition: all 0.2s ease-in-out;
	   -o-transition: all 0.2s ease-in-out;
		  transition: all 0.2s ease-in-out;
}

a.thumbnail:hover {
  border-color: #0088cc;
  -webkit-box-shadow: 0 1px 4px rgba(0, 105, 214, 0.25);
	 -moz-box-shadow: 0 1px 4px rgba(0, 105, 214, 0.25);
		  box-shadow: 0 1px 4px rgba(0, 105, 214, 0.25);
}

.thumbnail > img {
  display: block;
  max-width: 100%;
  margin-right: auto;
  margin-left: auto;
}

.thumbnail .caption {
  padding: 9px;
  color: #555555;
}
.span4 {  
	width: 220px; 
}
#wp-social-login-connect-with {  
	font-size: 14px; 
}
#wp-social-login-connect-options {  
	margin:5px; 
}
.wsl_connect_with_provider {  
	text-decoration:none; 
	cursor:not-allowed;
} 
#wsl-w-panel {
	background: linear-gradient(to top, #F5F5F5, #FAFAFA) repeat scroll 0 0 #F5F5F5;
	border-color: #DFDFDF;
	border-radius: 3px 3px 3px 3px;
	border-style: solid;
	border-width: 1px;
	font-size: 13px;
	line-height: 2.1em;
	margin: 20px 0;
	overflow: auto;
	-padding: 23px 10px 12px;
	padding: 5px;
	position: relative;
}
#wsl-w-panel-dismiss:before {
    background: url("images/xit.gif") no-repeat scroll 0 17% transparent;
    content: " ";
    height: 100%;
    left: -12px;
    position: absolute;
    width: 10px;
	margin: -2px 0;
}
#wsl-w-panel-dismiss:hover:before {
    background-position: 100% 17%;
}
#wsl-w-panel-dismiss {
	font-size: 13px;
	line-height: 1;
	padding: 8px 3px;
	position: absolute;
	right: 10px;
	text-decoration: none;
	top: 0px;
}
#wsl-w-panel-updates-tr {
	display:none;  
} 
.hideinside {
	/* display:none; */
} 

.wp-editor-textarea{
  width:98%;
  padding:1%;
  font-family:"Trebuchet MS", Arial, verdana, sans-serif;
}
.wp-editor-textarea textarea{
  height:100px;
}

.wp-editor-textarea input {
	width: auto !important;
}

#wsl_i18n_pre {
	height: 800px; 
	overflow-x: hidden;
	overflow-y: scroll;
}  
#wsl_i18n {
	width:530px; 
	width: 560px;
	display:none;
	padding: 10px; 
	border: 1px solid #ddd; 
	background-color: #fff;  
	float:left;
	margin-left: 20px;
	padding: 0 10px 10px; 
} 
#wsl_i18n_form {
	width:420px; 
	width:340px; 
	display:none;
	padding: 10px; 
	border: 1px solid #ddd; 
	background-color: #fff;
	float:left; 
}
#wsl_i18n_cla {
	display:none;
	padding: 10px;  
	border: 1px solid #ddd; 
	background-color: #fff; 
	
	width: 50%;
	margin: 0px auto;
	margin-top:50px;
}
</style>
<a name="wsltop"></a>
<div class="wsldiv">
<h1>
	<?php echo WPB_PLUGIN_NAME; ?>

	<small><?php echo WPB_VERSION ?></small>

</h1>
<?php
global $wpb_page;
?>
<h2 class="nav-tab-wrapper">
<a class="nav-tab <?php if( $wpb_page == 'index' ) echo "nav-tab-active"; ?>"  href="?page=<?php echo WPB_SLUG;?>&wpb_page=index"><?php _e('Networks',WPB_PREFIX);?></a>
<a class="nav-tab <?php if( $wpb_page == 'settings' ) echo "nav-tab-active"; ?>"  href="?page=<?php echo WPB_SLUG;?>&wpb_page=settings"><?php _e('Settings', WPB_PREFIX);?></a>
</h2>

<div id="wsl_admin_tab_content">
<?php
// HOOKABLE: 
do_action( WPB_PREFIX."_admin_ui_header_end" );
