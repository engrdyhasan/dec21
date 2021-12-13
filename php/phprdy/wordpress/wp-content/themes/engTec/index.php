<?php
/*
 * The main template file
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Noor
 * @since Noor 1.0
 */
get_header();?>
<div class="container home-page">
	<div class="row">

	<?php
	if ( have_posts() ) {	// Check if there's posts	
		while ( have_posts() ) { // Load posts loop.
			the_post();
	?>

	  <div class="col-sm-6">
			<div class="main-post">

      	<h3 class="post-title">
        <a href="<?php the_permalink() ?>"> 
          <?php the_title();?> 
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
					'comments-url', 'Comments are off');
					?>
      </span>

			 <!-- <img class="img-responsive img-thumbnail" src="wp-content/themes/RADY/images/t.jpg" />Engrdy -->

			<?php// the_post_thumbnail('post-thumbnail',['class'=>'img-responsive img-thumbnail','title'=>'post Image']) ?>
			<?php the_post_thumbnail('', ['class'=>'img-responsive img-thumbnail','title'=>'post Image']) ?>

				<div class="post-content">
					<?php
					// if ( is_category() || is_archive() ) {
						the_excerpt(44);
					// } else {
						// the_content('Read more... ' . get_the_title());
					// } 
					?>
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
		</div>

		<?php
		}//end while loop
}//end if condition	

	// Previous/next posts_link.
echo '<div class="clearfix"></div>'; 

echo '<div class="post-pagination">';
		
if (get_previous_posts_link()) {
  previous_posts_link('<i class="fa fa-chevron-left fa-lg" aria-hidden="true"></i> new post');
} else {
	echo '<span class=" ">No newest post  </span>';
  }

  if (get_next_posts_link()) {
    next_posts_link('old post <i class="fa fa-chevron-right  fa-lg" aria-hidden="true"></i>');
  } else {
    echo '<span class="next-span">No oldest post</span>';
  } 
  echo '</div>';

  // echo numbering_pagination();

  

		?>	
	</div>
</div>

<?php get_footer(); ?>
