
// If comments are open or we have at least one comment, load up the comment template.
// if ( comments_open() || get_comments_number() ) :
    //     // comments_template();
    //     wp_list_comments();
    // endif;
    
    <ol class="comment-list">
        <?php
        if ( comments_open() || get_comments_number() ) {
            // echo '<ul class="list-unstyled ">';
            echo '<ul class="comments-list">';
            $comments_arguments = array(
                'walker'            => null,
                // 'max_depth'      => '',
                'max_depth'         => 5,
                // 'style'          => 'ul',
                'style'             => 'ol',
                'callback'          => null,
                'end-callback'      => null,
                'type'              => 'all',
            // 'type'               => 'comment',
                'page'              => '',
                'per_page'          => '',
                'avatar_size'       => 32,
                'reverse_top_level' => true,//new comment on top
                // 'reverse_top_level' => null,
                'reverse_children'  => '',
                'format'            => 'html5', // or 'xhtml' if no 'HTML5' theme support
                // 'short_ping'     => false,   // @since 3.6
                'short_ping'        => true,
                'echo'              => true     // boolean, default is true
            );
            // echo '</ul>';
        wp_list_comments($comments_arguments);
        }else{
            echo 'sorry comments are disabled';
        }
    ?>
</ol><!-- .comment-list -->