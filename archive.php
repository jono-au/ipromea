<?php 
get_header(); 
$cat = get_the_category();
$parentCatName = get_cat_name($cat[0]->parent);

?>


<div class="clear"></div>
</header> <!-- / END HOME SECTION -->

<div id="content" class="site-content">


  <section class="container blog-cards archives">
    <div class="row">
      <div class="col-md-9 col-lg-10">
    
        <div class="row">
          
          <?php if (is_category(array('pet-care','news-events'))) {?>
          <h2><?php echo get_the_archive_title()?></h2>
            <?php } else { ?>
              <h2><?php echo $parentCatName;?></h2>
              <h3><?php echo get_the_archive_title()?></h3>
            <?php }?>
        
            <?php while ( have_posts() ) : the_post(); // standard WordPress loop. ?>
            
              <?php get_template_part( 'templates/parts/content', 'tmpl_archives' ); // loading our custom file. ?>

            <?php endwhile; // end of the loop. ?>
            </div>
        </div> 

        <div class="col-md-3 col-lg-2">
          <?php if (is_category(array('pet-care', 'digestion', 'immune-system', 'high-protein', 'joint-mobility', 'nervous-system', 'oral-care', 'skin-coat-nail' ))) {?>
            <ul id="blog-tags-list">
              <li><a href="/category/pet-care/">All articles</a></li>
              <li><a href="/category/pet-care/digestion/">Digestive system</a></li>
              <li><a href="/category/pet-care/immune-system/">Immune system</a></li>
              <li><a href="/category/pet-care/high-protein/">High protein</a></li>
              <li><a href="/category/pet-care/joint-mobility/">Joint & mobility</a></li>
              <li><a href="/category/pet-care/nervous-system/">Nervous system</a></li>
              <li><a href="/category/pet-care/oral-care/">Oral care</a></li>
              <li><a href="/category/pet-care/skin-coat-nail/">Skin, coat & nail</a></li>
            </ul>
          <?php } elseif (is_category(array('news-events', 'events', 'news'))) { ?>
              <ul id="blog-tags-list">
                <li><a href="/category/news-events/">All articles</a></li>
                <li><a href="/category/news/">News</a></li>
                <li><a href="/category/events/">Events</a></li>
              </ul>

          <?php } ?>
        </div>
      </div>  
    </div>
   
      
  </section>
</div>


      
  <div class="sidebar-wrap col-md-3 content-left-wrap">
    <?php get_sidebar(); ?>
  </div>



<?php get_footer(); ?>