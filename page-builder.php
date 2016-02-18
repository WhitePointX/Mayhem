<?php get_header(); the_post();
/*
Template name: Page builder
*/
?>


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


            <?php //GRID
        elseif( get_row_layout() == 'grid' ): ?>
        <div class="<?php the_sub_field('classic_or_fluid'); ?>">
            <div class="row">
                 <?php if( have_rows('column') ): while ( have_rows('column') ) : the_row(); ?>


                    <div class="<?php the_sub_field('cs_xs');?> <?php the_sub_field('cs_sm');?> <?php the_sub_field('cs_md');?> <?php the_sub_field('cs_lg');?> <?php the_sub_field('custom_classes');?>">

                                <?php the_sub_field('content'); ?>
                    </div>

                  <?php endwhile;  endif; ?>
            </div>
        </div>

            <?php // Quote
            elseif(get_row_layout()== 'quote'):
            ?>
                <div class="quote_wrapper">

                <blockquote class="quote">
                    <i class="icon-quote-left"></i>
                    <?php the_sub_field('quote');?>
                    <cite class="cite">- <?php the_sub_field('author');?></cite>
                </blockquote>
                </div>

            <?php // WYSIWYG Field
            elseif(get_row_layout()== 'wysiwyg_field'):
            ?>              
                <div class="classic_wysiwyg">
                    <?php the_sub_field('content');?>
                </div>
              




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


<?php get_footer(); ?>


