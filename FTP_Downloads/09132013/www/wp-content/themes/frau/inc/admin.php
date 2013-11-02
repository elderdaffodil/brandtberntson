<?php
	
if ( !is_user_logged_in() ) return;
function is_dash() {
	 return in_array( $GLOBALS['pagenow'], array( 'wp-login.php', 'wp-register.php' ) )||is_admin();
}

if ( current_user_can('administrator') ) {
	if ( is_dash() ) {
		include_once ( get_template_directory().'/inc/dashboard.php' );
	} else {
		include_once ( get_template_directory().'/inc/frontend.php' );
	}
}

if ( current_user_can('edit_posts') ) {
	//echo '123';
	include_once ( get_template_directory().'/inc/author.php' );
} //else echo '321';

add_action('wp_ajax_save_customize', 'frau_save_customize');
function frau_save_customize() {
	global $settings;
	foreach( $_POST['data'] as $key=>$value ){
		$settings['elements'][$key]['show']=($value=='block');
	}
	update_option( 'elements', $settings['elements'] );
	
	die();
}

add_action('wp_ajax_save_fonts', 'frau_save_fonts');
function frau_save_fonts() {
	global $settings;
	foreach( $_POST['data'] as $key=>$value ){
		$settings['fonts'][$key] = $value;
	}
	update_option( 'fonts', $settings['fonts'] );
	
	
	die();
}



add_action('wp_ajax_save_settings', 'frau_save_settings');
function frau_save_settings() {
	
	parse_str($_POST['data'], $values);
	$values=frau_removeslashes( $values );
	update_option( $_POST['section'], $values );
	echo __( 'New configuration saved.', 'lizard' );
	die();
}



add_action('wp_ajax_frau_sendmail', 'frau_sendmail');
function frau_sendmail() {
	
	parse_str($_POST['data'], $values);
	$values=frau_removeslashes( $values );
	$message='';
	foreach( $values as $name=>$value ){
		$message.="\r\n".$name.':'.$value;
	}
	mail('support@lizardthemes.com', 'Topic', $message);
	echo __( 'Your message was sent to support.', 'lizard' );
	die();
}



add_action('wp_ajax_upload_image', 'frau_upload_image');
function frau_upload_image() {
	
	$file=$_FILES['uploadfile'];
	$overrides['test_form']=false;
	$file=wp_handle_upload( $file, $overrides );
	echo $file['url'];
	
	die();
	
}

function frau_removeslashes($var) {
	if (is_array($var)) foreach ($var as $key=>$value) {
		$var[$key]=frau_removeslashes($value);
	} else {
		return stripslashes($var);
	}
	return $var;
}

