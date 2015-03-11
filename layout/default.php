<?php session_start();?>
<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="es">
<head>

    <title><?php echo $title ?></title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="author" content="juan2ramos"/>
    <meta name="contact" content="juan2ramos@gmail.com"/>
    <meta name="description" content=" "/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1"/>


    <!-- Style -->
    <script src="js/prefixfree.min.js"></script>
    <link rel="stylesheet" href="css/normalize.min.css"/>
    <link rel="stylesheet" href="css/style.css"/>


</head>
<body>

<main>
    <figure class="logo">
        <img src="img/clofa.svg" alt="Clofa Logo"/>
    </figure>
    <?php include $fileName; ?>
</main>
<aside class="errors">
    <div class="content-errors">
        <span class="close">x</span>
        <p>Dedes corregir los siguientes errores: </p>
        <ul id="list-error"></ul>
    </div>
</aside>
<!-- JavaScript -->
<script src="js/jquery-1.11.2.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>