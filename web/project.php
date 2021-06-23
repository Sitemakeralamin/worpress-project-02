<?php get_header()?>

/*

Template Name:Project

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

<?php get_footer()?>