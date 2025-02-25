<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'C:/Users/alber/Downloads/grav-admin-v1.8.0-beta.3/grav-admin/user/pages/03.biography/default.en.md',
    'modified' => 1740509480,
    'size' => 232,
    'data' => [
        'header' => [
            'title' => 'Biography',
            'menu' => 'Biography',
            'slug' => 'biography',
            'onpage_menu' => true,
            'content' => [
                'items' => '@self.modular',
                'order' => [
                    'by' => 'default',
                    'dir' => 'asc',
                    'custom' => [
                        0 => '_motto',
                        1 => '_biography',
                        2 => '_publications'
                    ]
                ],
                'routable' => true
            ]
        ],
        'frontmatter' => 'title: Biography
menu: Biography
slug: biography
onpage_menu: true
content:
  items: "@self.modular"
  order:
    by: default
    dir: asc
    custom:
      - _motto
      - _biography
      - _publications
  routable: true',
        'markdown' => ''
    ]
];
