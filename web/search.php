

<?php get_header();?>


 
    <!-- Header -->
    <header id="header" class="ex-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1><?php echo'Search For:',' ', the_search_query();?></h1>
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
                  
                            <a href="<?php echo site_url();?>">Home</a><i class="fa fa-angle-double-right"></i><span><?php echo the_search_query();?></span>
                            
                   
                        
                    </div> <!-- end of breadcrumbs -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-1 -->
    <!-- end of breadcrumbs -->



<div class="container">
	<div class="row">
		<div class="col-md-6">

			<?php 
			if(have_posts()){
			
			while(have_posts()){
				
				the_post();
				?>
			<div class="blog_post">
				<h2><?php the_title();?></h2>
				<div class="feature_image">
					<a href="<?php the_permalink();?>"><?php the_post_thumbnail();?></a>
				</div>

				<div class="post_meta">
					Posted By:<?php the_author_link();?> |
					Posted On: <?php the_time('M d, Y');?> |
					Posted In:<?php the_category(', ');?> |
					<?php comments_popup_link('no comment','1 comment','% comments','comment_class','comments off');?>
				</div>
				
				
					
				<p>
				<?php echo get_the_excerpt();?>
				<a href="<?php the_permalink();?>">Read more&raquo;</a>
				</p>
			
			</div>

			<?php
			}
			}else{
				echo "<h1 style='color:red;'>Search Not Found</h1>";
			}
	
		
			?>




			<!--Start Pagination div -->

			<div class="pagination_area">
			
			<?php echo paginate_links();?>
			
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
<!--End Container div -->

<!-- SideBar Design ---->



<?php get_footer();?>