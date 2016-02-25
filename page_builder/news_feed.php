<?php
$posts = get_posts(array(
    'posts_per_page'	=> 3,
    'post_type'			=> 'post'
));

if( $posts ): ?>

    <div class="container news_feed">
        <div class="row">



            <?php foreach( $posts as $post ):

                setup_postdata( $post )

                ?>
                <article class="col-xs-12 col-md-4">
                    <a href="<?php the_permalink(); ?>">
                        <?php if ( has_post_thumbnail() ) {
                            the_post_thumbnail('small-thumbnail');
                        }  ?>

                        <h2><?php the_title(); ?></h2></a>
                    <p><?php if(get_field('subtitle')): the_field('subtitle'); endif; ?></p>
                    <a href="<?php the_permalink(); ?>">Read more...</a>
                </article>

            <?php endforeach; ?>

        </div></div>

    <?php wp_reset_postdata(); ?>

<?php endif; ?>

