<?php get_header(); ?>
<h2><?php bloginfo('name')?></h2>

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
                                    <?php the_author_posts_link(); ?> has blogged <?php the_author_posts(); ?> posts, 
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
                                    <div class="col-sm-7">
                                        <?php if ( has_post_thumbnail() ) : ?>
                                        <?php the_post_thumbnail(array(700,500), ['class' => 'img-responsive img-thumbnail', 'title' => 'Feature image']);?>
                                        <?php endif; ?>
                                    </div>        
                                    <!-- <div class="col-sm-5"> -->
                                        <div class="post-content">
                                            <?php
                                            // if ( is_category() || is_archive() ) {
                                                    // the_excerpt();
                                            // } else {
                                                the_content();
                                            // } 
                                            ?>
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
            eng rady is the best
</div>
<?php get_footer(); ?>