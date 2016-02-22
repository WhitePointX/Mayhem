
<footer>
 <div class="footer_wrapper">
<div class="container">






    <?php if(get_field('footer_company_name', 'options') ): ?>
        <div class="company_name">
            <?php the_field('footer_company_name', 'options'); ?>
        </div>
  <?php endif; ?>




    <?php if(get_field('footer_address_descr', 'options') ): ?>
        <div class="address">
            <?php the_field('footer_address_descr', 'options'); ?>
        </div>
    <?php endif; ?>


  <?php if( have_rows('header_contact_icons', 'options') ): ?>

    <div class="footer_contact">

    <?php while( have_rows('footer_contact_icons', 'options') ): the_row(); ?>


        <a href="<?php the_sub_field('url'); ?>" target="_blank">  <i class="icon-<?php the_sub_field('icon'); ?>"></i></a>

    <?php endwhile; ?>

    </div>

<?php endif; ?>  

 </div>
</div>
</footer>


 <script src="<?php bloginfo('template_directory'); ?>/js/scripts.min.js"></script>

<?php include 'carousel_script.php'; ?>








<?php wp_footer(); ?>
</body>



</html>

