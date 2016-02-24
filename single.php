<?php get_header(); the_post(); ?>


<div class="container">
    <div class="classic_wysiwyg">
    <?php if ( has_post_thumbnail() ) {
        the_post_thumbnail('post-featured');
    }  ?>

    <h1><?php the_title(); ?></h1>
    <?php the_content(); ?>


</div></div>

<?php get_footer(); ?>
