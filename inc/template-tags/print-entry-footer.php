<?php
/**
 * Prints HTML with meta information for the categories, tags and comments.
 *
 * @package ng_s
 */

namespace NicolasGillium\ng_s;

/**
 * Prints HTML with meta information for the categories, tags and comments.
 *
 * @author WebDevStudios
 */
function print_entry_footer() {
	// Hide category and tag text for pages.
	if ( 'post' === get_post_type() ) {
		/* translators: used between list items, there is a space after the comma */
		$categories_list = get_the_category_list( esc_attr__( ', ', 'ng_s' ) );
		if ( $categories_list && get_categorized_blog() ) {

			/* translators: the post category */
			printf( '<div class="cat-links">' . esc_attr__( 'Posted in %1$s', 'ng_s' ) . '</div>', $categories_list ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- XSS OK.
		}

		/* translators: used between list items, there is a space after the comma */
		$tags_list = get_the_tag_list( '', esc_attr__( ', ', 'ng_s' ) );
		if ( $tags_list ) {

			/* translators: the post tags */
			printf( '<div class="tags-links">' . esc_attr__( 'Tagged %1$s', 'ng_s' ) . '</div>', $tags_list ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- XSS OK.
		}
	}

	if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
		echo '<div class="comments-link">';
		comments_popup_link( esc_attr__( 'Leave a comment', 'ng_s' ), esc_attr__( '1 Comment', 'ng_s' ), esc_attr__( '% Comments', 'ng_s' ) );
		echo '</div>';
	}

	edit_post_link(
		sprintf(
			/* translators: %s: Name of current post */
			esc_html__( 'Edit %s', 'ng_s' ),
			wp_kses_post( get_the_title( '<span class="screen-reader-text">"', '"</span>', false ) )
		),
		'<div class="edit-link">',
		'</div>'
	);
}
