<?php

return [
  'panel' => [
    'css' => 'assets/css/custom-panel.css',
    'menu' => [
      'site' => [
        'label' => 'Overview'
      ],
      '-',
      'blankets' => [
        'icon'  => 'file',
        'label' => 'Blankets',
        'link'  => 'pages/blankets',
        'current' => function (string $current): bool {
          $path = Kirby\Cms\App::instance()->request()->path()->toString();
          return Str::contains($path, 'pages/blankets');
        }
      ],
      'about' => [
        'icon'  => 'info',
        'label' => 'About',
        'link'  => 'pages/about',
        'current' => function (string $current): bool {
          $path = Kirby\Cms\App::instance()->request()->path()->toString();
          return Str::contains($path, 'pages/about');
        }
      ],
      'users'
    ]
  ]
];