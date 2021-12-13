<?php 
$comments_args = array(
    'status' => 'approve'
);
$comments_count =0;
$all_comments = get_comments( $comments_args);
foreach ($all_comments as $comment) {
    $post_id = $comment-> comment_post_ID;
    if (! in_category('linux', $post_id)) {
        continue;
    }
    $comments_count++;
}
// ge category posts_count
$cat = get_queried_object();
$posts_count = $cat->count;
?>

<div class="sidebar-linux">
    <div class="widget">
        <h3 class="widget-title"><?php single_cat_title() ?> Statistics</h3>
        <div class="widget-content">
            <ul>
                <li>
                    <span>Comments Count</span> : <?php echo $comments_count; ?>
                </li>
                <li>
                    <span>Posts Count</span> : <?php echo $posts_count; ?>
                </li>
            </ul>
        </div>
    </div>
    <div class="widget">
        <h3 class="widget-title">Latest PHP Posts </h3>
        <div class="widget-content">
            <ul>
                <?php
                    $posts_args = array(
                        'posts_per_page' => 5,
                        'id' => 270,
                        // 'cat' => 'linux',
                    );
                    $query = new WP_Query($posts_args);
                    if ($query->have_posts()) {
                        while ($query->have_posts()){
                            $query->the_post(); ?>
                                <li>
<a target="_blank" href=" <?php echo the_permalink() ?>"><?php the_title()?></a>
<!-- <a href=" <?php //echo the_permalink() ?>"><?php// the_title()?></a> -->
                                    </li>
                          <?php
                        }
                        }
                ?>
            </ul>
        </div>
    </div>
    <div class="widget">
        <h3 class="widget-title">Hot Post by comments </h3>
        <div class="widget-content">
            <ul>
                <?php
                    $hotpost_args = array(
                        'posts_per_page' => 3,
                        'orderby' => 'comment_count'
                    );
                    $hotpost = new WP_Query($hotpost_args);
                    if ($hotpost->have_posts()) {
                        while ($hotpost->have_posts()){
                            $hotpost->the_post(); ?>
                                <li>
<a target="_blank" href=" <?php echo the_permalink() ?>"><?php the_title()?></a>
<!-- <a href=" <?php //echo the_permalink() ?>"><?php// the_title()?></a> -->
                                    </li>
                                    <span class="post-comments">
                                    <i class="fa fa-comments fa-fw "></i>
                                    <?php comments_popup_link('0 Comment','1 Comment','% Comments','comment-url','No Comments') ?>
                                </span>
                          <?php
                        }
                        wp_reset_postdata();
                        }
                ?>
            </ul>
        </div>
    </div>
    <?php get_sidebar();  // RADY 25-9-2021?>
</div>
