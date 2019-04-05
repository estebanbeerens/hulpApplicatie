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

        <!--Favicon-->
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url("assets/favicon/apple-touch-icon.png") ?>">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url("assets/favicon/favicon-32x32.png") ?>">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url("assets/favicon/favicon-16x16.png") ?>">
        <link rel="manifest" href="<?php echo base_url("assets/favicon/site.webmanifest") ?>">
        <link rel="mask-icon" href="<?php echo base_url("assets/favicon/safari-pinned-tab.svg") ?>" color="#5bbad5">
        <link rel="shortcut icon" href="<?php echo base_url("assets/favicon/favicon.ico") ?>">
        <meta name="msapplication-TileColor" content="#003366">
        <meta name="msapplication-config" content="<?php echo base_url("assets/favicon/browserconfig.xml") ?>">
        <meta name="theme-color" content="#003366">

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
                    <h1 class="mb-2"><?php if (isset($titel)) { echo $titel; }?></h1>
                    <div id="inhoud">
                        <?php echo $inhoud; ?>
                    </div>
                </div>
                <div id="voetnoot">
                    <?php echo $voetnoot; ?>
                </div>
            </main>
        </div>
    </body>
</html>
