<section class="container-fluid liver">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <h2> <?php the_sub_field('title'); ?> </h2>
                <?php the_sub_field('text_content'); ?>
            </div>
            <div class="col-lg-5">
                <?php $img = get_sub_field('image')?>
                <img src="<?php echo $img['url']?>" alt="ipromea">
                <!-- <img src="/wp-content/uploads/2023/07/probiotic-supplements-for-dogs-and-cats-07.webp" alt="ipromea"> -->
            </div>
        </div>
    </div>
</section>