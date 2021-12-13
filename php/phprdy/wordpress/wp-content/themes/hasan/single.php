<?php
 get_header(); 
 include(get_template_directory() . '/includes/breadcrumb.php')
 ?>

<div class="container post-page">
    <?php 
            if ( have_posts() ) {
                while ( have_posts() ) {
                    the_post(); ?>

                            <div class="main-post"> 
                                <?php edit_post_link('Edit  <i class="fa fa-pen"></i>');?>           
                                <h3 class="post-title">
                                    <a href="<?php the_permalink() ?>" >
                                        <?php the_title(); ?>
                                    </a>
                                </h3>
                                
                                <span class="post-author">
                                    <i class="fa fa-user fa-fw "></i>
                                    <?php the_author_posts_link(); ?> has blogged F, 
                                </span>
                                
                                <span class="post-date">
                                    <i class="fa fa-calendar fa-fw "></i>
                                    Posted: <?php the_date('F j, Y'); ?> at <?php the_time('g:i a'); ?>
                                </span>
                                
                                <span class="post-comments">
                                    <i class="fa fa-comments fa-fw "></i>
                                    <?php comments_popup_link('post a Comment','one Comment','% Comments','comment-url','Comments are Closed') ?>
                                </span>
                                
                               <div class="row">
                                    <div class="col-sm-6">
                                        <?php if ( has_post_thumbnail() ) : ?>
                                        <?php the_post_thumbnail(array(780,550), ['class' => 'img-responsive img-thumbnail', 'title' => 'Feature image']);?>
                                        <?php //the_post_thumbnail('large', ['class' => 'img-responsive img-thumbnail', 'title' => 'Feature image']);?>
                                        <?php endif; ?>
                                    </div>        
                                    <!-- <div class="col-sm-6"> -->
                                        <div class="post-content">
                                            <?php the_content(); ?>
                                        </div>
                                    <!-- </div> -->
                               </div>
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
                            <?php
                                    }// end while loop
                                } //end if condition         
                        echo '<div class="clearfix"></div>';
                        // ///////////////////////////////////
                        if ( count_user_posts(get_the_author_meta('ID')) >= 5 ) {
                            $random_posts_arg = 5;
                        } else { 
                            $random_posts_arg =  count_user_posts(get_the_author_meta('ID'));
                        }
                        // ///////////////////////////////////
                        // <!--Start author-area -->
                        // <!-- get post ID => get_queried_object_id()     -->
                        // Categories ID'S => wp_get_post_categories(get_queried_object_id());
                    //    +++++++++++++++++++++++++++++++++++++++++++++++++++++++
                        // global $post;
                        // echo $post -> ID . '<br>';
                        // echo get_queried_object_id() . '<br>';
                        // print_r(wp_get_post_categories(get_queried_object_id()));
                        // **********************************************************************************************
                                           
                        $random_posts_arg = array(
                            // 'author'            => get_the_author_meta('ID'), 
                            'posts_per_page'        => $random_posts_arg,
                            // 'posts_per_page'    => -1
                            'orderby'             => 'rand',
                            'category__in'        => wp_get_post_categories(get_queried_object_id()),
                            'post__not_in'        => array(get_queried_object_id())
                        );
                        $random_posts = new WP_Query ($random_posts_arg);
                        ?> 
                         <h3 class="author_posts_title">
                             <!-- مشكلة مطلوب حلها
                            مطلوب دالة تعطى عدد البوستات المعروض بالضبط -->
       Latest  <?php   $random_posts_arg  ?>  posts of <?php the_author_meta('nickname') ?>
       <!-- Latest  <?php // echo count_user_posts(get_the_author_meta('ID')) ?>  posts of <?php //the_author_meta('nickname') ?> -->
    </h3>
    <!-- نهاية المشكلة -->
                        <!-- <div class="row"> -->
                            <!-- <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 "> -->
                                 <?php            
                            if ( $random_posts -> have_posts() ) {
                             while ($random_posts ->  have_posts() ) {
                                $random_posts -> the_post(); ?>
                                <div class="author-posts">
                                    <h3 class="post-title">
                                                <a href="<?php the_permalink() ?>" >
                                                <?php the_title(); ?>
                                                </a>
                                            </h3>               
                                            <hr>
                                        </div>
                                    <!-- </div> -->
                                <!-- </div> -->
                                <div class="clearfix"></div>
                                    <?php
                            }// end while loop
                             }else{
                                 echo 'there is not any same categories';   
                        } //end if condition
                        wp_reset_postdata();
                        echo '<div class="clearfix"></div>';
                        // **********************************************************************************************
                        ?>
                        
                        <div class="author-area">
                        <div class="row">
                            <div class="col-md-2">
                                <!-- <div class="text-center"> -->
                                <?php
                                $avatar_arguments = array(/*
                                    'size'          => 32,
                                    'height'        => null,
                                    'width'         => null,
                                    'default'       => get_option( 'avatar_default', 'mystery' ),
                                    'force_default' => false,
                                    'rating'        => get_option( 'avatar_rating' ),
                                    'scheme'        => null,
                                    'alt'           => '',
                                    // 'class'         => null,*/
                                    'class'         => 'img-responsive img-thumbnail center-block',/*
                                    'force_display' => false,
                                    'loading'       => null,
                                    'extra_attr'    => '',*/
                                    );
                                    echo get_avatar(get_the_author_meta('ID'),196, '','User avatar', $avatar_arguments);    ?>
                                <?php //echo get_avatar(get_the_author_meta('ID'), $avatar_arguments);    ?>
                            </div>
                            
                            <div class="col-md-7">
                                <h4>
                                    [<?php ECHO get_the_author_meta('ID');  ?>] 
                                    <?php the_author_meta('first_name') ?> 
                                    <?php the_author_meta('last_name') ?> 
                                    (<span class="nickname"><?php the_author_meta('nickname') ?></span>)  
                                    has blogged  <?php the_author_posts(); ?> posts,
                                </h4>
                                <?php 
                                if (get_the_author_meta('description')) {?>
                                    <p class="lead"><?php the_author_meta('description') ?> </p>
                                    <?php } else {
                                        echo 'There is no biography';
                                    }
                                    ?>
                            </div>
                            <div class="col-md-3  author-status">
                                    User posts count: <span class="posts-count"><?php echo count_user_posts(get_the_author_meta('ID')) ?></span>
                                    <hr>
                                    go to my profile:<?php the_author_posts_link(); ?>
                            </div>
                        </div>
                       
                        <?php
                        echo '<hr class="comment-separator">';
                        // -------------------------------------------------------------
                        // -------------------------------------------------------------
                        // -------------------------------------------------------------
                        echo '<div class="post-pagination">';
                            if (get_previous_post_link()) {
                                previous_post_link('%link','<i class="fa fa-chevron-left fa-lg" aria-hidden="true"></i> previous article: %title');
                            } else {
                                echo '<span class="previous-span">Prev article : None</span>';    
                            }

                            if (get_next_post_link()) {
                                next_post_link('%link','next article: %title <i class="fa fa-chevron-right fa-lg " aria-hidden="true" ></i>');
                            } else {
                                echo '<span class="next-span">Next article : None</span>';
                            }
                        echo '</div>';
                        echo '<hr class="comment-separator">';
                        comments_template();
                    ?>

            <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>