<?php
// HOOKABLE: 
	do_action( $this->WPB_PREFIX."_admin_ui_header_start" );
?>

<div class="wsldiv">
<h1>
	<?php echo $this->WPB_PLUGIN_NAME; ?>

	<small><?php echo $this->WPB_VERSION ?></small>

</h1>
<?php
global $wpb_page;
?>
<h2 class="nav-tab-wrapper">
	<a class="nav-tab <?php if( $wpb_page == 'index' ) echo "nav-tab-active"; ?>"  href="?page=<?php echo $this->WPB_SLUG;?>&wpb_page=index"><?php _e('Networks',$this->WPB_PREFIX);?></a>
	<a class="nav-tab <?php if( $wpb_page == 'settings' ) echo "nav-tab-active"; ?>"  href="?page=<?php echo $this->WPB_SLUG;?>&wpb_page=settings"><?php _e('Settings', $this->WPB_PREFIX);?></a>
</h2>

<div id="wsl_admin_tab_content" class="metabox-holder" style="min-width:870px;">
<?php
// HOOKABLE: 
do_action( $this->WPB_PREFIX."_admin_ui_header_end" );
