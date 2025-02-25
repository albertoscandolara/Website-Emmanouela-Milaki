<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'C:/Users/alber/Downloads/grav-admin-v1.8.0-beta.3/grav-admin/user/pages/01.home/modular.en.md',
    'modified' => 1738700099,
    'size' => 233,
    'data' => [
        'header' => [
            'title' => 'Home',
            'menu' => 'Home',
            'slug' => 'home',
            'onpage_menu' => true,
            'content' => [
                'items' => '@self.modular',
                'order' => [
                    'by' => 'default',
                    'dir' => 'asc',
                    'custom' => [
                        0 => '_intro',
                        1 => '_psychotherapy',
                        2 => '_ethics',
                        3 => '_children'
                    ]
                ],
                'routable' => true
            ]
        ],
        'frontmatter' => 'title: Home
menu: Home
slug: home
onpage_menu: true
content:
  items: "@self.modular"
  order:
    by: default
    dir: asc
    custom:
      - _intro
      - _psychotherapy
      - _ethics
      - _children
  routable: true',
        'markdown' => ''
    ]
];
