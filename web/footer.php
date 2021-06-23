    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                 
                 
                  <?php dynamic_sidebar('sidebar1');?>
                  
                  
                </div> <!-- end of col -->
                <div class="col-md-2">
                
                
                  <?php dynamic_sidebar('sidebar2');?>
                
                
                </div> <!-- end of col -->
                <div class="col-md-2">
                  
                  
                    <?php dynamic_sidebar('sidebar3');?>
                    
                    
                </div> <!-- end of col -->
                <div class="col-md-2">
                  
                   <?php dynamic_sidebar('sidebar4');?>
                   
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of footer -->  
    <!-- end of footer -->


    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                     <?php
         $my_options = get_option( '_prefix_my_options' );
        
        ?>
                    <p class="p-small"><?php echo $my_options['copyright'];?></p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright --> 
    <!-- end of copyright -->
    
    	
    <!-- Scripts -->

    
        <?php wp_footer();?>
</body>
</html>