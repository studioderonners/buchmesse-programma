<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?= css('/assets/css/style.css') ?>
  <script src="https://cdn.jsdelivr.net/npm/p5@1.9.0/lib/p5.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
  <title><?= site()->title() ?></title>
</head>
<body>
  <header>
    <h3><nobr>10 May 2024</nobr> <nobr>at Brutus</nobr></h3>
  </header>

  <main id="canvas">
    <section class="slide">
      <h1><?= site()->title() ?></h1>
      <h2>by studio <nobr>de Ronners</nobr></h2>
    </section>
    <section class="slide font-alt">
      <h1>Limited Edition Wool Blankets</h1>
    </section>
    <section class="slide font-alt">
      <ul>
        <li>
          <h2>Gino Bud Hoiting</h2>
        </li>
        <li>
          <h2>Joep Van Lieshout</h2>
        </li>
        <li>
          <h2>Lex Pott</h2>
        </li>
        <li>
          <h2>Rabin Huissen</h2>
        </li>
        <li>
          <h2>Studio Dumbar</h2>
        </li>
        <li>
          <h2>Studio Spass</h2>
        </li>
        <li>
          <h2>Team Thursday</h2>
        </li>
        <li>
          <h2>Studio de Ronners</h2>
        </li>
      </ul>
    </section>
    <section class="slide">
      <h1>10 May</h1>
      <h1>At Brutus</h1>
      <h1>18:00 — 00:00</h1>
    </section>

    <div class="flare"></div>
    <div class="flare-neg"></div>
  </main>

  <footer>
    <h3>Save the date</h3>
  </footer>

  <?= js([
    '/assets/js/saveTheDate.js'
  ]) ?>
</body>
</html>