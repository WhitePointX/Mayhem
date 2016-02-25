<div class="CTA <?php the_sub_field('custom_class'); ?>">
    <div class="container">

        <p><?php if(get_sub_field('text')): ?>

                <?php the_sub_field('text'); ?><?php endif;?>
            <a href="<?php the_sub_field('url'); ?>"><?php the_sub_field('button_label'); ?></a>
        </p>



    </div>

</div>