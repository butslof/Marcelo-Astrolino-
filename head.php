<?php session_start();?>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imgs/favicon.ico" type="image/x-icon">
    <link rel="icon" href="imgs/favicon.ico" type="image/x-icon">
    <!-- <link rel="stylesheet" href="css/compactado.css"> -->
     <link rel="stylesheet" href="css/minify/foundation.css">
    <link rel="stylesheet" href="css/minify/app.css">
    <link rel="stylesheet" href="css/minify/animate.css" type="text/css"> 
    <?php if($_SERVER["REQUEST_URI"] != "/astrolino/"):?>
        <link rel="stylesheet" href="css/minify/menu-internas.css">
    <?php endif;?>
    
