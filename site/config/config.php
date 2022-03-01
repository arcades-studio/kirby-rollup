<?php 
return [
  'debug' => true,
  'cache' => [
    'pages' => [
      'active' => false // set to true in production to turn on page cache
    ]
  ],
  'medienbaecker.autoresize.maxWidth' => 2000,
  // these srcsets should be adjusted based on the site design
  'thumbs' => [
    'srcsets' => [
      'gallery' => [
        '300w' => [
          'width' => 300,
          'height' => 300
        ],
        '500w' => [
          'width' => 500,
          'height' => 600
        ],
        '700w' => [
          'width' => 700,
          'height' => 1000
        ],
        '800w' => [
          'width' => 800,
          'height' => 1000
        ],
        '1000w' => [
          'width' => 1000,
          'height' => 1000
        ],
        '1400w' => [
          'width' => 1400,
          'height' => 2000
        ],
        '1600w' => [
          'width' => 1600,
          'height' => 2000
        ],
        '2000w' => [
          'width' => 2000,
          'height' => 2000
        ]
      ],
      'thumbnail' => [
                      150 => '1x',
                      300 => '2x'
                    ],
      'mediumImage' => [
                        500 => '1x',
                        1000 => '2x'
                      ]
    ],
  ],
  // see https://github.com/omz13/kirby3-xmlsitemap for sitemap config options that might be relevant
];