<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $titel ?></title>
</head>
<body>

<?php foreach ($evenement as $q){
    echo $q->naam;
    /* Dit was om de db connectie te testen */
}
?>
</body>
</html>