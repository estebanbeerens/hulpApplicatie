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


