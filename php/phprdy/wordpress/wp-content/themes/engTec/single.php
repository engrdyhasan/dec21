<?php get_header();?>
<div class="container post-page">
	<?php
	if ( have_posts() ) {	// Check if there's posts	
		while ( have_posts() ) { // Load posts loop.
			the_post();
	?>
			<div class="main-post single-post">
				<?php edit_post_link('Edit <i class="fa fa-pen"></i>') ?>
      	<h3 class="post-title">
        	<a href="<?php the_permalink() ?>"> 
        	  <?php the_title()?> 
        	</a>
				</h3>

			<span class="post-author">
				<i class="fa fa-user fa-fw"></i><?php the_author_posts_link() ?>,
			</span>

			<span class="post-date">
        <i class="fa fa-calendar fa-fw"></i><?php the_date('F j, Y'); ?> at <?php the_time('g:i a') ?>
			</span>

			<span class="post-comments">
			  <i class="fa fa-comments fa-fw"></i>
					<?php 
					comments_popup_link( 'add your comment', '1 comment', '% comments',
					'comments-url', 'Comments are off for this post');
					?>
			</span>

			<div class="row">
				<div class=" col-sm-4 ">
					<?php the_post_thumbnail('',['class'=>'img-responsive img-thumbnail','title'=>'post Image']) ?>
        </div>

				<!-- <div class="col-xs-8 col-sm-8 col-md-8 col-xl-8"> -->
					<div class="post-content">
						<?php the_content()	?>
        	</div>
        	<!-- </div> -->
      </div>

					 <hr>
					<p class="post-categories">
						<i class="fa fa-tags fa-fw"></i>	
						<?php the_category(', ') ?>
					</p>

					<p class="post-tags">
					<?php
						if (has_tag() ) {
							the_tags();
						}else{
							echo 'Tags: There\'s no tags ';
						}
					?>
					</p>
		</div>
		<?php
		}//end while loop
}//end if condition	

			// Previous/next posts_link.
		echo '<div class="clearfix"></div>';//fix float clear
		// get post id === get_queried_object_id();
		
    
      $random_posts_arguments = array( 
		  'posts_per_page'	=> 5,
		  'orderby'			=> 'rand',
		  'category__in' => wp_get_post_categories( get_queried_object_id()),
		  'post__not_in'	=> array(get_queried_object_id())
	);
      $ $random_posts = new WP_Query($random_posts_arguments);
      if ( $ $random_posts->have_posts() ) {	// Check if there's posts	
        while ( $ $random_posts->have_posts() ) { // Load posts loop.
          $ $random_posts->the_post();    ?>
        <div class="author-posts">
            <h3 class="post-title">
              <a href="<?php the_permalink() ?>"> 
                <?php the_title() ?> 
              </a>
            </h3>
<hr>
            </div>
                                  <div class="clear-fix"></div>
        <?php
        }//end while loop
    }//end if condition	
    wp_reset_postdata();//reset loop
		?>

		<div class="author-area">
		<div class="row">
			<div class="col-md-2">
				<?php 
					$avatar_arguments = array(
						'class' => 'img-responsive img-thumbnail center-block'
					);
					echo get_avatar(get_the_author_meta('ID'), 128, '', 'User Avatar', $avatar_arguments); 
				?>
			</div>

			<div class="col-xs-8 col-sm-8 col-md-8 col-xl-8 author-info">
				<h4>
					<?php the_author_meta( 'first_name') ?>
					<?php the_author_meta( 'last_name') ?>
					(<span class="nickname"> <?php the_author_meta('nickname') ?></span>)
				</h4>
				<?php if (get_the_author_meta('description')) { ?>
					<p><?php the_author_meta('description') ?></p>
				<?php } else {
					echo 'ther\'s no biography ';
				}
			 	?>
			</div>
				<!-- end row -->
			<div class="col-xs-2 col-sm-2 col-md-2 col-xl-2">
				<p class="author-stats">
					User posts count: [ <span class="posts-count"><?php echo count_user_posts(get_the_author_meta('ID'))?> </span>],
					User profile link: <?php the_author_posts_link() ?>
				</p>
			</div>
		</div>
<!-- end auther area -->
	<?php
	echo '<hr class="comment-separator">';
	echo '<div class="post-pagination">';

	if (get_previous_post_link()) {//Check if previous post is exits
	  previous_post_link('%link', '<i class="fa fa-chevron-left " aria-hidden="true"></i> older article: %title');
	} else {
		echo '<span class=" previous-span">Previos article: None  </span>';
	}

	if (get_next_post_link()) {
		next_post_link('%link', 'newer article: %title <i class="fa fa-chevron-right " aria-hidden="true"></i>');
	} else {
		echo '<span class="next-span"> No newer page </span>';
	} 
	echo '</div>';	
	echo '<hr class="comment-separator">';
	comments_template();
		?>	
</div>
<?php get_footer(); ?>
