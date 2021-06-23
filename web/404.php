

<?php get_header();?>


       <!-- Header -->
    <header id="header" class="ex-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>404 page</h1>
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
                 
                            <a href="<?php echo site_url();?>">Home</a><i class="fa fa-angle-double-right"></i><span>404</span>
                       
                    </div> <!-- end of breadcrumbs -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-1 -->
    <!-- end of breadcrumbs -->


<div class="container">
	
	<div class="row">
		<div class="col-md-6">
			<div class="page-404">
				<div class="image-404">
					<img src="<?php echo get_template_directory_uri();?>/images/404-error-design.jpg" alt="404 page">
				</div>
				<div class="link-404">
				<p class="content-404">A 404 page is a landing page that tells your site viewers the requested page is unavailable or, in some cases, doesn't exist. A 404 error tells users the page cannot be accessed – and it can be a major problem. When users can't access a page, they can't find the information they need</p>
					<a href="<?php echo site_url();?>">Go to home page</a>
				</div>
				
			</div>
			
		</div>
		
		<div class="col-md-6">

			<?php
			dynamic_sidebar('blog_sidebar1');
			
			?>


		</div>
	</div>
</div>
		
	

		


<!-- SideBar Design ---->



<?php get_footer();?>