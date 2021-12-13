<?php get_header(); ?>
<p class="text-center">
<h2><?php bloginfo('name')?></h2>
</p>
<div class="container  home-page">
    <div class="row">
        <?php 
            if ( have_posts() ) {
                while ( have_posts() ) {
                    the_post(); ?>
                        <div class="col-sm-6">
                            <div class="main-post">

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

                                <?php if ( has_post_thumbnail() ) : ?>
                                    <?php //the_post_thumbnail('thumbnail', ['class' => 'img-responsive img-thumbnail', 'title' => 'Feature image']);?>
                                    <?php the_post_thumbnail('medium', ['class' => 'img-responsive img-thumbnail', 'title' => 'Feature image']);?>
                                    <?php //the_post_thumbnail('medium-large', ['class' => 'img-responsive img-thumbnail', 'title' => 'Feature image']);?>
                                <?php endif; ?>

                                <div class="post-content">
                                        <?php the_excerpt(); ?>
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
                        </div>
                    <?php
                                    }// end while loop
                                } //end if condition         
                        echo '<div class="clearfix"></div>';
                        echo '<div class="post-pagination">';
                            if (get_previous_posts_link()) {
                                previous_posts_link('<i class="fa fa-chevron-left fa-lg" aria-hidden="true"></i> newest');
                            } else {
                                echo '<span class="previous-span">newest </span>';    
                            }

                            if (get_next_posts_link()) {
                                next_posts_link('oldest   <i class="fa fa-chevron-right fa-lg " aria-hidden="true" ></i>');
                            } else {
                                echo '<span class="next-span">oldest</span>';
                            }
                        echo '</div>';
                    ?>
            <?php get_sidebar(); ?>
            eng rady is the best
    </div>
</div>
<?php get_footer(); ?>