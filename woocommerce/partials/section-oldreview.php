<?php ?>
<h1>balch review</h1>



<?php $review= get_sub_field('review');

echo get_the_ID();

$args= array(
    'author_email' => '',
    'ID' => '',
    'karma' => '',
    'number' => '',
    'offset' => '',
    'orderby' => '',
    'order' => 'DESC',
    'parent' => '',
    'post_id' => 0,
    'post_author' => '',
    'post_name' => '',
    'post_parent' => '',
    'post_status' => '',
    'post_type' => '',
    'status' => '',
    'type' => '',
    'user_id' => '',
    'search' => '',
    'count' => false,
    'meta_key' => '',
    'meta_value' => '',
    'meta_query' => '');

$comments = get_comments(array('post_id'=> '2971'));

$comment_ids = array();
foreach($comments as $comment):
    $comment_ids[] = $comment->comment_ID;
endforeach;
print_r($comment_ids); // edite print_r(comment_ids);

 $comment->comment_ID = $comment_ids[0] ;

$rating = intval( get_comment_meta( $comment->comment_ID, 'rating', true ) );


?>

<article id="comment-<?php comment_ID(); ?>" class = "">
				<?php $avatar_html = get_avatar( $comment, 140 ); 
					if ( $avatar_html != '' ) {
						echo '<div class="commentAvatar">' . wp_kses( $avatar_html, 'avatar' ) . '</div>';
					}
				?>
				<div class="commentTxt">
					<div class="vcard divider">
						<?php
							printf( '<h5 class="author"><span class="fn">%1$s</span></h5>', get_comment_author_link() );
							echo '<p class="posted">' . sprintf( esc_html__( '%1$s at %2$s', 'pawsitive' ), get_comment_date(), get_comment_time() ) . '</p>';
							if ( $rating > 0 && get_option( 'woocommerce_enable_review_rating' ) == 'yes' ) { ?>
								<div itemscope itemtype="http://schema.org/Rating" class="star-rating" title="<?php echo sprintf( esc_html__( 'Rated %d out of 5', 'pawsitive' ), $rating ) ?>">
									<span style="width:<?php echo esc_html( ( $rating / 5 ) * 100 ); ?>%"><strong itemprop="ratingValue"><?php echo esc_html( $rating ); ?></strong> <?php echo esc_html__( 'out of 5', 'pawsitive' ); ?></span>
								</div>
							<?php }
						?>
					</div>

					<?php if ( '0' == $comment->comment_approved ) : ?>
						<p class="comment-awaiting-moderation"><?php echo esc_html__( 'Your comment is awaiting moderation.', 'pawsitive' ); ?></p>
					<?php endif; ?>

					<div class="comment">
						

						<?php comment_text();

						if ( comments_open() ) {
							echo '<p class="reply">';
								comment_reply_link( array_merge( $args, array( 'reply_text' => esc_html__( 'Reply', 'pawsitive' ), 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) );
							echo '</p>';
						}
						edit_comment_link( esc_html__( 'Edit', 'pawsitive' ), '<p class="edit-link">', '</p>' ); ?>
					</div>
				</div>
				
				
			</article>