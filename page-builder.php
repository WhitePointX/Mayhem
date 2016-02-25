<?php $GLOBALS['carousel_number']=0; $GLOBALS['carousel_skup']=[];$GLOBALS['carousel_custom']='';?>
<?php get_header(); the_post();
/*
Template name: Page builder
*/
?>

    <?php
    // START: have rows
    if( have_rows('blocks') ):
        while ( have_rows('blocks') ) : the_row();

                //PAGE HEADER
                 if( get_row_layout() == 'page_header' ):
                include 'page_builder/page_header.php';
                //CTA
                elseif( get_row_layout() == 'cta' ):
                include 'page_builder/cta.php';

                //HEADING
                elseif( get_row_layout() == 'heading' ):
                include 'page_builder/heading.php';

                //GRID
                elseif( get_row_layout() == 'grid' ):
                include 'page_builder/grid.php';

                // Quote
                elseif(get_row_layout()== 'quote'):
                include 'page_builder/quote.php';

                // WYSIWYG Field
                elseif(get_row_layout()== 'wysiwyg_field'):
                include 'page_builder/wysiwyg.php';

                //Slider
                elseif(get_row_layout() == 'slider'):
                include 'page_builder/slider.php';

                //Carousel
                elseif(get_row_layout() == 'carousel'):
                include 'page_builder/carousel.php';

                // News feed
                elseif(get_row_layout()=='news_feed'):
                include 'page_builder/news_feed.php';


                //endif (get_row_layout)
             endif;

        // END: have rows loop
        endwhile;

        else: the_content();


    //END: if have rows
    endif;


 get_footer(); ?>


