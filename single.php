<?php

$boldthemes_options = get_option( BoldThemesFramework::$pfx . '_theme_options' );

$tmp_boldthemes_page_options = boldthemes_rwmb_meta( BoldThemesFramework::$pfx . '_override' );
if ( ! is_array( $tmp_boldthemes_page_options ) ) $tmp_boldthemes_page_options = array();
$tmp_boldthemes_page_options = boldthemes_transform_override( $tmp_boldthemes_page_options );

if ( isset( $tmp_boldthemes_page_options[ BoldThemesFramework::$pfx . '_blog_settings_page_slug'] ) && $tmp_boldthemes_page_options[ BoldThemesFramework::$pfx . '_blog_settings_page_slug'] != '' ) {
	BoldThemesFramework::$page_for_header_id = boldthemes_get_id_by_slug( $tmp_boldthemes_page_options[ BoldThemesFramework::$pfx . '_blog_settings_page_slug' ] );
} else if ( isset( $boldthemes_options['blog_settings_page_slug'] ) && $boldthemes_options['blog_settings_page_slug'] != '' ) {
	BoldThemesFramework::$page_for_header_id = boldthemes_get_id_by_slug( $boldthemes_options['blog_settings_page_slug'] );
}

get_header();

?>

<div class="container">
	<div class="row">
		<div class="col-md-9 col-lg-10">


<?php

$blog_single_view = boldthemes_get_option( 'blog_single_view' );

$blog_use_dash = boldthemes_get_option( 'blog_use_dash' );
BoldThemesFrameworkTemplate::$dash = $blog_use_dash ? 'bottom' : '';
$gallery_type = intval( boldthemes_rwmb_meta( BoldThemesFramework::$pfx . '_grid_gallery' ) ) == 0 ? 'carousel' : 'grid'; 
		
if ( have_posts() ) {
	
	while ( have_posts() ) {
	
		the_post();

		$featured_image = '';
		if ( has_post_thumbnail() && boldthemes_get_option( 'hide_headline' ) ) {
			$post_thumbnail_id = get_post_thumbnail_id( get_the_ID() );
			$image = wp_get_attachment_image_src( $post_thumbnail_id, 'large' );
			$featured_image = $image[0];		
		}
		
		$images = boldthemes_rwmb_meta( BoldThemesFramework::$pfx . '_images', 'type=image' );
		if ( $images == null ) $images = array();
		
		$video = boldthemes_rwmb_meta( BoldThemesFramework::$pfx . '_video' );
		$audio = boldthemes_rwmb_meta( BoldThemesFramework::$pfx . '_audio' );
		$link_title = boldthemes_rwmb_meta( BoldThemesFramework::$pfx . '_link_title' );
		$link_url = boldthemes_rwmb_meta( BoldThemesFramework::$pfx . '_link_url' );
		$quote = boldthemes_rwmb_meta( BoldThemesFramework::$pfx . '_quote' );
		$quote_author = boldthemes_rwmb_meta( BoldThemesFramework::$pfx . '_quote_author' );

		$images = boldthemes_rwmb_meta( BoldThemesFramework::$pfx . '_images', 'type=image&size=large' );
		if ( $images == null ) $images = array();
				
		BoldThemesFrameworkTemplate::$media_html = boldthemes_get_new_media_html( array( 'video' => $video, 'audio' => $audio, 'images' => $images, 'size' => 'boldthemes_large_rectangle', 'link_title' => $link_title, 'link_url' => $link_url, 'quote' => $quote, 'quote_author' => $quote_author, 'gallery_type' => $gallery_type, 'featured_image' => $featured_image ) );
		
		$post_format = get_post_format();
		$permalink = get_permalink();		

		BoldThemesFrameworkTemplate::$content_html = apply_filters( 'the_content', get_the_content() );
		BoldThemesFrameworkTemplate::$content_html = str_replace( ']]>', ']]&gt;', BoldThemesFrameworkTemplate::$content_html );
		
		BoldThemesFrameworkTemplate::$categories_html = boldthemes_get_post_categories();
		
		$tags = get_the_tags();
		BoldThemesFrameworkTemplate::$tags_html = '';
		if ( $tags ) {
			foreach ( $tags as $tag ) {
				BoldThemesFrameworkTemplate::$tags_html .= '<li><a href="' . esc_url( get_tag_link( $tag->term_id ) ) . '">' . esc_html( $tag->name ) . '</a></li>';
			}
			BoldThemesFrameworkTemplate::$tags_html = rtrim( BoldThemesFrameworkTemplate::$tags_html, ', ' );
			BoldThemesFrameworkTemplate::$tags_html = '<div class="btTags"><ul>' . BoldThemesFrameworkTemplate::$tags_html . '</ul></div>';
		}
		
		$comments_open = comments_open();
		$comments_number = get_comments_number();
		BoldThemesFrameworkTemplate::$show_comments_number = true;
		if ( ! $comments_open && $comments_number == 0 ) {
			BoldThemesFrameworkTemplate::$show_comments_number = false;
		}
		
		BoldThemesFrameworkTemplate::$blog_author = boldthemes_get_option( 'blog_author' );
		BoldThemesFrameworkTemplate::$blog_date = boldthemes_get_option( 'blog_date' );
		
		BoldThemesFrameworkTemplate::$class_array = array( );
		if ( BoldThemesFrameworkTemplate::$media_html == '' ) BoldThemesFrameworkTemplate::$class_array[] = 'noPhoto';

			BoldThemesFrameworkTemplate::$meta_html = boldthemes_get_post_meta();

			if ( $blog_single_view == 'columns' ) {
				get_template_part( 'views/post/single/columns' );	
			} else {
				get_template_part( 'views/post/single/standard' );
			}
			
			if ( boldthemes_get_option( 'blog_author_info' ) ) {
				get_template_part( 'views/about_author' );	
			}
			if ( comments_open() || get_comments_number() ) {
				get_template_part( 'views/comments' );
			}
			
			get_template_part( 'views/prev_next' );
		}

	}

?>




<?php 

$posttags = get_the_tags($featured_post->ID); 
$args = array( 'post_type' => 'product', 'posts_per_page' => 3, 'product_tag' => $posttags[0]->slug  );
$loop = new WP_Query( $args );

if ($loop->have_posts()) { ?>

<section class="popular-products container-fluid single-blog-page">
    <div class="container">

        <h2>Related products</h2>

        <div class="row">
            <?php
			
			while ( $loop->have_posts() ) : $loop->the_post(); global $product; global $post; 

                $title =  $product->get_name(); ;
                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $product->ID ), 'single-post-thumbnail' );
                $url = get_permalink($product->ID);
                $id = $post->ID;

            ?>

           <div class="col-lg-4 homepage-products blogpage-products">
                <div>
                    <a href="<?php echo $url ?>">
                        <img src="<?php  echo $image[0]; ?>" >
                        <!-- <a href="<?php //echo $url?>">see more</a> -->
                        <h2><?php echo $title; ?></h2>
                     </a>
                    <?php echo do_shortcode( '[add_to_cart id='.$id.']' )?>
                </div>
            </div>
            <?php endwhile; ?>


        </div>
    </div>
</section>

<?php } ?>

		</div>
		<div class="col-md-3 col-lg-2">
			<ul id="blog-tags-list">
				<li><a href="/category/pet-care/">All articles</a></li>
				<li><a href="/category/pet-care/digestion/">Digestive system</a></li>
				<li><a href="/category/pet-care/immune-system/">Immune system</a></li>
				<li><a href="/category/pet-care/high-protein/">High protein</a></li>
				<li><a href="/category/pet-care/joint-mobility/">Join & mobility</a></li>
				<li><a href="/category/pet-care/nervous-system/">Nervous system</a></li>
				<li><a href="/category/pet-care/oral-care/">Oral care</a></li>
				<li><a href="/category/pet-care/skin-coat-nail/">Skin, coat & nail</a></li>
			</ul>
		</div>
	</div>
</div>



<?php get_footer(); ?>






