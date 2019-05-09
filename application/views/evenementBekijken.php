<?
/**
 * @file evenementBekijken.php
 * View waarin de opgehaalde agenda via laadEvenement.php weergeven wordt
 * - maakt gebruik van Ajax
 *
 *
 */

?>


<script>
    evenementen();
    function evenementen()
    {


        $.ajax({
            type: "GET",
            url: "ajax_haalEventOp",
            cache: false,
            success: function(result){
                $("#resultaat").html(result);
            }
        });
    }

    setInterval(evenementen, 5000);
</script>



<div id="resultaat">

</div>