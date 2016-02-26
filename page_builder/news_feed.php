<?php
$posts = get_posts(array(
    'posts_per_page'	=> 4,
    'post_type'			=> 'post'
));

if( $posts ): ?>

    <div class="container news_feed">
        <div class="row">



            <?php foreach( $posts as $post ):

                setup_postdata( $post )

                ?>
                <article class="col-xs-12 col-md-3">
                    <a href="<?php the_permalink(); ?>">
                        <?php if ( has_post_thumbnail() ) {
                            the_post_thumbnail('small-thumbnail');
                        }  ?>
                        <?php if(get_field('subtitle')):?><h4><?php the_field('subtitle');?></h4><?php endif; ?>
                    </a>

                    <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>

                </article>

            <?php endforeach; ?>

        </div></div>

    <?php wp_reset_postdata(); ?>

<?php endif; ?>

