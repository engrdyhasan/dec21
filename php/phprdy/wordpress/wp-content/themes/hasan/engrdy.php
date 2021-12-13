password : KPGhlZZqsdZQt$msE!clwJem
user: engrdy
<?php
echo wp_trim_words( get_the_content(), 40, '...' );
?>
//**********************
<?php echo wp_trim_words( get_the_title(), 15 ); ?>
//**********************
//**********************
$text = 'Some very long text';
$words = 20;
$more = ' […]';
 
$excerpt = wp_trim_words( $text, $words, $more );
//**********************
$args = array(
    'number' => 3,
);
$comments_query = new WP_Comment_Query;
$comments = $comments_query->query( $args );
if ( $comments ) {
    foreach ( $comments as $comment ) {
        echo wp_trim_words( $comment->comment_content, 20, ' […]' );
    }
}
//**********************
function wp_trim_words( $text, $num_words = 55, $more = null ) {
    if ( null === $more ) {
        $more = __( '&hellip;' );
    }
 
    $original_text = $text;
    $text          = wp_strip_all_tags( $text );
    $num_words     = (int) $num_words;
 
    /*
     * translators: If your word count is based on single characters (e.g. East Asian characters),
     * enter 'characters_excluding_spaces' or 'characters_including_spaces'. Otherwise, enter 'words'.
     * Do not translate into your own language.
     */
    if ( strpos( _x( 'words', 'Word count type. Do not translate!' ), 'characters' ) === 0 && preg_match( '/^utf\-?8$/i', get_option( 'blog_charset' ) ) ) {
        $text = trim( preg_replace( "/[\n\r\t ]+/", ' ', $text ), ' ' );
        preg_match_all( '/./u', $text, $words_array );
        $words_array = array_slice( $words_array[0], 0, $num_words + 1 );
        $sep         = '';
    } else {
        $words_array = preg_split( "/[\n\r\t ]+/", $text, $num_words + 1, PREG_SPLIT_NO_EMPTY );
        $sep         = ' ';
    }
 
    if ( count( $words_array ) > $num_words ) {
        array_pop( $words_array );
        $text = implode( $sep, $words_array );
        $text = $text . $more;
    } else {
        $text = implode( $sep, $words_array );
    }
 
    /**
     * Filters the text content after words have been trimmed.
     *
     * @since 3.3.0
     *
     * @param string $text          The trimmed text.
     * @param int    $num_words     The number of words to trim the text to. Default 55.
     * @param string $more          An optional string to append to the end of the trimmed text, e.g. &hellip;.
     * @param string $original_text The text before it was trimmed.
     */
    return apply_filters( 'wp_trim_words', $text, $num_words, $more, $original_text );
//**********************
if( ! function_exists( 'smyles_wp_split_words' ) ){
    /**
     * Split a string based on word count
     *
     * This is similar to WordPress wp_trim_words function, but instead of just trimming after a certain amount of
     * words, this function returns an array with 'before' and 'after' keys -- providing you the string of text up
     * to the number of words (in before key), and the words after (in the after key).  After key will be empty string
     * if there are less words in the passed string than number of words to split on.
     *
     *
     * @param string    $text
     * @param int       $num_words
     *
     * @return array    Array with `before` and `after` keys. The `before` key contains all words up to $num_words, the
     *                  `after` key contains the words after $num_words (or empty string if passed string has less words
     *                  than passed in $text)
     *
     */
    function smyles_wp_split_words( $text, $num_words = 55 ) {
        $text = wp_strip_all_tags( $text );
        /*
         * translators: If your word count is based on single characters (e.g. East Asian characters),
         * enter 'characters_excluding_spaces' or 'characters_including_spaces'. Otherwise, enter 'words'.
         * Do not translate into your own language.
         */
        if ( strpos( _x( 'words', 'Word count type. Do not translate!' ), 'characters' ) === 0 && preg_match( '/^utf\-?8$/i', get_option( 'blog_charset' ) ) ) {
            $text = trim( preg_replace( "/[\n\r\t ]+/", ' ', $text ), ' ' );
            preg_match_all( '/./u', $text, $words_array_matches );
            $words_array = $words_array_matches[0];
            $sep         = '';
        } else {
            $words_array = preg_split( "/[\n\r\t ]+/", $text, -1, PREG_SPLIT_NO_EMPTY );
            $sep         = ' ';
        }
        if ( count( $words_array ) > $num_words ) {
            $before = implode( $sep, array_slice( $words_array, 0, $num_words ) );
            $after  = implode( $sep, array_slice( $words_array, $num_words, count( $words_array ) - 1 ) );
        } else {
            $before = implode( $sep, $words_array );
        }
        $results = array(
            'before' => $before,
            'after' => isset( $after ) ? $after : ''
        );
        return $results;
    }
}
//**********************
