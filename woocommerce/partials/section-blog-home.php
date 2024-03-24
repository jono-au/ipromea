<section class="container blog-cards home-blogs">
	<div class="row">
			<div id="image-carousel" class="splide" role="group" aria-label="Splide Basic HTML Example">
				<div class="splide__track">
						<div class="splide__list">
							<?php

							$args = array( 'post_type' => 'post', 'category_name' => 'pet-care, news-events ', 'orderby' => 'post_date', 'posts_per_page'=>20 );
							$query = new WP_Query( $args );
 
							while ( $query->have_posts() ) : $query->the_post(); global $post; 
							$title = get_the_title();
							$image = get_the_post_thumbnail();
							$permalink = get_permalink();
							$date = get_the_date('j F Y');
							$posttags = get_the_tags();
							$taglink = get_tag_link( $posttags[0]->term_id );

							$excerpt = get_the_excerpt();
							$trim_excerpt = wp_trim_words( $excerpt, 30, '...' );

							// Get the primary/child category 
							$categories = get_the_category();
							$primary_category = $categories[0]->name;
							$primary_category_link = get_category_link($categories[0]->term_taxonomy_id);
															
							
							?>
										<div class="splide__slide">
													<div class="card">
														<div class="card-img">
															<a href="<?php echo esc_url( $permalink ); ?>">
															<?php echo ($image !== "") ? $image : "<img src='/wp-content/uploads/2023/06/Ipromea-June-posts-Facebook-Post-Landscape-Instagram-Post-Square-Facebook-Post-Landscape-2.png' alt='ipromea'>" ?>
															</a>
															
														</div>
														<div class="card-body">
															<a href="<?php echo $primary_category_link ?>">
        														<div class="btn card-blog-tags"><?php echo ($primary_category) ? $primary_category : "ipromea" ; echo $child_cat_IDs?></div>
															</a>
															<h5 class="card-title">
																<a href="<?php echo esc_url( $permalink ); ?>"><?php echo $title ?></a>
															</h5>
															<p><?php echo $date ?></p>
															<p class="card-text"><?php echo $trim_excerpt ?></p>
														</div>
													</div>	
										</div>
								<?php endwhile; ?>
						</div>
				</div>
			</div>
			<a id="read-all" href="/category/pet-care/">Read all articles</a>
	</div>
</section>


