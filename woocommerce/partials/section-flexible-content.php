        <?php if( have_rows('flexible_content') ): ?>
            <?php while( have_rows('flexible_content') ): the_row(); ?>


                <?php if( get_row_layout() == 'system_function' ): ?>
                    <?php wc_get_template_part( 'partials/section', 'system' ); ?>
                <?php endif; ?>


                <?php if( get_row_layout() == 'benefits' ): ?>
                    <?php wc_get_template_part( 'partials/section', 'benefits' ); ?>
                <?php endif; ?>


                <?php if( get_row_layout() == 'why_and_when_to_use' ): ?>
                    <?php wc_get_template_part( 'partials/section', 'why-when' ); ?>
                <?php endif; ?>


                <?php if( get_row_layout() == 'nutritional' ): ?>
                    <?php wc_get_template_part( 'partials/section', 'nutritional' ); ?>
                <?php endif; ?>


                <?php if( get_row_layout() == 'dosage' ): ?>
                    <?php wc_get_template_part( 'partials/section', 'dosage' ); ?>
                <?php endif; ?>


                <?php if( get_row_layout() == 'accordion' ): ?>
                    <?php wc_get_template_part( 'partials/section', 'accordion' ); ?>
                <?php endif; ?>

                <?php if( get_row_layout() == 'faq' ): ?>
                    <?php wc_get_template_part( 'partials/section', 'faq' ); ?>
                <?php endif; ?>

                <?php if( get_row_layout() == 'blog' ): ?>
                    <?php wc_get_template_part( 'partials/section', 'blog' ); ?>
                <?php endif; ?>
             
                <?php if( get_row_layout() == 'review' ): ?>
                    <?php wc_get_template_part( 'partials/section', 'review' ); ?>
                <?php endif; ?>

                <?php if( get_row_layout() == 'ingredients' ): ?>
                    <?php wc_get_template_part( 'partials/section', 'ingredients' ); ?>
                <?php endif; ?>

                <?php if( get_row_layout() == 'badges' ): ?>
                    <?php wc_get_template_part( 'partials/section', 'badges' ); ?>
                <?php endif; ?>

            <?php endwhile; ?>
        <?php endif; ?>


