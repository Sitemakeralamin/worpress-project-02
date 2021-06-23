<?php

require_once get_template_directory().'/inc/class-tgm-plugin-activation.php';

function portfolio_activation(){
	
	$plugins = array(
	
		array(
		
			'name'=>'Advanced Custom Fields',
			'slug'=>'advanced-custom-fields',
			'required'=>true,
			
		),
		
		array(
		
			'name'=>'Contact Form 7',
			'slug'=>'contact-form-7',
			'required'=>true,
			
		),
	
	);
	
	$config = array(
	
		'id'=>'portfolio_plugin_activation',
		'menu'         => 'tgm-activation',
		'parent_slug'  => 'themes.php', 
		'has_notices'  => true, 
	
	
	);
	
	tgmpa( $plugins, $config );
	
}

add_action('tgmpa_register','portfolio_activation');