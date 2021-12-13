<?php  get_header();?>
<div class="container  home-page linux-category">
    <!--المطلوب كتابة هذا الكود في صفحة واحدة وحذفه من باقي الصفحات-->
    <div class="row">
                        <div class = "category-information text-center ">
                                <div class="col-sm-4">
                                <h1 class="category-title"><?php single_cat_title() ?></h1>
                                </div>
                                <div class="col-sm-4">
                                    <div class="category-description"><?php echo category_description() ?></div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="cat-stats">
                                    <span>Article: <?php the_author_posts(); ?> posts</span><br>
                                    <span>Comments:  <?php comments_popup_link('0 Comment','1 Comment','% Comments','comment-url','No Comments') ?></span>
                                    </div>
                                </div>
                            <div class="clearfix"></div>
                        </div> 
                        <div class="clearfix"></div>;
        <!-- <div class="container">                                                                                                نهاية المشكلة -->
                                <div class="row">
                                    <div class="col-sm-9"><?php 
                                        if ( have_posts() ) {
                                            while ( have_posts() ) {
                                                the_post(); ?>
                                                <!-- Start main-post -->
                                        <div class="main-post">
                                            <div class="row">
                                                <div class="col-sm-4 ">
                                                    <?php if ( has_post_thumbnail() ) : ?>
                                                        <?php the_post_thumbnail('medium', ['class' => 'img-responsive img-thumbnail', 'title' => 'Feature image']);?>
                                                        <?php endif; ?>
                                                </div>
                                                
                                                <div class="col-sm-8 ">
                                                    <h3 class="post-title">
                                                        <a href="<?php the_permalink() ?>" 
                                                            title="<?php the_title_attribute() ?>">  
                                                        <?php the_title(); ?>
                                                        </a>
                                                    </h3>
                                                    
                                                    <span class="post-author">
                                                        <i class="fa fa-user fa-fw "></i>
                                                        <?php the_author_posts_link(); ?> 
                                                    </span>

                                                    <span class="post-date">
                                                        <i class="fa fa-calendar fa-fw "></i>
                                                        <?php the_time('F j, Y'); ?> 
                                                    </span>

                                                    <span class="post-comments">
                                                        <i class="fa fa-comments fa-fw "></i>
                                                        <?php comments_popup_link('0 Comment','1 Comment','% Comments','comment-url','No Comments') ?>
                                                    </span>

                                                    <div class="post-content">
                                                            <?php the_excerpt(); ?>
                                                    </div>
                                                </div> 
                                            </div> 
                                            <!-- End inner row -->                
                                                    <hr>
                                                    <p class="post-categories">
                                                        <i class="fa fa-tags fa-fw "></i>  
                                                        <?php the_category( ' , ' ); ?>
                                                    </p>
                                                    <p class="post-tags">
                                                        <?php
                                                            if (has_tag()) {
                                                                the_tags();
                                                            } else {
                                                                echo 'Tags: There\'s no tags';
                                                            }
                                                        ?>
                                                    </p>
                                        </div>  
                                        <!-- End main-post -->
                                        <?php
                                            }
                                            // end while loop
                                        } 
                                        //end if condition                                             
                                        ?>
                                    </div>  
                                        <!-- End col-md-9 -->
                                        <!--  col-md-3 -->
                                        <div class="col-sm-3">
                                            <div class="sidebar-linux"><?php
                                            if (is_active_sidebar('main-sidebar')) {
                                                dynamic_sidebar('main-sidebar');
                                                
                                            } elseif (is_404){
                                                get_sidebar('404'); 
                                            } else {
                                                get_sidebar(); 
                                                
                                            }
                                            get_sidebar('linux'); 
                                            ?>
                                        </div>
                                        <!-- End class="sidebar-linux -->
                                    </div>
                                    <!-- End col-md-3 -->
                                    <div class="clearfix"></div>;
                                </div>   
                                <!-- End outer row -->
                            </div>
</div>
<!-- End container -->
                                                        <div class='pagination-numbers'>
                                                            <?php echo numbering_pagination(); ?>
                                                        </div>                                                                                         
<?php get_footer(); ?>