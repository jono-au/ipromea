
<?php
/**
* The template used to display archive content
*/
?>

<?php
global $post;

$permalink = get_permalink( );
$title = get_the_title();
$image = get_the_post_thumbnail();
$posttags = get_the_tags();


$taglink = get_tag_link( $posttags[0]->term_id );

$date = get_the_date('j F Y');
$excerpt = get_the_excerpt();
$trim_excerpt = wp_trim_words( $excerpt, 30, '...' );

// Get the primary/child category 
$categories = get_the_category();
$primary_category = $categories[0]->name;
$primary_category_link = get_category_link($categories[0]->term_taxonomy_id);


?>
<div class="col-md-4">
    <div class="card">
      <div class="card-img">
        <a href="<?php echo esc_url( $permalink ) ?>">
        <?php echo ($image !== "") ? $image : "<img src='/wp-content/uploads/2023/06/Ipromea-June-posts-Facebook-Post-Landscape-Instagram-Post-Square-Facebook-Post-Landscape-2.png' alt='ipromea'>" ?>
        </a>
        
      </div>
      <div class="card-body">
        <a href="<?php echo (isset($primary_category_link)) ? esc_url( $primary_category_link ) : "" ?>"><div class="btn card-blog-tags"><?php echo ($primary_category ) ? $primary_category : "ipromea" ?></div></a>
        <h5 class="card-title">
          <a href="<?php echo esc_url( $permalink ) ?>"><?php echo $title ?></a></h5>
        
        <p><?php echo $date ?></p>
        <p class="card-text"><?php echo $trim_excerpt ?></p>
      </div>
    </div>
</div>