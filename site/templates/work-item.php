<?php snippet('header') ?> 
<header class="header-single">
  <?php if(!$page->video()->empty()): ?>
  <div class="video-wrapper">
      <?php echo $page->video()->kirbytext() ?>
  </div>
  <?php else: ?>
  <div class="image-wrapper">
    <?php if($image = $page->images()->sortBy('sort', 'asc')->first()): ?>
    <img src="<?php echo thumb($image, array('width' => 1280, 'height' => 720, 'crop' => true))->url(); ?>" alt="" >
    <?php endif ?>
  </div>  
  <?php endif ?>
</header>
<section class="work-single">
  <h1><?php echo $page->title()->html() ?> <span><?php echo $page->categories()->html() ?></span></h1>
  <div class="single-text">
    <div class="col-8">
      <?php echo $page->text()->kirbytext() ?>
    </div>
    <div class="details col-4">
      <p><strong><?php echo $page->datelabel()->html() ?>:</strong> <?php echo $page->date('%B %Y') ?></p>
      <p><strong>Kategorie:</strong> <?php echo $page->categories()->html() ?></p>
      <?php if(!$page->client()->empty()): ?>
      <p><strong><?php echo $page->clientlabel()->html() ?>:</strong> <?php echo e($page->clienturl()->empty(), $page->client()->html(), '<a href="'.$page->clienturl()->html().'" target="_blank">'.$page->client()->html().'</a>') ?></p>
      <?php endif ?>
      <?php if(!$page->website()->empty()): ?>
      <p><strong><?php echo $page->websitelabel()->html() ?>:</strong> <a href="<?php echo $page->website()->html() ?>" target="_blank"><?php echo $page->website()->html() ?></a></p>
      <?php endif ?>
    </div>
  </div>
  <div class="image">
    <?php if($page->images()->count() <= 1 and $page->video()->empty()): ?>

    <?php else: ?>
      <div class="lightboxset">
      <?php foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
        <a class="lightbox" data-caption="<?php echo $image->caption()->html() ?>" href="<?php echo $image->url() ?>" title="<?php echo $image->caption()->html() ?>" target="_blank">
          <img src="<?php echo thumb($image, array('width' => 300, 'height' => 300, 'crop' => true, 'grayscale' => true))->url() ?>" alt="<?php echo $image->caption()->html() ?>">
        </a>  
      <?php endforeach ?>
      </div>
    <?php endif; ?>
  </div>
</section>
<?php if(!$page->related()->empty()): ?>
<section class="related">
    <h2><?php echo $page->relatedlabel()->html() ?></h2>
    <div class="work">
      <div class="gutter-sizer"></div>
      <div class="grid-sizer"></div>
      <?php foreach($page->related()->toStructure() as $item): ?>
      <?php $work = $site->index()->findBy('uid', (string)$item->relatedpages()) ?>
        <?php snippet('work', array('work' => $work)) ?>
      <?php endforeach ?>
  </div>
</section>
<?php endif ?>

<?php snippet('footer') ?> 