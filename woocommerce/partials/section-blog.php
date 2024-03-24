<section class="container blog-cards">
	<div class="row">
			<h2>Pet care</h2>
			<div id="image-carousel" class="splide" role="group" aria-label="Splide Basic HTML Example">
				<div class="splide__track">
						<div class="splide__list">
										<?php
							$cat = get_sub_field('category');
							$category_name = get_cat_name($cat);
							$category_link = get_category_link($cat);
						
							$args = array( 'post_type' => 'post', 'cat' => $cat, 'orderby' => 'post_date' );
							$query = new WP_Query( $args );
 
							while ( $query->have_posts() ) : $query->the_post(); global $post; 
							$title = get_the_title();
							$image = get_the_post_thumbnail();
							$permalink = get_permalink();
							$date = get_the_date('j F Y');

							$excerpt = get_the_excerpt();
							$trim_excerpt = wp_trim_words( $excerpt, 30, '...' );
							
							?>
										<div class="splide__slide">
													<div class="card">
														<div class="card-img">
															<a href="<?php echo esc_url( $permalink ); ?>">
															<?php echo ($image !== "") ? $image : "<img src='/wp-content/uploads/2023/06/Ipromea-June-posts-Facebook-Post-Landscape-Instagram-Post-Square-Facebook-Post-Landscape-2.png' alt='ipromea'>" ?>
															</a>
															
														</div>
														<div class="card-body">
															<a href="<?php echo $category_link; ?>">
        														<div class="btn card-blog-tags"><?php echo ($category_name) ? $category_name : "ipromea" ?></div>
															</a>
															<?php echo "<h1>" . $getcatname . "</h1>"?>
															<h5 class="card-title"><?php echo $title ?></h5>
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


