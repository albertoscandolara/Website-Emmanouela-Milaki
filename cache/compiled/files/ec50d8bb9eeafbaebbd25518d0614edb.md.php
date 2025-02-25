<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'C:/Users/alber/Downloads/grav-admin-v1.8.0-beta.3/grav-admin/user/pages/04.contacts/modular.en.md',
    'modified' => 1736004039,
    'size' => 277,
    'data' => [
        'header' => [
            'title' => 'Contacts',
            'menu' => 'Contacts',
            'slug' => 'contacts',
            'onpage_menu' => true,
            'body_classes' => 'modular fullwidth',
            'content' => [
                'items' => '@self.modular',
                'order' => [
                    'by' => 'default',
                    'dir' => 'asc',
                    'custom' => [
                        0 => '_map',
                        1 => '_social',
                        2 => '_newsletter',
                        3 => '_suggestions'
                    ]
                ],
                'routable' => true
            ]
        ],
        'frontmatter' => 'title: Contacts
menu: Contacts
slug: contacts
onpage_menu: true
body_classes: "modular fullwidth"
content:
  items: "@self.modular"
  order:
    by: default
    dir: asc
    custom:
      - _map
      - _social
      - _newsletter
      - _suggestions
  routable: true',
        'markdown' => ''
    ]
];
