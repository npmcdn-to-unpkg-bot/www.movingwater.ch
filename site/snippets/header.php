<!DOCTYPE html>
<?php header('Content-type: text/html; charset=utf-8'); ?>
<html lang="de">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">

  <?php echo css('assets/css/style.css') ?>

</head>
<body class="no-touch">
<?php snippet('menu') ?>
<div class="spacer"></div>