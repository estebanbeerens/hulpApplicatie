<!doctype html>
<html lang="nl">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>
            <?php echo $titel; ?>
        </title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

        <?php echo pasStylesheetAan("bootstrap.css"); ?>
        <?php echo pasStylesheetAan("style.css"); ?>
        <?php echo pasStylesheetAan('menu.css') ?>
        <?php echo pasStylesheetAan('footer.css') ?>

        <?php echo haalJavascriptOp("jquery-3.3.1.js"); ?>
        <?php echo haalJavascriptOp("bootstrap.bundle.js"); ?>
        <?php echo haalJavascriptOp("bs_validator.js") ?>
        <?php echo haalJavascriptOp('menu.js'); ?>

    </head>

    <body>
        <div class="page-wrapper chiller-theme toggled">
            <div id="menu">
                <?php echo $menu; ?>
            </div>
            <!-- Page content -->
            <main class="page-content">
                <div class="container">
                    <h1 class="mb-2"><?php echo $titel ?></h1>
                    <div id="inhoud">
                        <?php echo $inhoud; ?>
                    </div>
                    <div id="voetnoot">
                        <?php echo $voetnoot; ?>
                    </div>
                </div>
            </main>
        </div>
    </body>
</html>
