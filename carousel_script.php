<?php if($GLOBALS['carousel_skup']):?>

<script>
    $(document).ready(function() {
        <?php for ($a=0;$a<count($GLOBALS['carousel_skup']);$a++): ?>


        $("#carousel<?php echo $a ?>").owlCarousel({
            <?php echo $GLOBALS['carousel_skup'][$a]; ?>
        });



        <?php endfor; ?>
    });
</script>

<?php endif; ?>