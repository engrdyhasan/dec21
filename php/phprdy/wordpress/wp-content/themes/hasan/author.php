<?php  get_header();?>
<?php the_author_posts_link(); ?>
<div class="container author-page">
                                <h1 class="profile-header text-center">
                                    [<?php echo get_the_author_meta('ID');  ?>] 
                                    <?php the_author_meta('nickname') ?> Page
                                </h1>
    <div class="author-main-info">
                                            <!-- Start row -->
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 ">
                <?php
                $avatar_arguments = array(
                    // 'size'          => 196,
                    // 'height'        => null,
                    // 'width'         => null,
                    // 'default'       => get_option( 'avatar_default', 'mystery' ),
                    // 'force_default' => false,
                    // 'rating'        => get_option( 'avatar_rating' ),
                    // 'scheme'        => null,
                    // 'alt'           => '',
                    // 'class'         => null,*/
                    'class'         => 'img-responsive img-thumbnail center-block',
                    // 'force_display' => true,
                    // 'loading'       => null,
                    // 'extra_attr'    => '',
                );
                    echo get_avatar(get_the_author_meta('ID'),196,'','user avatar',$avatar_arguments);    ?>
                <?php //echo get_avatar(get_the_author_meta('ID'), $avatar_arguments);    ?>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 ">
                <ul class="author-names list-unstyled ">
                    <li><span>First name:</span>  <?php the_author_meta('first_name') ?> </li>
                    <li><span>Last name:</span>  <?php the_author_meta('last_name') ?> </li>
                    <li><span>Nick name:</span> (<span class="nickname"><?php the_author_meta('nickname') ?></span>)  </li>
                </ul>
                <hr>
                <?php 
                    if (get_the_author_meta('description')) {?>
                    <p class="lead"><?php the_author_meta('description') ?> </p>
                <?php
                    } else {
                        echo 'There is no biography';
                    }
                ?>
            </div>
                <!-- <div class="col-md-3  author-status">
                    User posts count: <span class="posts-count"><?php //echo count_user_posts(get_the_author_meta('ID')) ?></span>
                    <hr>
                    go to my profile:<?php //the_author_posts_link(); ?>
                </div> -->
        </div>
    </div>
        <!-- End row -->
        <!-- Start row -->
    <div class="row author-stats">
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 ">
            <div class="stats">
                Posts Count: has blogged:      
                <span class="posts-count"><?php echo count_user_posts(get_the_author_meta('ID')) ?></span>
            <!-- <span>  <?php //the_author_posts(); ?> </span>posts, -->
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 ">
            <div class="stats">
                Comments Count
                <span>
                    <?php 
                    $commentscount_arg =array(
                        'user_id' => get_the_author_meta('ID'),
                        'count'   => true
                    );
                    echo get_comments($commentscount_arg);
                    ?>
                </span>
            </div>    
        </div>    
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 ">
            <div class="stats">
                    Total Count
                    <span>68</span>    
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 ">
            <div class="stats">
                    Rady Count
                    <span>2002</span>    
            </div>
        </div>
    </div>
    <!-- End row -->
    <!-- start row -->
    <!-- <div class="row"> -->
        <?php
        //  if ( the_author_posts() >= 5 ) {
         if ( count_user_posts(get_the_author_meta('ID')) >= 5 ) {
            $author_posts_per_page = 5;
        } else { 
            $author_posts_per_page =  count_user_posts(get_the_author_meta('ID'));
            // $author_posts_per_page =  the_author_posts(); 
        }
    
        $author_post_arg = array(
            'author'            => get_the_author_meta('ID'), 
            'posts_per_page'        => $author_posts_per_page
            // 'posts_per_page'    => -1
        );
        $author_posts = new WP_Query ($author_post_arg);
        if ( $author_posts -> have_posts() ) {?>
        <h3 class="author_posts_title">
           Latest  <?php echo $author_posts_per_page?>  posts of <?php the_author_meta('nickname') ?>
        </h3>
            <?php
             while ($author_posts ->  have_posts() ) {
                $author_posts -> the_post(); ?>
                <div class="author-posts">
                    <div class="row">
                    <div class="col-sm-2">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <?php the_post_thumbnail('thumbnail', ['class' => 'img-responsive img-thumbnail', 'title' => 'Feature image']);?>
                        <?php endif; ?>
                    </div>
                    <div class="col-sm-10">
                        <h3 class="post-title">
                            <a href="<?php the_permalink() ?>" >
                            <?php the_title(); ?>
                            </a>
                        </h3>               
                        <span class="post-date">
                            <i class="fa fa-calendar fa-fw "></i><?php the_time('F j, Y'); ?> 
                        </span>
                        <span class="post-comments">
                            <i class="fa fa-comments fa-fw "></i>
                            <?php comments_popup_link('0 Comment','1 Comment','% Comments','comment-url','No Comments') ?>
                        </span>
                        <div class="post-content">
                                <?php// the_excerpt(22); ?>
                                <?php the_excerpt(); ?>
                        </div>
                    </div>
                    <!-- <hr> -->
                </div>
                </div>
                <div class="clearfix"></div>
                    <?php
            }// end while loop
        } //end if condition
        wp_reset_postdata(); 
        // *************************************************
        
        if ( get_comments($commentscount_arg) >= 5 ) {
            $comments_per_page = 5;
        } else { 
            $comments_per_page =  get_comments($commentscount_arg);
            // $author_posts_per_page =  the_author_posts(); 
        }
        
        // $comments_per_page = 5;
    // ----------------
    ?>
    
        <?php
        $comments_arguments = array(
            'user_id'        => get_the_author_meta('ID'), 
            'status'        => 'approve',
            'number'        => $comments_per_page,
            'post-status'   => 'publish',
            'post-type'     => 'post'

            // 'posts_per_page'    => -1
        );
        $comments = get_comments($comments_arguments);
        if ($comments) {?>
    <h3 class="author-comments-title">
        <?php
           if ( get_comments($commentscount_arg) >= $comments_per_page ) {
            echo 'Latest ' .$comments_per_page . '  Comments of ';
            the_author_meta('nickname');
        } else { 
            echo 'Latest Comments of ';
            the_author_meta('nickname');
        }
        ?>
    </h3>
    <!-- *************************************** -->
    
        <?php
            foreach ($comments as $comment) {?>
        <div class='author-comments'>
            <div class="row">
                <div class="col-sm-3">
                    <h3 class='post-title'>
                        <a href="<?php echo get_permalink($comment -> comment_post_ID) ?>">
                            <?php echo get_the_title($comment -> comment_post_ID) ?>
                        </a>
                    </h3>
                    <br> 
                    <span class="post-date">
                        <i class="fa fa-calendar fa-fw"></i>
                        <?php echo 'has added on: ' . mysql2date('l, F j, Y', $comment -> comment_date); ?>
                    </span>
                    <!-- <br> -->
                </div>
                <div class="col-sm-9"> 
                    <div class="post-content">
                        <?php echo  $comment -> comment_content ?>
                    </div>
                </div>
            </div>
        </div>
            <!-- <hr>  -->
            <?php }
                } else {
                    echo 'there is not any comments';
                }    
                ?>
                <?php ?>
    </div>
    </div>
    </div>
    <!-- End row -->
</div>
<?php get_sidebar();  // RADY 25-9-2021?>
<?php  get_footer();?>