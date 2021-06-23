<?php

function protfolio_cs_js(){
    wp_enqueue_style('Montserrat',get_template_directory_uri().'/https://fonts.googleapis.com/css?family=Montserrat:500,700&display=swap&subset=latin-ext',array(),'1.2','all');
	
    wp_enqueue_style('comment_style',get_template_directory_uri().'/css/comments.css',array(),'1.2','all');
    
    wp_enqueue_style('OpenSans',get_template_directory_uri().'/https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600&display=swap&subset=latin-ext',array(),'1.2','all');
    
    wp_enqueue_style('bootstrap',get_template_directory_uri().'/css/bootstrap.css',array(),'1.2','all');
  
      wp_enqueue_style('fontawesome',get_template_directory_uri().'/css/fontawesome-all.css',array(),'1.2','all');
  
    wp_enqueue_style('swiper',get_template_directory_uri().'/css/swiper.css',array(),'1.2','all');
	
	wp_enqueue_style('comment_reply_style',get_stylesheet_uri());
	if(is_singular()) wp_enqueue_script('comment-reply');
    
    wp_enqueue_style('magnific',get_template_directory_uri().'/css/magnific-popup.css',array(),'1.2','all');
    wp_enqueue_style('styles',get_template_directory_uri().'/css/styles.css',array(),'1.2','all');
    
    wp_enqueue_style('favicon',get_template_directory_uri().'/images/favicon.png',array(),'1.2','all');
      wp_enqueue_style('main_style',get_stylesheet_uri(),array(),'1.2','all');
    
    wp_enqueue_script('jquery',get_template_directory_uri().'/js/jquery.min.js',array('jquery'),'1.2',true);
    wp_enqueue_script('popper',get_template_directory_uri().'/js/popper.min.js',array('jquery'),'1.2',true);
    wp_enqueue_script('bootstrap_min',get_template_directory_uri().'/js/bootstrap.min.js',array('jquery'),'1.2',true);
    wp_enqueue_script('jquery_easing',get_template_directory_uri().'/js/jquery.easing.min.js',array('jquery'),'1.2',true);
    wp_enqueue_script('swiper_min',get_template_directory_uri().'/js/swiper.min.js',array('jquery'),'1.2',true);
    wp_enqueue_script('magnific_popup',get_template_directory_uri().'/js/jquery.magnific-popup.js',array('jquery'),'1.2',true);
    wp_enqueue_script('morphext',get_template_directory_uri().'/js/morphext.min.js',array('jquery'),'1.2',true);
    wp_enqueue_script('isotope',get_template_directory_uri().'/js/isotope.pkgd.min.js',array('jquery'),'1.2',true);
    wp_enqueue_script('validator',get_template_directory_uri().'/js/validator.min.js',array('jquery'),'1.2',true);
    wp_enqueue_script('scripts',get_template_directory_uri().'/js/scripts.js',array('jquery'),'1.2',true);
    
  
    
   
    
}
add_action('wp_enqueue_scripts','protfolio_cs_js');



//setup menu

function setup_menu(){
    
       add_theme_support('post-thumbnails',array('sliders','protfolio'));
	
       add_theme_support('post-thumbnails');
    
     register_nav_menus(array(
     
         'Primary menu' =>__('Primary menu')
         
         
     ));
	
	
    
 
}
add_action('after_setup_theme','setup_menu');

function protfolio_widghts(){
	
	 register_sidebar(array(
     
         'name' =>__('Blog widget','protfolio'),
         'id'  =>'blog_sidebar1',
         'description' =>__('Widgets in this area will be shown on all posts and pages.','protfolio'),
         'before_widget' =>'<div class="sidebar">',
         'after_widget' =>'</div>',
         'before_title' =>'	<h3 class="sidebar_heading">',
         'after_title' =>'</h3>',
     
     
     ));
     register_sidebar(array(
     
         'name' =>__('footer widget 1','protfolio'),
         'id'  =>'sidebar1',
         'description' =>__('Widgets in this area will be shown on all posts and pages.','protfolio'),
         'before_widget' =>'<div class="text-container about">',
         'after_widget' =>'</div>',
         'before_title' =>'<h4>',
         'after_title' =>'</h4>',
     
     
     ));
    
    register_sidebar(array(
     
         'name' =>__('footer widget 2','protfolio'),
         'id'  =>'sidebar2',
         'description' =>__('Widgets in this area will be shown on all posts and pages.','protfolio'),
         'before_widget' =>' <div class="text-container">',
         'after_widget' =>'</div>',
         'before_title' =>'<h4>',
         'after_title' =>'</h4>',
     
     
     )); 
    
    register_sidebar(array(
     
         'name' =>__('footer widget 3','protfolio'),
         'id'  =>'sidebar3',
         'description' =>__('Widgets in this area will be shown on all posts and pages.','protfolio'),
         'before_widget' =>' <div class="text-container">',
         'after_widget' =>'</div>',
         'before_title' =>'<h4>',
         'after_title' =>'</h4>',
     
     
     ));
    
    register_sidebar(array(
     
         'name' =>__('footer widget 4','protfolio'),
         'id'  =>'sidebar4',
         'description' =>__('Widgets in this area will be shown on all posts and pages.','protfolio'),
         'before_widget' =>' <div class="text-container">',
         'after_widget' =>'</div>',
         'before_title' =>'<h4>',
         'after_title' =>'</h4>',
     
     
     ));
    
    
}
add_action( 'widgets_init', 'protfolio_widghts' );

//Excerpt Function

function custom_excerpt_length(){
	return 25;
	
}
add_filter('excerpt_length','custom_excerpt_length');
