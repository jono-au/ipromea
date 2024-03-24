<?php
function my_theme_enqueue_styles() {

    $parent_style = 'parent-style';

    wp_enqueue_style( $parent_style, get_parent_theme_file_uri( 'style.css' ) );
    wp_enqueue_style( 'child-style',
        get_theme_file_uri( 'style.css' ),
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles', 99 );

?>




<?php
// add meta fields to review form
add_filter( 'comment_form_defaults', 'render_title_cons_fields_for_anonymous_users', 10, 1 );
add_action( 'comment_form_top', 'render_title_cons_fields_for_authorized_users' );
function get_title_cons_fields_html() {
	ob_start();
	?>

	<div class="pcf-container">
		<div class="pcf-field-container">
			<label for="title">Title of your Review</label>
			<input id="title" name="title" type="text">
		</div>
		
	</div>

	<?php
	return ob_get_clean();
}

function render_title_cons_fields_for_authorized_users() {
	if ( ! is_product() || ! is_user_logged_in() ) {
		return;
	}
	
	echo get_title_cons_fields_html();
}

function render_title_cons_fields_for_anonymous_users( $defaults ) {
	if ( ! is_product() || is_user_logged_in() ) {
		return;
	}
	
	$defaults['comment_notes_before'] .= get_title_cons_fields_html();
	
	return $defaults;
}



add_action( 'comment_post', 'save_review_title_and_cons', 10, 3 );
function save_review_title_and_cons( $comment_id, $approved, $commentdata ) {
	// The title and cons fields are not required, so we have to check if they're not empty
	$title = isset( $_POST['title'] ) ? $_POST['title'] : '';
	
	// Spammers and hackers love to use comments to do XSS attacks.
	// Don't forget to escape the variables
	update_comment_meta( $comment_id, 'title', esc_html( $title ) );
}


add_filter( 'comment_text', 'add_title_and_cons_to_review_text', 10, 1 );
function add_title_and_cons_to_review_text( $text ) {
	// We don't want to modify a comment's text in the admin, and we don't need to modify the text of blog post commets
	if ( is_admin() || ! is_product() ) {
		return $text;
	}
	
	$title = get_comment_meta( get_comment_ID(), 'title', true );

	
	$title_html = '<div class="pcf-row title"></b>' . esc_html( $title ) . '</div>';
	
	
	$updated_text = $title_html . $text;
	
	return $updated_text;
}



add_action( 'add_meta_boxes_comment', 'extend_comment_add_meta_box', 10, 1 );
function extend_comment_add_meta_box( $comment ) {
	// We don't need to show this metabox if a comment doesn't belong to a product
	$post_id = $comment->comment_post_ID;
	$product = wc_get_product( $post_id );
	
	if ( $product === null || $product === false ) {
		return;
	}
	
    add_meta_box( 'pcf_fields', 'Title', 'render_pcf_fields_metabox', 'comment', 'normal', 'high' );
}

function render_pcf_fields_metabox ( $comment ) {
    $title = get_comment_meta( $comment->comment_ID, 'title', true );
    wp_nonce_field( 'pcf_metabox_update', 'pcf_metabox_nonce', false );
    ?>
    <p>
        <label for="phone">title:</label>
        <input type="text" name="title" id="title" value="<?php echo esc_attr( $title ); ?>" class="widefat" />
    </p>
    <?php
}


add_action( 'edit_comment', 'save_pcf_changes', 10, 1 );
function save_pcf_changes( $comment_id ) {
	// First of all, let's validate the nonce
	if ( ! isset( $_POST['pcf_metabox_nonce'] ) || ! wp_verify_nonce( $_POST['pcf_metabox_nonce'], 'pcf_metabox_update') ) {
		wp_die( 'You can not do this action' );
	}
	
	if ( isset( $_POST['title'] ) ) {
		$title = $_POST['title'];
		update_comment_meta( $comment_id, 'title', esc_html( $title ) );
	}
	
}


//add options page for acf
if( function_exists('acf_add_options_page') ) {

    acf_add_options_page();

}


function my_theme_archive_title( $title ) {
	if ( is_category() ) {
		$title = single_cat_title( '', false );
	} elseif ( is_tag() ) {
		$title = single_tag_title( '', false );
	} elseif ( is_author() ) {
		$title = '<span class="vcard">' . get_the_author() . '</span>';
	} elseif ( is_post_type_archive() ) {
		$title = post_type_archive_title( '', false );
	} elseif ( is_tax() ) {
		$title = single_term_title( '', false );
	}
 
	return $title;
}

add_filter( 'get_the_archive_title', 'my_theme_archive_title' );