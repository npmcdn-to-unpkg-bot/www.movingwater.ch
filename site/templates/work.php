<?php snippet('header') ?>
    
<?php 
  $works = page('arbeiten')->children()->visible()->sortBy('date', 'asc')->flip()->paginate(12);
  $pagination = $works->pagination();
?>
<section>
  <?php echo $page->text()->kirbytext() ?>

  <div class="work">
    <div class="gutter-sizer"></div>
    <div class="grid-sizer"></div>
  <?php foreach($works as $work): ?>
    <?php snippet('work', array('work' => $work)) ?>
  <?php endforeach ?> 
  </div>

<div class="pagination">
  <ul>
  <?php if($pagination->hasPrevPage()): ?>
    <li class="first"><a href="<?php echo $pagination->prevPageURL() ?>"><i class="mdi mdi-chevron-left"></i></a></li>
  <?php else: ?>
    <li class="first disabled"><span><i class="mdi mdi-chevron-left"></i></span></li>
  <?php endif ?>
    <li>
      <ul>
      <?php foreach($pagination->range(10) as $r): ?>
        <li><a<?php if($pagination->page() == $r) echo ' class="active"' ?> href="<?php echo $pagination->pageURL($r) ?>"><?php echo $r ?></a></li>
      <?php endforeach ?>
      </ul>
    </li>
  <?php if($pagination->hasNextPage()): ?>
    <li class="last"><a href="<?php echo $pagination->nextPageURL() ?>"><i class="mdi mdi-chevron-right"></i></a></li>
  <?php else: ?>
    <li class="last disabled"><span><i class="mdi mdi-chevron-right"></i></span></li>
  <?php endif ?>
  </ul>
</div>

</section>

<?php snippet('footer') ?> 