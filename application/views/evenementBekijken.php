<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $titel ?></title>
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
</head>


<body>
<div id="resultaat">


</div>



</body>
</html>