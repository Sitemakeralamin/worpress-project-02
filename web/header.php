<!DOCTYPE html>
<html <?php language_attributes();?> >
<head>
   
   <?php
	 $my_options = get_option( '_prefix_my_options' );
	
	?>
    <meta charset="<?php bloginfo('charset')?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="<?php echo $my_options['favicon'];?> " type="image/png">
    <!-- SEO Meta Tags -->
    <meta name="description" content="Aria is a business focused HTML landing page template built with Bootstrap to help you create lead generation websites for companies and their services.">
    <meta name="author" content="Inovatik">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta property="og:type" content="article" />

    <!-- Website Title -->
    <title><?php bloginfo('name');?></title>
    
    <!-- Styles -->
	
	<!-- Favicon  -->

    
    <?php wp_head();?>
</head>
<body data-spy="scroll" data-target=".fixed-top" <?php body_class();?> >
    
    <!-- Preloader -->
    
    <?php
    
    
    if($my_options['pt-switcher-1']){ ?>
           
        	<div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
          
        </div>
    </div>
    
   <?php }
    
    ?>

    <!-- end of preloader -->
    

    <!-- Navbar -->
    <nav class="navbar navbar-expand-md navbar-dark navbar-custom fixed-top">
        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Aria</a> -->

        <!-- Image Logo -->
        
        <?php
         $my_options = get_option( '_prefix_my_options' );
        
        ?>
        <a class="navbar-brand logo-image" href="<?php echo home_url();?>"><img src="<?php echo $my_options['logo']; ?>" alt="alternative"></a>
        
        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>
        <!-- end of mobile menu toggle button -->

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
           
           <?php
            
            wp_nav_menu(array(
            
            'theme_location'=>'Primary menu',
            'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
            'container'       => 'div',
            'container_class' => 'collapse navbar-collapse',
            'container_id'    => 'navbarsExampleDefault',
            'menu_class'      => 'navbar-nav ml-auto',
            'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
            'walker'          => new WP_Bootstrap_Navwalker(),
            
            ));
            
            ?>
           
          
           
            <span class="nav-item social-icons">
               
                 <?php  
                      $my_options = get_option( '_prefix_my_options' );
                        $header_icons =$my_options['protfolio_header_group_1'];
                        foreach($header_icons as $header_icon){ ?>
                             <span class="fa-stack">
                          
                              <a href="<?php echo $header_icon['link_11'];?>">
                            
                        <i class="<?php echo $header_icon['link_12'];?>"></i>
                    </a>
                    
                </span>
                        <?php
                           }
                       ?>
                      
                  
            </span>
        </div>
    </nav> <!-- end of navbar -->
    <!-- end of navbar -->