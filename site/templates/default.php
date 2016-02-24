<?php snippet('header') ?>

<section class="<?php echo $page->slug() ?>">
  <h1><?php echo $page->title()->html() ?></h1>
  <?php echo $page->text()->kirbytext() ?>
</section>


<?php snippet('footer') ?>