<figure class="work-item <?php e($work->top() == '1', ' big') ?>">
  <?php if($work->images()->first() != null): ?>
    <?php if($image = $work->images()->sortBy('sort', 'asc')->first()): ?>
    <img src="<?php echo thumb($image, array('width' => 640, 'height' => 320, 'crop' => true))->url(); ?>" alt="<?php echo $work->title()->html() ?>" >
    <?php endif ?>
  <?php else: ?>
    <img src="<?php echo url('assets/images/work-placeholder.jpg') ?>" alt="<?php echo $work->title()->html() ?>"> 
    <div class="title-no-image"><?php echo $work->title()->html() ?></div>
  <?php endif ?>  
  <figcaption>
    <div class="title">
      <h3><?php echo $work->title()->html() ?></h3>
      <p><?php echo $work->categories()->html() ?></p>
      <a href="<?php echo $work->url() ?>" class="more-link touch button">Details</a>
    </div>
    <a href="<?php echo $work->url() ?>" class="more-link no-touch"></a>
  </figcaption>
</figure>