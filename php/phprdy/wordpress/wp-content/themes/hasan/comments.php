<!-- If comments are open or we have at least one comment, load up the comment template. -->
    <!-- <ol class="comments-list comment "> -->
        <?php
        if ( comments_open()) {
            // if ( comments_open() || get_comments_number() ) { ?>
                <h3 class="comments-count"> <?php comments_number('0 Comment','1 Comment','% Comments')  ?></h3>
           <?php
            echo '<ul class="list-unstyled comments-list">';
            // echo '<ul class="comments-list">';
            $comments_arguments = array(
                // 'walker'            => null,
                // 'max_depth'      => '',
                'max_depth'         => 3,
                // 'style'          => 'ul',
                // 'style'             => 'ol',
                // 'callback'          => null,
                // 'end-callback'      => null,
                // 'type'              => 'all',
                'type'              => 'comment',
                // 'page'              => '',
                // 'per_page'          => '',
                'avatar_size'       => 64,
                'reverse_top_level' => true,//new comment on top
                // 'reverse_top_level' => null,
                // 'reverse_children'  => '',
                // 'format'            => 'html5', // or 'xhtml' if no 'HTML5' theme support
                // 'short_ping'     => false,   // @since 3.6
                // 'short_ping'        => true,
                // 'echo'              => true     // boolean, default is true
            );
            wp_list_comments($comments_arguments);
            echo '</ul>';
            echo '<hr class="comment-separator">';
            // *******************************************************
                             // comment_form();

            $comments_args = array(
                'title_reply' => 'Add your comment',
                'title_reply_to' => 'Add a reply to [%s]',
                'class_submit' => 'btn btn-primary btn-md',
                'comment_notes_before' => ''
                
            );
            comment_form( $comments_args );
                 
            // $comments_args = array(
            //     //Define Fields
            //     'fields' => array(
            //         //Author field
            //         'author' => '<div class="form-group"><label>Your name</label> <input class="form-control"></div>',
            //         //Email Field
            //         'email' => '<div class="form-group"><label> email</label>email</div>',
            //         //URL Field
            //         'url' => '<div class="form-group"><label> url</label>url</div>',
            //     ),
                
            //     'comment_field' => '<div class="form-group">textarea</div>',
            // );
            // comment_form( $comments_args );
            
            
        }else{
            echo 'sorry comments are disabled';
        }
        <?php get_sidebar();  // RADY 25-9-2021?>
//  </ol>comment-list