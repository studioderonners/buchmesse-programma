<div class="main-carousel" data-flickity='{ "fade": true }'>
<?php 
$videosArray = $site->index()->filterBy('template', 'videos');
foreach($videosArray as $videosPage) : ?>
  <?php $videos = $videosPage->slides()->toFiles(); 
  foreach($videos as $video) : ?>
    <div class="video-slide">
      <img src="<?= $video->url() ?>" alt="">
    </div>
    <?php 
    $slides = $page->slides()->toFiles();
    foreach ($slides as $slide) :
    ?>
      <div class="slide">
        <img src="<?= $slide->url() ?>" alt="">
      </div>
    <?php endforeach; ?>
  <?php endforeach; ?>
<?php endforeach; ?>
</div>