<div class="container-fluid ingredients">
    <div class="container">
        <div class="row">

            <div class="col-12">
                <h2>Active ingredients</h2>
            </div>

<?php 


if( have_rows('ingredients') ):

   while ( have_rows('ingredients') ) : the_row();

       $heading = get_sub_field('heading');
       $description = get_sub_field('description');
       $image = get_sub_field('image');

?>

       <div class="col-lg-4">
            <div>
                <p><?php echo $heading ?></p>
                <p><?php echo $description ?></p>           
                <img src="<?php echo $image['url'] ?>" alt="ipromea">
            </div>
        </div>

<?php

   endwhile;

endif;

?>


        </div>
    </div>
</div>