<?php get_header()?>

/*

Template Name:Service

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

<!-- Services -->
<div id="services" class="cards-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

               <?php  $my_options = get_option( '_prefix_my_options' );  ?>
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



<?php get_footer()?>