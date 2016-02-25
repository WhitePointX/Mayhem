<?php if(have_rows('slide')):?>
<div class="slider">
    <?php
    while(have_rows('slide')): the_row();?>
        <?php $attachment_id = get_sub_field('image');
        $bgImageSize = "thumb_1920x1080";
        $bgImage = wp_get_attachment_image_src( $attachment_id, $bgImageSize );
        ?>



        <div class="slider_item" style="background-image: url('<?php echo $bgImage[0]; ?>');
        <?php if(get_sub_field('background_position')): ?>

            background-position:<?php the_sub_field('background_position'); ?>;

                    <?php endif; ?>)">

            <?php
            if(get_sub_field('title') || get_sub_field('description')):
                ?>
                <div class="title">

                    <?php if(get_sub_field('title')): ?>
                        <h1><?php the_sub_field('title') ?></h1>
                    <?php endif; ?>

                    <?php if(get_sub_field('description')): ?>
                        <p><?php the_sub_field('description') ?></p>
                    <?php endif; ?>
                </div>
            <?php endif; ?>



            <?php if(get_sub_field('cta_label')): ?>
                <p class="slider_CTA">
                    <a href="<?php the_sub_field('cta_url'); ?>"><?php the_sub_field('cta_label'); ?></a>
                </p>
            <?php endif; ?>

        </div>
    <?php endwhile; ?>
</div>
<?php endif; ?>