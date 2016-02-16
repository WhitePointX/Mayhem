<?php get_header(); the_post();
/*
Template name: Page builder
*/
?>
<div class="container">

    <?php
    // START: Page blocks
    if( have_rows('blocks') ): while ( have_rows('blocks') ) : the_row(); ?>

        <?php
        //START:PAGE HEADER
        if( get_row_layout() == 'page_header' ): ?>
            <h1><?php the_sub_field('title'); ?></h1>

            <?php elseif( get_row_layout() == 'cta' ): ?>
            <p><?php the_sub_field('test_text'); ?></p>

        <?php endif; ?>



        <?php
        // END: Page blocks
         endwhile;?>

        <?php else: the_content();?>

    <?php endif; ?>


</div>
<?php get_footer(); ?>


