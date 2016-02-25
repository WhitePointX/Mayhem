<?php if(have_rows('item')):?>

<div id="carousel<?php echo $GLOBALS['carousel_number'] ?>">


    <?php while(have_rows('item')):the_row(); ?>

        <div>
            <?php the_sub_field('content'); ?>
        </div>


    <?php endwhile; ?>

</div>
<?php endif; ?>


<?php $GLOBALS['carousel_custom']=get_sub_field('custom');
/*$GLOBALS['carousel_skup'][$GLOBALS['carousel_number']]=$GLOBALS['carousel_custom'];*/

array_push($GLOBALS['carousel_skup'],$GLOBALS['carousel_custom']);
$GLOBALS['carousel_number']++;