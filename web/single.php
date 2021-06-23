
<?php get_header();?>



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


<div class="container">
	<div class="row">
		<div class="col-md-6">

			<div class="blog_post">
				<h2><?php the_title();?></h2>
				<div class="feature_image">
					<a href="<?php the_permalink();?>"><?php the_post_thumbnail();?></a>
				</div>

				<div class="post_meta">
					Posted By:<?php the_author_link();?> |
					Posted On: <?php the_time('M d, Y');?> |
					Posted In:<?php the_category(', ');?>
				</div>
				<p><?php the_content();?></p>
				
				
				<?php comments_template();?>


			</div>

		

		</div>
		
		<!--End clmn div -->

		<div class="col-md-6">

			<?php
			dynamic_sidebar('blog_sidebar1');
			
			?>


		</div>

	</div>
	<!--End Row div -->




</div>


<?php get_footer();?>