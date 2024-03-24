<?php
/**
 * Display single product reviews (comments)
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version 8.0.0
 */
global $product;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

if ( ! comments_open() ) {
	return;
}

function boldthemes_comment_form_before() {
    ob_start();
}
add_action( 'comment_form_before', 'boldthemes_comment_form_before' );

function boldthemes_comment_form_after() {
    $html = ob_get_clean();
    echo preg_replace(
        '/<h3 id="reply-title"(.*)>(.*)<\/h3>/',
        '<h2 id="reply-title"\1>\2</h2>',
        $html
    );
}
add_action( 'comment_form_after', 'boldthemes_comment_form_after' );

?>



<div id="reviews">
	<div id="comments" class="bt-comments-box">
		<h4><?php
			if ( get_option( 'woocommerce_enable_review_rating' ) === 'yes' && ( $count = $product->get_review_count() ) )
				printf( _n( '%s review for %s', '%s reviews for %s', $count, 'pawsitive' ), $count, get_the_title() );
			else
				_e( 'Reviews', 'pawsitive' );
		?></h4>

		<?php if ( have_comments() ) : ?>

			<ul class="comments">
				<?php wp_list_comments( apply_filters( 'woocommerce_product_review_list_args', array( 'style' => 'ul', 'callback' => 'boldthemes_theme_comment' ) ) ); ?>
			</ul>

			<?php 
                            if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
                                    echo '<nav class="woocommerce-pagination">';
                                    paginate_comments_links( apply_filters( 'woocommerce_comment_pagination_args', array(
                                            'prev_text' => '&larr;',
                                            'next_text' => '&rarr;',
                                            'type'      => 'list',
                                    ) ) );
                                    echo '</nav>';
                            endif;

                else : ?>

			<p class="woocommerce-noreviews"><?php echo esc_html__( 'There are no reviews yet.', 'pawsitive' ); ?></p>

		<?php endif; ?>
	</div>

	<?php if ( get_option( 'woocommerce_review_rating_verification_required' ) === 'no' || wc_customer_bought_product( '', get_current_user_id(), $product->get_id() ) ) : ?>
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-8">
					<div id="review_form_wrapper">
					<div id="review_form">
						<?php
							$commenter = wp_get_current_commenter();

							$comment_form = array(
								'title_reply'          => have_comments() ? esc_html__( 'Leave a Review', 'pawsitive' ) : esc_html__( 'Be the first to review', 'pawsitive' ) . ' &ldquo;' . get_the_title() . '&rdquo;',
								'title_reply_to'       => esc_html__( 'Leave a Reply to %s', 'pawsitive' ),
								'comment_notes_before' => '',
								'comment_notes_after'  => '',
								'fields'               => array(
									'author' => '<p class="comment-form-author">' . '<label for="author">' . esc_html__( 'Name', 'pawsitive' ) . ' <span class="required">*</span></label> ' .
												'<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30" aria-required="true" /></p>',
									'email'  => '<p class="comment-form-email"><label for="email">' . esc_html__( 'Email', 'pawsitive' ) . ' <span class="required">*</span></label> ' .
												'<input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30" aria-required="true" /></p>',
								),
								'label_submit'  => esc_html__( 'Submit', 'pawsitive' ),
								'logged_in_as'  => '',
								'comment_field' => ''
							);

							if ( $account_page_url = wc_get_page_permalink( 'myaccount' ) ) {
								$comment_form['must_log_in'] = '<p class="must-log-in">' .  sprintf( wp_kses( __( 'You must be <a href="%s">logged in</a> to post a review.', 'pawsitive' ), 'comments' ), esc_url( $account_page_url ) ) . '</p>';
							}


							if ( get_option( 'woocommerce_enable_review_rating' ) === 'yes' ) {
								$comment_form['comment_field'] = '<p class="comment-form-rating"><label for="rating">' . esc_html__( 'Your Rating', 'pawsitive' ) .'</label><select name="rating" id="rating">
									<option value="">' . esc_html__( 'Rate&hellip;', 'pawsitive' ) . '</option>
									<option value="5">' . esc_html__( 'Perfect', 'pawsitive' ) . '</option>
									<option value="4">' . esc_html__( 'Good', 'pawsitive' ) . '</option>
									<option value="3">' . esc_html__( 'Average', 'pawsitive' ) . '</option>
									<option value="2">' . esc_html__( 'Not that bad', 'pawsitive' ) . '</option>
									<option value="1">' . esc_html__( 'Very Poor', 'pawsitive' ) . '</option>
								</select></p>';
							}

							

							$comment_form['comment_field'] .= '<p class="comment-form-comment"><label for="comment">' . esc_html__( 'Your Review', 'pawsitive' ) . '</label><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea></p>';

							comment_form( apply_filters( 'woocommerce_product_review_comment_form_args', $comment_form ) );
						?>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'single-post-thumbnail' );?>
					<img id="review-image" src="<?php  echo $image[0]; ?>">
				</div>
			</div>
		</div>
		

	<?php else : ?>

		<p class="woocommerce-verification-required"><?php echo esc_html__( 'Only logged in customers who have purchased this product may leave a review.', 'pawsitive' ); ?></p>

	<?php endif; ?>

	<div class="clear"></div>
</div>
