<div class="main-carousel" data-flickity='{ "fade": true }'>
<?php 
$slides = $page->slides()->toFiles();
foreach ($slides as $slide) :
?>
  <div class="slide">
    <img src="<?= $slide->url() ?>" alt="">
  </div>
<?php endforeach; ?>
</div>