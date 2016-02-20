<?php get_header(); the_post(); ?>


<div class="container">
    <h1><?php the_title(); ?></h1>
    <?php the_content(); ?>

<div id="test"></div>


    <script>
        var neki_broj, neki_string, slider_number=0;

        var skup=[];

       for (var i=0;i<3;i++)
       {
           slider_number++;
           neki_broj=slider_number+5;
           neki_string=slider_number+'aaaaaaa';

           skup[i]=[slider_number,neki_broj,neki_string];

       }

for (var b in skup)
{
    for (var a in skup[b]){

        document.getElementById('test').innerHTML+=skup[b][a];

    }

}




    </script>



</div>

<?php get_footer(); ?>
