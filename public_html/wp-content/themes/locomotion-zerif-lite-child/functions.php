<?php

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles',99);
add_shortcode('wpb_childpages', 'wpb_list_child_pages');

function child_enqueue_styles() {
    $parent_style = 'parent-style';
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( $parent_style ) );
}
if ( get_stylesheet() !== get_template() ) {
    add_filter( 'pre_update_option_theme_mods_' . get_stylesheet(), function ( $value, $old_value ) {
         update_option( 'theme_mods_' . get_template(), $value );
         return $old_value; // prevent update to child theme mods
    }, 10, 2 );
    add_filter( 'pre_option_theme_mods_' . get_stylesheet(), function ( $default ) {
        return get_option( 'theme_mods_' . get_template(), $default );
    } );
}

	// List the set of pages which have this page as its parent
	// Output content snippet and image if available
function wpb_list_child_pages() {

	$search_options = array('child_of' => get_the_id());
	$pages_list = get_pages( $search_options );

	foreach ($pages_list as $this_page) {

		$content = $this_page->post_content;
		if ( $content == "") {
			continue;
		}

		$content = strip_tags( apply_filters('wp_trim_excerpt', $content) );

		$filtered_content = mb_substr($content, 0, 430);
		if ($filtered_content != $content) {
			$filtered_content .= "... [<a href='".get_page_link( $this_page->ID )."'>read more</a>]";
		}
		?>

		<div style='margin-top:1.5em;'>
			<h3>- <a href="<?php echo get_page_link( $this_page->ID ); ?>"><?php echo $this_page->post_title; ?></a></h3>
			<div class="entry" style='padding-left:1em'><?php echo $filtered_content; ?></div>
		</div>
		<?php
	}
}

?>