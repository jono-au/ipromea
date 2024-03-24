<?php ?>

<div class="container-fluid shop-banner">
    <div class="row">
        <div class="col-12">
          <!-- <img src="/wp-content/uploads/2023/07/shop-banner-scaled.webp" alt="ipromea"> -->
          <?php echo do_shortcode('[rev_slider alias="home-page-slider-1"][/rev_slider]')?>
        </div>
    </div>
</div>


<div class="container shop-probiotics-heading">
    <div class="row">
        <div class="col">
            <?php if (is_product_tag( 'cats' )) : ?>
                <h1>Probiotics for cats</h1>
                <p>Discover the purr-fect solution for your feline friend's digestive health. Our comprehensive range of probiotic products for cats is tailor-made to support their well-being from the inside out. With trusted formulas and feline-friendly ingredients, maintaining your cat's gut health has never been easier. Explore our selection and give your cat the gift of a happy tummy today!</p>
            <?php elseif (is_product_tag( 'dogs' )) :?>
                <h1>Probiotics for dogs</h1>
                <p>We understand that your loyal companion's digestive health is a top priority. That's why we've curated a selection of probiotic products specifically designed for dogs. Explore our range, crafted with canine well-being in mind, and embark on a journey toward a happier, healthier pup.</p>
            <?php else: ?>
                <?php 
                if(is_product_category()){
                    $term = get_queried_object();
                    $term_name = $term->name;
                    echo '<h1>' . $term->name . '</h1>';
                }
                ?>
                <h2>Probiotics for pets</h2>
            <?php endif; ?>
        </div>
    </div>
</div>
