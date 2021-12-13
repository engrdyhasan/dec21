<?php get_header() ?>
<div class="container author-page">
  <h1 class="profile-header text-center"><span class="nickname"> <?php the_author_meta('nickname') ?> page</span></h1>
  <div class="author-main-info">
  <!-- start row -->
    <div class="row">
    <!-- <hr> -->
      <div class="col-sm-3">
        <?php $avatar_arguments = array('class' => 'img-responsive img-thumbnail center-block');
          echo get_avatar(get_the_author_meta('ID'), 196, '', 'User Avatar', $avatar_arguments); 
        ?>
      </div>
      <div class="col-sm-9">
          <ul class="author-names list-unstyled">
            <li><span>First name:</span>  <?php the_author_meta('first_name') ?></li>
            <li><span>Last name:</span>  <?php the_author_meta('last_name') ?></li>
            <li><span>Nickname: </span>  <?php the_author_meta('nickname') ?></li>
          </ul>
        <hr>
        <?php if (get_the_author_meta('description')) { ?>
        <p><?php the_author_meta('description') ?></p>
          <?php } else {
                echo 'ther\'s no biography ';
              }
          ?>
      </div>
    </div>
    <!-- end row -->
  </div>
    <hr>
    <!-- start row -->
  <div class="row author-stats">
    <div class="col-sm-3">
      <div class="stats">
        Posts Count :
        <span class="posts-count"><?php echo count_user_posts(get_the_author_meta('ID'))?> </span>
      </div>
    </div>
    
    <div class="col-sm-3">
      <div class="stats">
      Comments Count :
        <span>
          <?php 
            $commentscount_arguments = array(
              'user_id' => get_the_author_meta('ID'),
              'count'   => true
            );
            echo get_comments($commentscount_arguments);
          ?>
        </span>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="stats">
       Total Posts view :
        <span>0</span>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="stats">
        Testing
        <span>11</span>
      </div>
    </div>
  </div>
      <!-- end row -->
    <?php
    if (count_user_posts(get_the_author_meta('ID')) >= 7) {
      $author_posts_per_page = 7;
    } else {
      $author_posts_per_page = count_user_posts(get_the_author_meta('ID'));
    }
    
      $author_posts_arguments = array( 
        'author' => get_the_author_meta('ID'),
        'posts_per_page' =>   $author_posts_per_page
        // 'posts_per_page' => -1     //all posts
      );
      $author_posts = new WP_Query( $author_posts_arguments );
 
      if ( $author_posts->have_posts() ) {	// Check if there's posts	?>
        <h3 class="author-posts-title">latest: [ <?php echo  $author_posts_per_page ?> ] posts of: <?php the_author_meta('nickname') ?>  </h3>
        <!-- <h3 class="author-posts-title"><?php// the_author_meta('nickname') ?>  posts: </h3> -->
        <?php
        while ( $author_posts->have_posts() ) { // Load posts loop.
          $author_posts->the_post();    ?>

        <div class="author-posts">
        <div class="row">
          <div class="col-sm-2">
            <?php the_post_thumbnail('', ['class'=>'img-responsive img-thumbnail','title'=>'Post Image']) ?>
          </div>

          <div class="col-sm-10">
            <h3 class="post-title">
              <a href="<?php the_permalink() ?>"> 
                <?php the_title() ?> 
              </a>
            </h3>
    
            <span class="post-date">
              <i class="fa fa-calendar fa-fw"></i><?php the_date('F j, Y'); ?> at <?php the_time('g:i a') ?>
            </span>
      
            <span class="post-comments">
              <i class="fa fa-comments fa-fw"></i>
                <?php comments_popup_link('add your comment', '1 comment', '% comments','comments-url', 'Comments are off for this post');?>
            </span>
      
            <div class="post-content">
              <?php
                // if ( is_category() || is_archive() ) {
                  the_excerpt(22);
                // } else {
                  // the_content('Read more... ' . get_the_title());
                // } 
              ?>
            </div>
          </div>
        </div>
      </div>
                                  <div class="clear-fix"></div>
        <?php
        }//end while loop
    }//end if condition	
    wp_reset_postdata();//reset loop
    $comments_per_page = 7;
   
      $comments_arguments = array( 
        'user_id'     => get_the_author_meta('ID'),
        'status'      => 'approve',
        'number'      =>   $comments_per_page,
        'post_status' =>   'publish',
        'post_type'   =>   'post'
      );

      $comments = get_comments( $comments_arguments );
      if ($comments) { ?>
      <h3 class="author-comments-title">
      <?php 
         if (get_comments($commentscount_arguments) >= $comments_per_page) {
          echo 'Latest  [' . $comments_per_page . ']   Comments of: ';
          the_author_meta('nickname');
        } else {
          echo 'no 7 comments, Latest [ ' . get_comments($commentscount_arguments) . '] Comments of: ';
          the_author_meta('nickname');
        };
      ?> 
      </h3>

           <?php
      foreach ($comments as $comment) { ?>
      <div class="author-comments"> 
      <h3 class="post-title">
          <a href="<?php echo get_permalink($comment->comment_post_ID)  ?>">
          <?php  echo get_the_title($comment->comment_post_ID)  ?>
          </a>
          </h3>
          <span class="post-date">
          <i class="fa fa-calendar fa-fw"></i>
          <?php echo 'Add on: ' . mysql2date( 'l, F j, Y',$comment->comment_date); ?>
          </span>
          <div class="post-content">
          <?php echo $comment->comment_content ?>
          </div>
          </div>
      <?php }
      }else{
        echo 'the author has not any comments';
      }
      ?>
</div>

<?php get_footer() ?>


