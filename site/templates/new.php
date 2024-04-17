<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= site()->title() ?></title>
</head>
<body>

  <h1><?= site()->title() ?></h1>
  <ul>
  <?php
    $blanketsArray = page('blankets')->children();
    foreach($blanketsArray as $blanketPage) : 
      $cover = $blanketPage->images()->findBy("template", "cover"); ?>

      <li>
        <img src="<?= $cover->url() ?>" alt="" srcset="" style="width: 240px;">
        <h3><?= $blanketPage->headline(); ?></h3>
        <p><?= $blanketPage->author(); ?></p>
      </li>

  <?php endforeach; ?>
  </ul>
  
  <?= js('/assets/js/flag.js') ?>
</body>
</html>