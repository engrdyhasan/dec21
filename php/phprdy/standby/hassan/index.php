<?php get_header(); ?>
<?php bloginfo('name')?>
<div class="container">
    <div class="row">
        <?php 
            if ( have_posts() ) {
                while ( have_posts() ) {
                    the_post(); ?>
                        <div class="col-sm-6">
                            <div class="main-post">

                                <h3 class="post-title">
                                    <a href="<?php the_permalink() ?>" 
                                        title="<?php //the_title_attribute() ?>"> 
                                       <?php the_title(); ?>
                                    </a>
                                </h3>
                                
                                <span class="post-author">
                                    <i class="fa fa-user fa-fw "></i>
                                    <!-- <p><?php //the_author(); ?> has blogged <?php //the_author_posts(); ?> posts</p>,  -->
                                    <!-- <p><?php// the_author_posts_link(); ?> has blogged <?php// the_author_posts(); ?> posts</p>,  -->
                                    <?php the_author_posts_link(); ?> has blogged <?php the_author_posts(); ?> posts, 
                                </span>

                                <span class="post-date">
                                    <i class="fa fa-calendar fa-fw "></i>
                                    Posted: <?php the_date('F j, Y'); ?> at <?php the_time('g:i a'); ?>
                                    <!-- <p>Posted: <?php //the_date('F j, Y'); ?> at <?php //the_time('g:i a'); ?></p> -->
                                    <?php //the_time() ?>, 
                                </span>

                                <span class="post-comments">
                                    <i class="fa fa-comments fa-fw "></i>
                                    <?php //comments_popup_link() ?>
                                    <?php comments_popup_link('Post a Comment','1 Comment','% Comments','comment-url','Comments are Closed') ?>
                                </span>

                                <?php if ( has_post_thumbnail() ) : ?>
                                <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-responsive img-thumbnail', 'title' => 'Feature image']);?>
                                <?php //the_post_thumbnail('post-thumbnail', ['class' => 'img-responsive responsive--full', 'title' => 'Feature image']);?>
                                    <!-- <a href="<?php //the_permalink(); ?>" title="<?php //the_title_attribute(); ?>"> -->
                                        <?php //the_post_thumbnail('thumbnail'); ?>
                                    <!-- </a> -->
                                <?php endif; ?>

                                <!-- <img src="http://placehold.it/500x200/300" alt=""> -->
                                <p class="post-content">
                                    <?php //the_content('continue reading...' . get_the_title()); ?>
                                    <?php //the_content('Read more...'); ?>
                                    <?php //the_excerpt('Read more...'); ?>
                                    <?php the_excerpt(); ?>
                                    <!-- <a href="<?php //echo get_permalink(); ?>"> Read more...</a> -->
                                </p>
                                
                                <hr>
                                <p class="post-categories">
                                    <i class="fa fa-tags fa-fw "></i>   <?php the_category( ' , ' ); ?>
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
                        </div>
                    <?php
                                    }// end while loop
                                    } //end if condition
                                   
                        echo '<div class="post-pagination">';

                            if (get_previous_posts_link()) {
                                previous_posts_link(' <i class="fa fa-chevron-left fa-fw fa-lg " aria-hidden="true" ></i> prev');
                            } else {
                                echo '<span>no prev page</span>';    
                            }

                            if (get_next_posts_link()) {
                                next_posts_link('next  <i class="fa fa-chevron-right fa-fw fa-lg " aria-hidden="true" ></i>');
                            } else {
                                echo '<span>no next page</span>';
                            }

                        echo '</div>';
                    ?>
                    
           
            <?php get_sidebar(); ?>
            eng rady is the best
    </div>
                    <h1><?php the_title(); ?></h1>
</div>





<?php //echo '<hr>'?>

<?php //echo '<hr>'?>
<?php //echo get_template_directory_uri(); ?>
<?php //echo '<br>'?>
<?php //echo get_template_directory_uri().'/css/bootstrap.min.css'; ?>

<?php //get_search_form(); ?>
<?php get_footer(); ?>