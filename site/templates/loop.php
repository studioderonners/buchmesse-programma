<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
  <link rel="stylesheet" href="https://unpkg.com/flickity-fade@2/flickity-fade.css">
  <?= css('/assets/style.css') ?>
  <title><?= $page->title() ?></title>
</head>
<body>
  <?= snippet('carousel-main') ?>

  <?php 
  $nowArray = $page->children();
  $i = -1;
  foreach ($nowArray as $nowPage) : ?>
    <?php 
    $pageTime = $nowPage->time();
    $i++ 
    ?>
    <div class="highlight-carousel highlight-<?= $i ?>" datetime="<?= $pageTime ?>">
    <?php $nowSlides = $nowPage->slides()->toFiles(); 
      foreach ($nowSlides as $nowSlide) : ?>
        <div class="slide">
          <img src="<?= $nowSlide->url() ?>" alt="">
        </div>
    <?php endforeach; ?>
    </div>
  <?php endforeach; ?>



  <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
  <script src="https://unpkg.com/flickity-fade@1/flickity-fade.js"></script>
  <script>
    <?php 
      $duration = $page->duration()->toInt();

      $highlightPages = $page->highlights()->toPages();
      // $highlightTime = [];

      foreach ($highlightPages as $highlight) {
        $time = $highlight->time();
        // array_push($highlightTime, $time);
      };

      // print_r($highlightTime);
    ?>

    // console.log(<?= $pageTime ?>);

    // Main Carousel
    let main = document.querySelector('.main-carousel');
    let flkty = new Flickity( main, {
      cellAlign: 'center',
      prevNextButtons: false,
      pageDots: false,
      autoPlay: <?= $duration ?>,
      fade: true,
      imagesLoaded: true
    });

    // Highlight Carousels
    let highlights = document.querySelectorAll('.highlight-carousel');
    let highlightsArray = [...highlights];

    var now = new Date();

    for (let nowCarousel of highlightsArray) {
      // Activate Flickty
      let nowFlickty = new Flickity(nowCarousel, {
        cellAlign: 'center',
        prevNextButtons: false,
        pageDots: false,
        autoPlay: <?= $duration ?>,
        fade: true,
        imagesLoaded: true
      });
      // Datetime Activation
      let datetimeString = document.querySelector('.highlight-0').getAttribute('datetime');
      let datetimeArray = datetimeString.split(':');
    }

    

    // let datetimeString = document.querySelector('.highlight-0').getAttribute('datetime');
    // let datetimeArray = datetimeString.split(':')
    console.log(now, Number(datetimeArray[0]), Number(datetimeArray[1]));

    var millisTill10 = new Date(now.getFullYear(), now.getMonth(), now.getDate(), Number(datetimeArray[0]), Number(datetimeArray[1]), 0, 0) - now;
    if (millisTill10 < 0) {
        millisTill10 += 86400000; // it's after 10am, try 10am tomorrow.
    }
    setTimeout(function(){
      document.querySelector('.highlight-0').style.opacity = "100%";
    }, millisTill10);
  </script>
</body>
</html>