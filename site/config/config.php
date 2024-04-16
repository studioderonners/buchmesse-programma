<?php 
return [
  'debug' => true,
  'panel' => [
    'menu' => [
      'site' => [
        'label' => 'Overview'
      ],
      'videos' => [
        'icon' => 'video',
        'label' => 'Videos',
        'link' => 'pages/videos',
        'current' => function (string $current): bool {
          $path = Kirby\Cms\App::instance()->request()->path()->toString();
          return Str::contains($path, 'pages/videos');
        }
      ]
    ]
  ]
];