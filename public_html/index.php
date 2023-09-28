<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/../vendor/autoload.php';
$mustache = new Mustache_Engine(
    [
        'loader' => new Mustache_Loader_FilesystemLoader($_SERVER['DOCUMENT_ROOT'] . '/../mustache/')
    ]
);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="/assets/css/index.css">
</head>
<body>
    <header class="header">
        <button class="menu_btn"></button>
        <div class="cart">
            <img src="assets/img/cart_icon.svg" alt="cart">
            <span class="cart__count">0</span>
        </div>
    </header>

    <div class="main">
        <div class="container">
            <? echo $mustache->render('awesome', include($_SERVER['DOCUMENT_ROOT'] . '/awesome.php')) ?>
            <? echo $mustache->render('cards', include($_SERVER['DOCUMENT_ROOT'] . '/cards.php')) ?>
        </div>
    </div>
</body>
</html>