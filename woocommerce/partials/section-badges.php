<div class="container-fluid icons">
  <div class="container">
    <div class="row icons">

    <?php
          if( have_rows('badges') ):

            while ( have_rows('badges') ) : the_row();

                $image = get_sub_field('badge');

          ?>

                <div class="col-4 col-md-2">
                      <div>         
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
