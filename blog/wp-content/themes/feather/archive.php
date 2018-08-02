<?php get_header(); 
$feather_theme_options = get_option('feather');
// Next And Prev Posts For Pagination
$blog_next_post_link = '';
$blog_prev_post_link = '';
$num_pagination = '';
?>
<!-- blog  -->
<section class="blog">
    
            
            <div class="container">
                <div class="row">

                	<h2 class="main-page-title col-md-12" style="margin-bottom: 20px;"><?php 

                				  if(is_author()) :
                                  $author = get_userdata( get_query_var('author') );
                                  $query_name =  $author->display_name;
                                  elseif(is_day()) : ?>
                                  <?php $query_name =  get_the_date(); ?>
                                  <?php elseif(is_month()) : ?>
                                  <?php $query_name =  single_month_title(' '); ?>
                                  <?php elseif(is_year()) : ?>
                                  <?php $query_name =  get_the_date( _x( 'Y', '', 'dsf' ) ); ?>
                                  <?php elseif(is_category()) : ?>
                                  <?php $query_name =  single_cat_title();  ?>
                                  <?php elseif(is_tag()) : ?>
                                  <?php $query_name =  single_tag_title();  ?>
                                  <?php endif; 


	                              if(isset($feather_theme_options['archive_title']) && $feather_theme_options['archive_title'] != '') :
	                                    echo str_replace('$' , $query_name ,$feather_theme_options['archive_title']);
	                                else :
	                                    echo $query_name.' ' . __('Posts' , 'dsf');
	                                endif;

                	 ?></h2>
                    

                   <!-- left side -->
                   <div id="blog" class="blog-wrapper col-md-8 col-xs-12">



                   			<?php 

                   			if(have_posts()) : while(have_posts()) : the_post(); ?>
							
							<!-- single post [post with image] -->
							<?php if(is_sticky()) : ?>
							<div <?php post_class('single-post sticky'); ?>>
							<?php else : ?>
							<div <?php post_class('single-post'); ?>>
							<?php endif; ?>





									<!-- post format -->
									<?php 
							        if(function_exists('post_formats_preparation') && get_post_format() != 'quote')
									{
											post_formats_preparation(get_post_format());
									} ?>

									
									<!-- 
										check if post is quote or normal post content 
										handle quote post type individually 
									 -->
									<?php if(get_post_format() != 'quote') : ?>
									<!-- post content  / normal post content -->
		                            <div class="post-content">
		                                

		                                <div class="post-content-inner-wrapper">
													
													
													    <!-- post inner content -->
		                                                <div class="post-inner-content">
		                                                        
		                                                        <h2 class="post-header"><a href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?></a></h2>


		                                                        
		                                                         <!-- meta -->
		                                                        <div class="post-meta">
		                                                                
		                                                            <span class="date-span"><i class="fa fa-lg fa-clock-o"></i><a href="<?php echo get_permalink(); ?>"><?php echo __(feather_date() , 'dsf'); ?></a></span>
		                                                            <span class="comments-span"><i class="fa fa-lg fa-comments"></i><a href="<?php echo get_permalink(); ?>#comments"><?php echo comments_number(); ?></a></span>
		                                                            <span class="share-post-span share-post"><i class="fa fa-lg fa-share"></i><?php if(function_exists('feather_share_post')) feather_share_post(); ?></span>
		                                                           
		                                                        </div>
		                                                        <!-- end post meta -->
																
																<div class="clearfix"></div>


		                                                        <!-- post main content -->
		                                                        <div class="main-content">
		                                                                

		                                                               <?php 
		                                                               global $more;
		                                                               $more = 0;
		                                                               the_content(); ?>                                            


		                                                        </div>
		                                                        <!-- end main content -->
		                                                            
		                                                        


		                                                </div>
		                                                <!-- end inner content -->



		                                </div>
		                                <!-- end post-content-inner-wrapper -->

		                           	</div><!-- end post content -->
		                           	<?php elseif(get_post_format() == 'quote') : ?>
									
									<!-- quote post content -->
		                            <div class="post-image post-format-quote">
		                                
		                                <?php if(get_post_meta(get_the_ID() , 'quote-link' , true) == 'on') echo '<a href="'.get_permalink().'">'; ?>
		                                <div class="wrapper">

		                                    <?php if(has_post_thumbnail(get_the_ID())) {

														$imagesrc = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'feather-post');
													    $imagesrc = $imagesrc[0];
														?>
													    <img src="<?php echo $imagesrc; ?>" alt="<?php echo get_the_title(); ?>">

		                                   <?php } ?>

		                                    <?php if(get_post_meta(get_the_ID() , 'quote' , true) != '') : ?>
		                                    	<div class="quote">
		                                        
		                                        <p><?php echo get_post_meta(get_the_ID() , 'quote' , true); ?></p>
		                                        <span class="author"><?php echo get_post_meta(get_the_ID() , 'quote-author' , true); ?></span>                                       


		                                    	</div>
		                                    <!-- end quote -->
		                                    <?php endif; ?>
		                                
		                                </div>
		                                <!-- end wrapper -->
		                                <?php if(get_post_meta(get_the_ID() , 'quote-link' , true) == 'on') echo '</a>'; ?>

		                            </div>
		                            <!-- end post image -->

		                           	<?php endif; // end if post format not == quote ?>
		                           

		                    


		                    </div><!-- end single post -->

		  					<?php endwhile; endif;  ?>
		                      
		                   
		                                    
		                                        
                            <?php 

                            // prepare next and prev pagination links
                            if(!$paged) $paged = 1;
                            // max pages
                            $max = get_option('posts_per_page');
                            $posts_count = $wp_query->found_posts;

                            
                            // prev posts link
                            if($posts_count > $max)
                            {

	                            if(get_previous_posts_link(false  ,$max) != '') $blog_prev_post_link = '<div class="prev-posts">'. get_previous_posts_link(false  ,$max).'</div>';
	                            if(get_next_posts_link(false,$max)) $blog_next_post_link = '<div class="next-posts">'.get_next_posts_link(false,$max).'</div>';
	                            if(isset($feather_theme_options['enable_numeric_pagination']) && $feather_theme_options['enable_numeric_pagination'] == '1') $num_pagination = dsf_pagination($paged , $max);
                            }

                            ?>
		                              


		                    <?php wp_reset_query(); ?>




                   </div>
                   <!-- end left side -->


					
					<?php get_sidebar(); ?>


                  
					
				   <div class="clearfix"></div>


				  



                </div>
                <!-- end row -->
            </div>
            <!-- end container -->

</section>
<!-- end blog -->
<section class="blog-pagination" id="pagination">
		   	
	
		<div class="container">
			<div class="row">
				<div class="col-md-12"><?php 

				if($blog_prev_post_link != '') echo $blog_prev_post_link;
				echo $num_pagination;
				if($blog_next_post_link != '') echo $blog_next_post_link;
				?></div>
			</div><!-- end row -->
		</div>
		<!-- end container -->


</section>
<!-- end blog pagination  -->
<?php get_footer(); ?>