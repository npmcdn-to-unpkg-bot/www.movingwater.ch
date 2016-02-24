<nav role="navigation">
  <div class="menu">
    <div class="logo">
      <a href="<?php echo url() ?>">
        <img src="<?php echo url('assets/images/logo.svg') ?>" alt="<?php echo $site->title()->html() ?>" />
      </a>
    </div>
    <?php foreach($pages->visible() as $p): ?>
    <div class="menu-item"><a <?php e($p->isOpen(), ' class="active"') ?> href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a></div>
    <?php endforeach ?>
  </div>
</nav>