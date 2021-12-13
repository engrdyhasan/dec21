<?php  get_header();?>
<div class="container  home-page">
<div class="row">
    <div class = "category-information text-center ">
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 ">
            <h1 class="category-title"><?php single_cat_title() ?></h1>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 ">
            <div class="category-description"><?php echo category_description() ?></div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 ">
            <div class="cat-stats">
                <span>Article: <?php the_author_posts(); ?> posts</span><br>
                <span>Comments:  <?php comments_popup_link('0 Comment','1 Comment','% Comments','comment-url','No Comments') ?></span>
            </div>
        </div>
    </div>
</div>
<?php 
    if ( have_posts() ) {
        while ( have_posts() ) {
            the_post(); ?>
        <!-- <div class="container"> -->
            <!-- <div class="row"> -->
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
                            <?php the_post_thumbnail('medium', ['class' => 'img-responsive img-thumbnail', 'title' => 'Feature image']);?>
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
            <!-- </div> -->
        <!-- </div> -->

                    
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
                    //     numbering_pagination
                ?>
                <div class='pagination-numbers'>
                    <?php echo numbering_pagination(); ?>
                </div>
                        <?php get_sidebar(); ?>
    </div>
</div>
<?php get_footer(); ?>