<?php snippet('header') ?>
<header class="home about-me" style="background-image:url(assets/images/_10A1503_sw_2.jpg);">
  <div class="info-text">
    <?php echo $page->headertext()->kirbytext() ?>
  </div>
</header>
<section class="dark">
  <?php echo $page->text()->kirbytext() ?>
  <div class="work home">
    <div class="gutter-sizer"></div>
    <div class="grid-sizer"></div>
  <?php foreach(page('arbeiten')->children()->visible()->limit(6) as $work): ?>
    <?php snippet('work', array('work' => $work)) ?>
  <?php endforeach ?> 
  </div>
</section>
<section class="partner">
  <h2><?php echo $page->partnertitle()->html() ?></h2>
  <?php echo $page->partnertext()->kirbytext() ?>
  <div class="partners">
    <?php foreach($page->partners()->toStructure() as $partner): ?>
      <figure class="partner-item">
       <?php if(!$partner->image()->empty()): ?>
        <img src="<?php echo thumb($partner->image()->toFile(), array('width' => 500, 'height' => 500, 'crop' => true))->url(); ?>" alt="<?php echo $partner->name()->html() ?>" >
        <?php endif; ?>
        <figcaption>
          <div class="title">
            <h3><?php echo $partner->name()->html() ?></h3>
            <?php echo $partner->links()->kirbytext() ?>
          </div>
        </figcaption>
      </figure>
    <?php endforeach ?>
  </div>
</section>

<?php snippet('footer') ?> 