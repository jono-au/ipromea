<?php

	$share_html = boldthemes_get_share_html( get_permalink(), 'blog', 'xsmall' );
	echo '<article class="btPostSingleItemStandard gutter ' . esc_attr( implode( ' ', get_post_class( BoldThemesFrameworkTemplate::$class_array ) ) ) . '">';
		echo '<div class="port">';
			echo '<div class="btPostContentHolder">';

				$cat = get_the_category();
				$parentCatName = get_cat_name($cat[0]->parent);
				
				echo "<h1 id='single_blog_post_heading'>" . $parentCatName . "</h1>";	
				echo '<div class="btArticleHeadline"><h2>' . get_the_title() . '</h2></div><!-- /btArticleHeadline -->';
				

				if ( BoldThemesFrameworkTemplate::$media_html != '' ) {
					echo '<div class="btArticleMedia">' . BoldThemesFrameworkTemplate::$media_html . '</div><!-- /btArticleMedia -->';
				}

				$extra_class = '';
				
				if (BoldThemesFrameworkTemplate::$post_format == 'link' && BoldThemesFrameworkTemplate::$media_html == '' ) {
					$extra_class = ' btLinkOrQuote';
				}

				echo '<div class="btArticleContent ' . esc_attr( $extra_class ) . '">' . BoldThemesFrameworkTemplate::$content_html. '</div>';

				global $multipage;
				if ( $multipage ) { 
					echo '<div class="btLinkPages">';
						wp_link_pages( array( 
							'before'      => '<ul>' . esc_html__( 'Pages:', 'pawsitive' ),
							'separator'   => '<li>',
							'after'       => '</ul>'
						));
					echo '</div><!-- /btLinkPages -->';
				}
				
				echo '<div class="btArticleShareEtc">';
					echo '<div class="btTagsColumn">';
						echo wp_kses_post( BoldThemesFrameworkTemplate::$tags_html );
					echo '</div><!-- /btTagsColumn -->';	
					echo '<div class="btShareColumn">' . wp_kses_post( $share_html ) . '</div><!-- /btShareColumn -->';
				echo '</div><!-- /btArticleShareEtc -->';
				
			echo '</div><!-- /btArticleContentHolder -->' ;
	
		echo '</div><!-- port -->';		
	echo '</article>';

?>