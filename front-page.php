<?php get_header(); ?>

<section class="hero-banner">
    <div class="row">
        <div class="col">
            <?php echo do_shortcode('[rev_slider alias="home-page-slide-library-1"][/rev_slider]')?>
        </div>
    </div>
</section>


<section class="popular-products container-fluid">
    <div class="container">

        <h2>Most popular products</h2>

        <div class="row">
            <?php $popular_products = get_field('popular_products', 'option') ?>
            <?php //var_dump($popular_products) ?>
            <?php foreach($popular_products as $prod){
                $title =  $prod->post_title ;
                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $prod->ID ), 'single-post-thumbnail' );
                $url = get_permalink($prod->ID);
                $id = $prod->ID;

            ?>

           <div class="col-lg-4 homepage-products">
                <div>
                    <a href="<?php echo $url ?>">
                        <img src="<?php  echo $image[0]; ?>" >
                        <!-- <a href="<?php //echo $url?>">see more</a> -->
                        <h2><?php echo $title; ?></h2>
                     </a>
                    <?php echo do_shortcode( '[add_to_cart id='.$id.']' )?>
                </div>
            </div>
                

         <?php } ?>

        </div>
    </div>
</section>

<?php wc_get_template_part( 'partials/section', 'shop-cats-dogs' ); ?>

<section class="container-fluid probiotics-for-pets">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Probiotics for pets</h1>  
            </div>
        </div>
        <div class="row">
            <div class="col-lg-7">
                <h2>Boost your pets health with Ipromea!</h2>
                <p>Just like in humans, pets have a delicate ecosystem of microorganisms in their digestive tract that plays a crucial role in digestion, nutrient absorption, and immune function.</p>
                <p><strong>Introducing pet probiotics for a happier pet</strong></p>
                <p>Our high-quality probiotics restore and maintain this balance, especially after antibiotics or during stressful times. By improving digestion and nutrient absorption, they contribute to better health and vitality.</p>        
                <p><strong>Unlock the power of pet probiotics</strong></p>
                <p>Take the first step in providing the best care for your furry companion! Explore our range of high-quality pet probiotics and see the positive impact on your pet's health. Your pet's health is our priority!</p>
            </div>

            <div class="col-lg-5">
                <div class="accordion accordion-flush" id="accordion">
            <div class="accordion-item">
            <p class="accordion-header" id="flush-headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                <h4>Improved digestion = less poo to cleanup</h4>
                </button>
            </p>
            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body"><p>Say goodbye to constant pet waste cleanup! Our premium probiotics aid in better digestion, reducing the amount of poo you'll need to pick up. A win for both you and your pet!</p></div>
            </div>
            </div>
            <div class="accordion-item">
            <p class="accordion-header" id="flush-headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                <h4>Happy tummies = happy pets</h4>
                </button>
            </p>
            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body"><p>No more tummy troubles! Keep your pet's tummy happy and gurgle-free with our carefully selected probiotics. They promote a balanced gut environment, minimising gassiness and those less-than-pleasant doggy farts. Our probiotics help regulate bowel movements, reducing the occurrence of diarrhoea and constipation in your furry companions.</p></div>
            </div>
            </div>
            <div class="accordion-item">
            <p class="accordion-header" id="flush-headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                <h4>Boosted immune system = less vet visits</h4>
                </button>
            </p>
            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body"><p>Our pet probiotics strengthen your pets' defenses, ensuring your furry friend stays healthy and active. When your pet isn't feeling their best, our probiotics can speed up their recovery, helping them bounce back quickly. Enjoy more playtime and bonding with your furry friend.</p></div>
            </div>
            </div>
            <div class="accordion-item">
            <p class="accordion-header" id="flush-headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                <h4>Calm & stress-free = no more noise complaints</h4>
                </button>
            </p>
            <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body"><p>Our pet probiotics ease your pet's anxiety and promote a sense of calm, making stressful situations like moving or loud noises more manageable - a win for both of you!</p></div>
            </div>
            </div>

            <div class="accordion-item">
            <p class="accordion-header" id="flush-headingFive">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                <h4>Maintain a healthy weight = a longer life</h4>
                </button>
            </p>
            <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body"><p>Our probiotics help your pet maintain an ideal weight, preventing weight-related health issues, and ensuring a longer, happier life for your furry friend.</p></div>
            </div>
            </div>


        </div>
            </div>
        </div>
    </div>

        <img id="cat-dogs" src="/wp-content/uploads/2023/09/dog-and-cat-banners-1800x500-2-scaled.webp" alt="ipromea">

</section>




<section class="container-fluid why-ipromea">

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Why choose Ipromea?</h2>
                <h3>Discover the Ipromea difference</h3>
                <p>Unlock the secret to your pet's optimal health. Join thousands of satisfied customers who have witnessed the transformation in their pets' lives with our scientifically-proven, 100% Australian-made, and vet-endorsed solutions. Experience the power of Ipromea and give your beloved companion the care they truly deserve. Trust us for a healthier, happier pet!</p>            </div>
            <div class="col-md-4">
                <div>
                    <img src="/wp-content/uploads/2023/09/Scientifically-Proven.png" alt="ipromea">
                </div>
            </div>
            <div class="col-md-4">
                <div>
                    <img src="/wp-content/uploads/2023/09/Vet-Endorsed.png" alt="ipromea">
                </div>
            </div>
            <div class="col-md-4">
                <div>
                    <img src="/wp-content/uploads/2023/09/Australian-Made.png" alt="ipromea">
                </div>
            </div>
            <img src="/wp-content/uploads/2023/07/probiotics-for-cats-33.webp" alt="ipromea">
        </div>
    </div>
</section>

<!-- get the blog from product page -->
<?php wc_get_template_part( 'partials/section', 'blog-home' ); ?>


<section class="container-fluid subscribe">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>Never miss a beat with Ipromea auto-delivery</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <p>Join the Ipromea family today and simplify pet healthcare with our convenient and cost-effective auto-delivery subscription. Save 20%, gain valuable free time, and strengthen the bond with your pet—all while providing them with the finest probiotics for dogs and cats available. Choose Ipromea for a happier, healthier pet, and a happier you. Subscribe now and experience the joy of simplified pet care.</p>
            </div>
            <div class="col-md-4 subscribe-icons">
                <img src="/wp-content/uploads/2023/09/Save-20.webp" alt="ipromea">
            </div>
            <div class="col-md-4 subscribe-icons">
                <img src="/wp-content/uploads/2023/09/Hassle-Free.png" alt="ipromea">
            </div>
            <div class="col-md-4 subscribe-icons">
                <img src="/wp-content/uploads/2023/09/More-time.png" alt="ipromea">
            </div>
            <div class="row">
               <a href="/shop" class="button">
                Shop Now
               </a>
            </div>
        </div>
        <div class="row">
            <img id="auto-del" src="/wp-content/uploads/2023/07/probiotics-for-dogs-subscribe-auto-delivery.webp" alt="ipromea">
        </div>
        
    </div>
</section>


<section class="container-fluid instagram">
    <div class="container">
        <div class="row">
            <div class="col">
                <div>
                    <img src="/wp-content/uploads/2023/07/Instagram_logo_2016.svg_.webp" alt="ipromea">
                    <h1>Our family</h1>
                </div>
                <?php echo do_shortcode('[rev_slider alias="instagram-gallery-carousel-21"][/rev_slider]')?>
                <div>
                    <p>Follow us</p>
                    <a href="https://www.facebook.com/Ipromea"><img src="/wp-content/uploads/2023/07/facebook.logo_.png" alt="facebook"></a>
                    <a href="https://www.instagram.com/ipromeaprobiotics"><img src="/wp-content/uploads/2023/07/instagram-logo.png" alt="instagram"></a>
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_footer();?>