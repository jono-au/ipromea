<section class="container-fluid why-when">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h2> <?php the_sub_field('title'); ?> </h2>
                <?php the_sub_field('why_and_when'); ?>
            </div>
            <div class="col-lg-4">
                <?php $img = get_sub_field('image')?>
                <img src="<?php echo $img['url']?>" alt="ipromea">
            </div>
        </div>
    </div>
</section>