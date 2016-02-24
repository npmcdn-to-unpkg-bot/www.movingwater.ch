  <?php if($page->hidecta()->empty()): ?>
   <section class="cta" style="background-image:url(<?php echo url('assets/images/cta_bg.jpg') ?>);">
    <div class="info-text">
      <?php echo $site->footertext()->kirbytext() ?>
    </div>
  </section>
  <?php endif ?>
  <section class="social-footer">
    <div id="instafeed" class="instagram"></div>
    <div class="twitter"></div>
  </section>
  <footer class="copyright">
    <?php echo $site->copyright()->kirbytext() ?>
  </footer>
  <?php echo js('assets/js/app-min.js') ?>
</body>
</html>