


<?php

/*

Template Name:Home

*/


get_header();?>

<!-- Header -->
<header id="header" class="header">
    <div class="header-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-container">
                        <h1>BUSINESS <span id="js-rotating">TEMPLATE, SERVICES, SOLUTIONS</span></h1>
                        <p class="p-heading p-large">Aria is a top consultancy company specializing in business growth using online marketing and conversion optimization tactics</p>
                        <a class="btn-solid-lg page-scroll" href="#intro">DISCOVER</a>
                    </div>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of header-content -->
</header> <!-- end of header -->
<!-- end of header -->


<!-- Intro -->

<div id="intro" class="basic-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="text-container">
                    <?php
            $my_options = get_option( '_prefix_my_options' );
                        
          ?>
                    <div class="section-title" style="color:<?php echo esc_html( $my_options['section_color-1']);?>"><?php echo esc_html($my_options['section_name']);?></div>



                    <?php
                        if($my_options['field_1']){ ?>

                    <h2 style="color:<?php echo esc_html($my_options['heading_color-1']);?>"><?php echo esc_html($my_options['field_1']);?></h2>

                    <?php }
                        
                       if($my_options['field_2']){
                        ?>
                    <p style="color:<?php echo esc_html( $my_options['des_color-2']);?>"><?php echo $my_options['field_2'];?></p>
                    <?php }
                        
                        ?>



                    <div class="testimonial-author" style="color:<?php echo esc_html( $my_options['sub_color-1']);?>"><?php echo esc_html($my_options['section_sub']);?></div>
                </div> <!-- end of text-container -->
            </div> <!-- end of col -->
            <div class="col-lg-7">
                <div class="image-container">
                    <img src="<?php echo esc_url($my_options['field_3']);?>">
                </div> <!-- end of image-container -->
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of basic-1 -->
<!-- end of intro -->


<!-- Description -->
<div class="cards-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <!-- Card -->
                <?php
                     $my_options = get_option( '_prefix_my_options' );           
                    
                     $get_Values = $my_options['second_section_group'];
                    
                    foreach($get_Values as $get_Value){ ?>

                <div class="card">
                    <span class="fa-stack">
                        <span class="hexagon"></span>
                        <i class="<?php echo $get_Value['second_section_icon'];?> fa-stack-1x"></i>
                    </span>
                    <div class="card-body">
                        <h4 class="card-title"><?php echo $get_Value['second_section_title'];?></h4>
                        <p><?php echo $get_Value['second_section_desc'];?></p>
                    </div>
                </div>

                <?php }
                    
                    ?>

            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of cards-1 -->
<!-- end of description -->


<!-- Services -->
<div id="services" class="cards-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <div class="section-title"><?php echo $my_options['section_name_2'];?></div>
                <h2><?php echo $my_options['section_title_2'];?></h2>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
        <div class="row">
            <div class="col-lg-12">

                <!-- Card -->
                <?php
                    
                    $card_values =$my_options['third_section_group'];
                     foreach($card_values as $card_value){ ?>


                <div class="card">
                    <div class="card-image">
                        <img class="img-fluid" src="<?php echo esc_url($card_value['card_image']);?>" alt="alternative">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title"><?php echo $card_value['card_title_1'];?></h3>
                        <p><?php echo $card_value['card_des_1'];?></p>

                        <ul class="list-unstyled li-space-lg">


                            <li class="media">
                                <i class="<?php echo $card_value['card_icon_1'];?>"></i>
                                <div class="media-body"><?php echo $card_value['card_icon_subtitle'];?></div>
                            </li>

                        </ul>

                        <p class="price"><?php echo $card_value['card_prize'];?></p>
                    </div>
                    <div class="button-container">
                        <a class="btn-solid-reg page-scroll" href="<?php echo $card_value['card-link-1'];?>">More Details</a>
                    </div> <!-- end of button-container -->
                </div>


                <?php   }
                    
                    ?>



                <!-- end of card -->


            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of cards-2 -->
<!-- end of services -->


<!-- Details 1 -->
	<div id="details" class="accordion">
		<div class="area-1">
		</div><!-- end of area-1 on same line and no space between comments to eliminate margin white space --><div class="area-2">
            
            <!-- Accordion -->
            <div class="accordion-container" id="accordionOne">
               <h2><?php echo $my_options['service_title'];?></h2>
               <?php
				
				$accordion_texts =$my_options['accordion_group'];
				$i = 0;
				if($accordion_texts){

					foreach($accordion_texts as $accordion_text){ 
						
						$i++;
				
				?>
				 
					
                <div class="item">
                    <div id="heading-<?php echo $i;?>">
                        <span data-toggle="collapse" data-target="#collapse-<?php echo $i;?>" aria-expanded="true" aria-controls="collapse-<?php echo $i;?>" role="button">
                            <span class="circle-numbering"><?php echo $i;?></span><span class="accordion-title"><?php echo $accordion_text['accordion_title'];?></span>
                        </span>
                    </div>
                    <div id="collapse-<?php echo $i;?>" class="collapse <?php if($i == 1){echo 'show';}?>" aria-labelledby="heading-<?php echo $i;?>" data-parent="#accordionOne">
                        <div class="accordion-body">
                           <?php echo $accordion_text['accordion_des'];?>
                        </div>
                    </div>
                </div> <!-- end of item -->
            
			<?php		
				}
				}
				?>
               
               
               
               
            </div> <!-- end of accordion-container -->
            <!-- end of accordion -->

		</div> <!-- end of area-2 -->
    </div> <!-- end of accordion -->
    <!-- end of details 1 -->


    <!-- Details 2 -->
	<div class="tabs">
        <div class="area-1">
            <div class="tabs-container">
                
                <!-- Tabs Links -->
                <ul class="nav nav-tabs" id="ariaTabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="nav-tab-1" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true"><i class="fas fa-th"></i> Business</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="nav-tab-2" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false"><i class="fas fa-th"></i> Expertise</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="nav-tab-3" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false"><i class="fas fa-th"></i> Quality</a>
                    </li>
                </ul>
                <!-- end of tabs links -->
                
                <!-- Tabs Content -->
                <div class="tab-content" id="ariaTabsContent">

                    <!-- Tab -->
                    <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="tab-1">
                        <h4>Business Services For Companies</h4>
                        <p>Aria provides the most innovative and customized business services in the industry. Our <a class="green page-scroll" href="#services">Services</a> section shows how flexible we are for all types of budgets.</p>
                        
                        <!-- Progress Bars -->
                        <div class="progress-container">
                            <div class="title">Business Development 100%</div>
                            <div class="progress">
                                <div class="progress-bar first" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="title">Opportunity Spotting 76%</div>
                            <div class="progress">
                                <div class="progress-bar second" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="title">Online Marketing 90%</div>
                            <div class="progress">
                                <div class="progress-bar third" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div> <!-- end of progress-container -->
                        <!-- end of progress bars -->
                        
                    </div> <!-- end of tab-pane --> 
                    <!-- end of tab -->

                    <!-- Tab -->
                    <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="tab-2">
                        <ul class="list-unstyled li-space-lg first">
                            <li class="media">
                                <div class="media-bullet">1</div>
                                <div class="media-body"><strong>High quality</strong> is on top of our list when it comes to the way we deliver the services</div>
                            </li>
                            <li class="media">
                                <div class="media-bullet">2</div>
                                <div class="media-body"><strong>Maximum impact</strong> is what we look for in our actions</div>
                            </li>
                            <li class="media">
                                <div class="media-bullet">3</div>
                                <div class="media-body"><strong>Quality standards</strong> are important but meant to be exceeded</div>
                            </li>
                        </ul>
                        <ul class="list-unstyled li-space-lg last">
                            <li class="media">
                                <div class="media-bullet">4</div>
                                <div class="media-body"><strong>We're always looking</strong> for industry leaders to help them win their market position</div>
                            </li>
                            <li class="media">
                                <div class="media-bullet">5</div>
                                <div class="media-body"><strong>Evaluation</strong> is a key aspect of this business and important</div>
                            </li>
                            <li class="media">
                                <div class="media-bullet">6</div>
                                <div class="media-body"><strong>Ethic</strong> procedures ar alwasy at the base of everything we do</div>
                            </li>
                        </ul>
                    </div> <!-- end of tab-pane -->
                    <!-- end of tab -->

                    <!-- Tab -->
                    <div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="tab-3">
                        <p><strong>We strive to achieve</strong> 100% customer satisfaction for both types of customers: hiring companies and job seekers. Types of customers: <a class="green" href="#your-link">with huge potential</a></p>
                        <p><strong>Our goal is to help</strong> your company achieve its full potential and establish long term stability for <a class="green" href="#your-link">the stakeholders</a></p>
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">It's easy to get a quotation, just call our office anytime</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">We'll get back to you with an initial estimate soon</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Get ready to see results even after only 30 days</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Ask for a quote and start improving your business</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Just fill out the form and we'll call you right away</div>
                            </li>
                        </ul>
                    </div> <!-- end of tab-pane -->
                    <!-- end of tab -->

                </div> <!-- end of tab-content -->
                <!-- end of tabs content -->

            </div> <!-- end of tabs-container -->
        </div><!-- end of area-1 on same line and no space between comments to eliminate margin white space --><div class="area-2"></div> <!-- end of area-2 -->
    </div> <!-- end of tabs -->
    <!-- end of details 2 -->



<!-- Testimonials -->
<div class="slider">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
               <?php
                
                $testomonial_values = $my_options['Testimonial_group'];
                
                ?>
               
                <h2><?php echo $my_options['Testimonial_title'];?></h2>
                <p class="p-heading"><?php echo $my_options['Testimonial_desc'];?></p>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
             <div class="row">
            <div class="col-lg-12">
                     <!-- Card Slider -->
                <div class="slider-container">
                    <div class="swiper-container card-slider">
                 <div class="swiper-wrapper">
                          <?php
                
                foreach($testomonial_values as $testomonial_value){ ?>
             
                            <!-- Slide -->
                            <div class="swiper-slide">
                                <div class="card">
                                    <img class="card-image" src="<?php echo $testomonial_value['Testimonial_image']?>" alt="alternative">
                                    <div class="card-body">
                                        <div class="testimonial-text"><?php echo $testomonial_value['Testimonial_skill']?></div>
                                        <div class="testimonial-author"><?php echo $testomonial_value['Testimonial_name']?></div>
                                    </div>
                                </div>
                            </div> <!-- end of swiper-slide -->
                            <!-- end of slide -->
                      

                        
                        <?php  }
                
                            ?>
                            
                  </div> <!-- end of swiper-wrapper -->
                   
              
                     <!-- Add Arrows -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <!-- end of add arrows -->

                    </div> <!-- end of swiper-container -->
                </div> <!-- end of sliedr-container -->
                     </div> <!-- end of col -->
               
                <!-- end of card slider -->

           
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of slider -->
<!-- end of testimonials -->


<!-- Call Me -->
<div id="callMe" class="form-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="text-container">
                    <div class="section-title">CALL ME</div>
                    <h2 class="white">Have Us Contact You By Filling And Submitting The Form</h2>
                    <p class="white">You are just a few steps away from a personalized offer. Just fill in the form and send it to us and we'll get right back with a call to help you decide what service package works.</p>
                    <ul class="list-unstyled li-space-lg white">
                        <li class="media">
                            <i class="fas fa-square"></i>
                            <div class="media-body">It's very easy just fill in the form so we can call</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-square"></i>
                            <div class="media-body">During the call we'll require some info about the company</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-square"></i>
                            <div class="media-body">Don't hesitate to email us for any questions or inquiries</div>
                        </li>
                    </ul>
                </div>
            </div> <!-- end of col -->
            <div class="col-lg-6">

                <!-- Call Me Form -->
            <?php echo do_shortcode('[contact-form-7 id="342" title="Call Me"]');?>
                <!-- end of call me form -->

            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of form-1 -->
<!-- end of call me -->


<!-- Projects -->
<div id="projects" class="filter">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">PROJECTS</div>
                <h2>Projects That We're Proud Of</h2>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
        <div class="row">
            <div class="col-lg-12">
                <!-- Filter -->
                <div class="button-group filters-button-group">
                    <a class="button is-checked" data-filter="*"><span>SHOW ALL</span></a>
                    <?php
                    
                    $portfolio_menus = get_terms('protfolio-cat');
                    
                    foreach($portfolio_menus as $portfolio_menu){ ?>

                    <a class="button" data-filter=".<?php echo $portfolio_menu -> slug;?>"><span><?php echo $portfolio_menu -> name;?></span></a>
                 <?php 
                                                                 
                    }
                  
                    ?>
                    
                </div> <!-- end of button group -->
                <div class="grid">
                   <?php
                    
                    $args = array(
                    
                    'post_type' =>'protfolio',
                    'posts_per_page' =>10,
                        'order' =>'ASC'
                    );
                    $i = 0;
                    $query =new WP_Query($args);
                
                    while($query->have_posts()){
                        
                        $query->the_post();
                        
                        $testomonial =get_field('testomonial');
                        $subtitle = get_field('sub_title');
                        $Btnlink = get_field('button_link');
                        $Author= get_field('author_name');
                        $i++;
                        
                        ?>
                        
                      
                  <div class="element-item 
                       
                           <?php
                        $portfolio_items =get_the_terms(get_the_ID(),'protfolio-cat');
                            foreach($portfolio_items as $portfolio_item){
                                echo $portfolio_item->slug.' ';
                            }?>
                            
                            ">
                      <a class="popup-with-move-anim" href="#Portfolio-<?php echo $i;?>">
                          <div class="element-item-overlay"><span><?php the_title();?></span></div>
                          <?php the_post_thumbnail(array(277,270));?>
                      </a>
                  </div>
                        
<div id="Portfolio-<?php echo $i;?>" class="lightbox-basic zoom-anim-dialog mfp-hide">
    <div class="row">
        <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
        <div class="col-lg-8">
            <?php the_post_thumbnail(array(623,607));?>
        </div> <!-- end of col -->
        <div class="col-lg-4">
            <h3><?php the_title();?></h3>
            <hr class="line-heading">
            <h6><?php echo  $subtitle; ?></h6>
            <p><?php the_content();?></p>
            <div class="testimonial-container">
                <p class="testimonial-text"><?php echo  $testomonial;?></p>
                <p class="testimonial-author"><?php echo $Author;?></p>
            </div>
            <a class="btn-solid-reg" href="<?php echo $Btnlink;?>">DETAILS</a> <a class="btn-outline-reg mfp-close as-button" href="#projects">BACK</a>
        </div> <!-- end of col -->
    </div> <!-- end of row -->
</div> <!-- end of lightbox-basic -->
<!-- end of lightbox -->
                      

                   <?php
                    
                    }
                    wp_reset_postdata();
                    ?>
                   
                       
      
                       
                    
        
                    
                </div> <!-- end of grid -->
                <!-- end of filter -->

            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of filter -->
<!-- end of projects -->


<!-- Project Lightboxes -->


<!-- Lightbox -->
        
 










<!-- Team -->
<div class="basic-2">
    <div class="container">
        <?php
              $my_options = get_option( '_prefix_my_options' );    
            
            $team_values =$my_options['team_group'];                                
            
            ?>

        <div class="row">
            <div class="col-lg-12">
               <?php
                if($my_options['team_title']){ ?>
                    
                     <h2><?php echo $my_options['team_title'];?></h2>
                <p class="p-heading"><?php echo $my_options['team_desc'];?></p>
             <?php   
                       }
                
                ?>
               
            </div> <!-- end of col -->
        </div> <!-- end of row -->


        <div class="row">
            <div class="col-lg-12">

                <?php
                    
                    foreach($team_values as $team_value){  ?>
                <div class="team-member">
                    <div class="image-wrapper">
                        <img class="img-fluid" src="<?php echo $team_value['team_image'] ?>" alt="alternative">
                    </div> <!-- end of image-wrapper -->
                    <p class="p-large"><?php echo $team_value['team_name']; ?></p>
                    <p class="job-title"><?php echo $team_value['team_subtitle']; ?></p>
                    <span class="social-icons">
                        <span class="fa-stack">
                            <a href="#">
                                <span class="hexagon"></span>
                                <i class="<?php echo $team_value['team_social']; ?> fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#">
                                <span class="hexagon"></span>
                                <i class="<?php echo $team_value['team_social2']; ?> fa-stack-1x"></i>
                            </a>
                        </span> 
                           
                          
                    </span>
                </div> <!-- end of team-member -->
                <!-- end of team member -->


                <?php  }
                    
                    
                    
                    
                    ?>

                <!-- Team Member -->



            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of basic-2 -->
<!-- end of team -->


<!-- About -->
<div id="about" class="counter">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-xl-6">
                <div class="image-container">
                    <img class="img-fluid" src="<?php echo get_template_directory_uri()?>/images/about.jpg" alt="alternative">
                </div> <!-- end of image-container -->
            </div> <!-- end of col -->
            <div class="col-lg-7 col-xl-6">
                <div class="text-container">
                    <div class="section-title">ABOUT</div>
                    <h2>We're Passionate About Delivering Growth Services</h2>
                    <p>Our goal is to provide the right business growth services at the appropriate time so companies can benefit from the created momentum and thrive for a long period of time</p>
                    <ul class="list-unstyled li-space-lg">
                        <li class="media">
                            <i class="fas fa-square"></i>
                            <div class="media-body">Everything we recommend has direct positive impact</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-square"></i>
                            <div class="media-body">You will become an important partner of our company</div>
                        </li>
                    </ul>

                    <!-- Counter -->
                    <div id="counter">
                       <?php
						$counters =$my_options['counter_list'];
						if($counters){
							
							foreach($counters as $counter){  ?>
								
								  <div class="cell">
                            <div class="counter-value number-count" data-count="<?php echo $counter['counter_number'];?>">1</div>
									  <div class="counter-info"><?php echo $counter['counter_title'];?></div>
                        </div>
                       
								
						<?php
						  }
							
						}
						
						?>
                       
                       
                      
                    </div>
                    <!-- end of counter -->

                </div> <!-- end of text-container -->
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of counter -->
<!-- end of about -->


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
                <!-- end of contact form -->

            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of form-2 -->
<!-- end of contact -->

<?php get_footer();?>
