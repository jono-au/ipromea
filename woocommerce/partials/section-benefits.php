<section class="container-fluid benefits">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <?php $img = get_sub_field('image')?>
                <img src="<?php echo $img['url']?>" alt="ipromea">
            </div>
            <div class="col-lg-4">
                <h2><?php the_sub_field('title'); ?></h2>
                <?php the_sub_field('list_of_benefits'); ?>
            </div>
        </div>
    </div>
</section>