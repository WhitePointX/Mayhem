<?php get_header(); the_post();
/*
Template name: Page builder
*/
?>
<div class="container">

    <?php
    // START: have rows
    if( have_rows('blocks') ): while ( have_rows('blocks') ) : the_row(); ?>



        <?php
        //PAGE HEADER
        if( get_row_layout() == 'page_header' ): ?>

            <h1><?php the_sub_field('title'); ?></h1>



            <?php //CTA
            elseif( get_row_layout() == 'cta' ): ?>

            <p class="CTA <?php the_sub_field('custom_class'); ?>">
                <a href="<?php the_sub_field('url'); ?>"><?php the_sub_field('button_label'); ?></a>
            </p>


            <?php //HEADING
            elseif( get_row_layout() == 'heading' ): ?>

            <h1 class="heading <?php the_sub_field('custom_class'); ?>">
                <?php the_sub_field('title'); ?>
            </h1>




        <?php
        //endif (get_row_layout)
        endif; ?>
        <?php
        // END: have rows loop
         endwhile;?>

        <?php else: the_content();?>

    <?php
    //END: if have rows
    endif; ?>


</div>
<?php get_footer(); ?>


