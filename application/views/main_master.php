<!doctype html>
<html lang="nl">

<head>
    <?php

            // +----------------------------------------------------------
            // | TV Shop
            // +----------------------------------------------------------
            // | 2ITF - 2018-2019
            // +----------------------------------------------------------
            // | Main Master
            // +----------------------------------------------------------
            // | M. Decabooter, J. Janssen
            // +----------------------------------------------------------

        ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        <?php echo $titel; ?>
    </title>
    <?php echo pasStylesheetAan("bootstrap.css"); ?>
    <?php echo pasStylesheetAan("style.css"); ?>

    <?php echo haalJavascriptOp("jquery-3.3.1.js"); ?>
    <?php echo haalJavascriptOp("bootstrap.bundle.js"); ?>


</head>

<body>
    <div id="hoofding">
        <?php echo $hoofding; ?>
    </div>
    <div id="inhoud">
        <?php echo $inhoud; ?>
    </div>
    <div id="menu">
        <?php echo $menu; ?>
    </div>
    <div id="voetnoot">
        <?php echo $voetnoot; ?>
    </div>
</body>

</html>
