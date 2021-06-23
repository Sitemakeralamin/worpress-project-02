<?php get_header()?>

/*

Template Name:Contact

*/
 
    <!-- Header -->
    <header id="header" class="ex-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1><?php the_title();?></h1>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->


    <!-- Breadcrumbs -->
    <div class="ex-basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumbs">
                       <?php
                        
                        while(have_posts()){
                            the_post(); 
                            ?>
                            
                            <a href="<?php echo site_url();?>">Home</a><i class="fa fa-angle-double-right"></i><span><?php the_title();?></span>
                            
                      <?php  }
                  
                        ?>
                       
                        
                    </div> <!-- end of breadcrumbs -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-1 -->
    <!-- end of breadcrumbs -->

<!-- Contact -->
<?php 

	$my_options = get_option( '_prefix_my_options' );
?>

<div id="contact" class="form-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="text-container">
                   
                    <div class="section-title"><?php echo $my_options['page_name'];?></div>
                    <h2><?php echo  $my_options['contact_title'];?></h2>
                    <p><?php echo $my_options['contact_des'];?></p>
                    <ul class="list-unstyled li-space-lg">
                      <li class="address"><i class="<?php echo $my_options['address_icon'];?>"></i><?php echo $my_options['address'];?></li>
                       <?php
						$contact_addresses =$my_options['contact_number'];
						
						foreach($contact_addresses as $contact_address){
							?>
							 <li><i class="<?php echo $contact_address['number_icon'];?>"></i><a href="#"><?php echo $contact_address['number_text'];?></a></li>
                       
						 <?php 
						}
						
						?>
                   
                    </ul>
                    <h3><?php echo $my_options['social_text'];?></h3>

                     <?php
						$social_addresses =$my_options['social_media'];
						
						foreach($social_addresses as $social_address){
							?>
							<span class="fa-stack">
                        <a href="<?php echo $social_address['social_link'];?>">
                            <span class="hexagon"></span>
                            <i class="<?php echo $social_address['social_icon'];?> fa-stack-1x"></i>
                        </a>
                    </span>
						 <?php 
						}
						
						?>
                   
                   
                    
                </div> <!-- end of text-container -->
            </div> <!-- end of col -->
            <div class="col-lg-6">

                <!-- Contact Form -->
                 <?php echo do_shortcode('[contact-form-7 id="452" title="Portfolio Form"]');?>
                

            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of form-2 -->
<!-- end of contact -->

<div class="container">
	<div class="row">
		<div class="col-md-12">
		<?php
			$my_options = get_option( '_prefix_my_options' );
			$google_maps =$my_options['google_map'];
			if($google_maps){
				
		
			?>
		
			<div class="google_map">
			
						<iframe src = "https://maps.google.com/maps?q=<?php echo $google_maps['latitude'];?>,<?php echo $google_maps['longitude'];?>&hl=es;z=14&amp;output=embed"></iframe>
						
					
			</div>
			
			<?php
				}
			?>
		</div>
	</div>
</div>
<?php get_footer()?>