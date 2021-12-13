<!-- ************* -->
You can also give Post Thumbnails their own class:

// Give the Post Thumbnail a class "alignleft".
echo get_the_post_thumbnail( $post_id, 'thumbnail', array( 'class' => 'alignleft' ) );

<!-- ************* -->
Sample Usage

<?php $pages = get_pages( array( 'child_of' => 1 ) ); ?> 
<ul>
    <?php foreach ( $pages as $page ) : ?>
        <li>
            <?php echo get_the_post_thumbnail( $page->ID, 'thumbnail' ); ?>
            <h1><?php echo apply_filters( 'the_title', $page->post_title, $page->ID ); ?></h1>
            <?php echo apply_filters( 'the_content', $page->post_content ); ?>
        </li>
    <?php endforeach; ?>
</ul>
<!-- ************* -->
Thumbnail Sizes
The default image sizes of WordPress are “thumbnail”, “medium”, “large” and “full” (the size of the image you uploaded).
These image sizes can be configured in the WordPress Administration Media panel under Settings > Media.
Themes may also add “post-thumbnail”. This is how you can use these default sizes with get_the_post_thumbnail():

// without parameter -> Post Thumbnail (as set by theme using set_post_thumbnail_size())
get_the_post_thumbnail( $post_id );                   
 
get_the_post_thumbnail( $post_id, 'thumbnail' );      // Thumbnail (Note: different to Post Thumbnail)
get_the_post_thumbnail( $post_id, 'medium' );         // Medium resolution
get_the_post_thumbnail( $post_id, 'large' );          // Large resolution
get_the_post_thumbnail( $post_id, 'full' );           // Original resolution
 
get_the_post_thumbnail( $post_id, array( 100, 100) ); // Other resolutions
<!-- ************* -->
<?php $pages = get_pages( array( 'child_of' => 1 ) ); ?> 
<ul>
    <?php foreach ( $pages as $page ) : ?>
        <li>
            <?php echo get_the_post_thumbnail( $page->ID, 'thumbnail' ); ?>
            <h1><?php echo apply_filters( 'the_title', $page->post_title, $page->ID ); ?></h1>
            <?php echo apply_filters( 'the_content', $page->post_content ); ?>
        </li>
    <?php endforeach; ?>
</ul>
<!-- ************* -->
Default Usage
// Check if the post has a Post Thumbnail assigned to it.
if ( has_post_thumbnail() ) {
    the_post_thumbnail();
} 
the_content();
Note: To return the Post Thumbnail for use in your PHP code instead of displaying it, use: get_the_post_thumbnail().
<!-- ************* -->
If you are worried about the sizes attributes are too big for your usage, you can do something like this :

the_post_thumbnail( 'large', array( 'sizes' => '(max-width:320px) 145px, (max-width:425px) 220px, 500px' ) );
The 'sizes' array consists of media queries, so the first parameter is your media query, and the second if what size-width image, should be rendered at that viewportsize. the last parameter is the default size if none of the given media-queries applies.

Useful if you use a column-based grid, where you don’t want the image to be rendered 100vw on smaller viewports.
<!-- ************* -->
You can also explicitly set eager loading for thumbnails (if you don’t want to leave it to the browser to decide):-

the_post_thumbnail( '', array( 'loading' => 'eager' ) );
<!-- ************* -->
the_post_thumbnail('post-thumbnail', ['class' => 'img-responsive responsive--full', 'title' => 'Feature image']);
<!-- ************* -->
<?php if ( has_post_thumbnail() ) : ?>
    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
        <?php the_post_thumbnail(); ?>
    </a>
<?php endif; ?>
<!-- ***************** -->
// remove width & height attributes from images
//
function remove_img_attr ($html)
{
    return preg_replace('/(width|height)="\d+"\s/', "", $html);
}
 
add_filter( 'post_thumbnail_html', 'remove_img_attr' );
<!-- ******************** -->
Disable lazy-loading on post thumbnail

If you want to prevent WordPress from adding lazy-loading (default behavior since 5.5), use this line where your theme calls the thumbnail:

1
the_post_thumbnail( '', array( 'loading' => '' ) );

<!-- ******************** -->
Post Thumbnail Linking to Large Image Size

This example links to the “large” Post Thumbnail image size and must be used within The Loop.

if ( has_post_thumbnail() ) {
    $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );
    if ( ! empty( $large_image_url[0] ) ) {
        printf( '<a href="%1$s" alt="%2$s">%3$s</a>',
            esc_url( $large_image_url[0] ),
            esc_attr( get_the_title_attribute( 'echo=0' ) ),
            get_the_post_thumbnail()
        );
    }
}
<!-- ******************** -->
<?php 
                                    // comments_popup_link( 
                                    //     __( 'Post a Comment', 'wpdocs_textdomain' ), 
                                    //     __( '1 Comment', 'wpdocs_textdomain' ), 
                                    //     __( '% Comments', 'wpdocs_textdomain' ),
                                    //     // $css_class,
                                    //     __( 'Comments are Closed', 'wpdocs_textdomain' )
                                    // );
                                    ?> 
<!-- ******************** -->

<?php //the_title('<h3 class="post-title">','</h3>'); ?>
                                <!-- <h3 class="post-title">our main post title 1, </h3> -->
                                <!-- <a href="<?php// the_permalink(); ?>" title="<?php //the_title_attribute(); ?>"><?php //the_title(); ?></a> -->
                                
<!-- ******************** -->
