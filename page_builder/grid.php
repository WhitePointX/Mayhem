<div class="<?php the_sub_field('classic_or_fluid'); ?>">
    <div class="row">
        <?php if( have_rows('column') ): while ( have_rows('column') ) : the_row(); ?>


            <div class="<?php the_sub_field('cs_xs');?> <?php the_sub_field('cs_sm');?> <?php the_sub_field('cs_md');?> <?php the_sub_field('cs_lg');?> <?php the_sub_field('custom_classes');?>">

                <?php the_sub_field('content'); ?>
            </div>

        <?php endwhile;  endif; ?>
    </div>
</div>