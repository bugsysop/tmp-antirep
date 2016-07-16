<!DOCTYPE html>
<html lang="<?php echo $site->lang()->value() ?>">
<head>

    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="HandheldFriendly" content="True"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <title><?php echo $page->title()->html() ?> | <?php echo $site->title()->html() ?></title>

    <meta name="description" content="<?php echo $site->description()->html() ?>">
    <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">

    <!-- <link rel="shortcut icon" href=""> -->

    <?php echo css('assets/css/style.css') ?>
    <?php echo css('assets/css/site.css') ?>
    <?php echo css('assets/css/simplegrid.css') ?>
    <?php echo css('assets/plugins/typography/css/typography.css') ?>
    <?php echo css('assets/plugins/oembed/css/oembed.css') ?>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css">
    <link rel="stylesheet" type="text/css"
        href="//fonts.googleapis.com/css?family=Merriweather:300,700,700italic,300italic|Lato:300,400,700,900|Oswald:400"/>

</head>
<body class="<?php echo $page->template() ?>">

<?php snippet('site-menu') ?>
