<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/Users/alber/Downloads/grav-admin-v1.8.0-beta.3/grav-admin/user/plugins/assets/blueprints.yaml',
    'modified' => 1545397240,
    'size' => 648,
    'data' => [
        'name' => 'Assets',
        'version' => '2.0.1',
        'description' => 'This plugin provides a convenient way to add CSS and JS assets directly from your pages.',
        'icon' => 'list-alt',
        'author' => [
            'name' => 'Team Grav',
            'email' => 'devs@getgrav.org',
            'url' => 'http://getgrav.org'
        ],
        'homepage' => 'https://github.com/getgrav/grav-plugin-assets',
        'demo' => 'http://learn.getgrav.org',
        'keywords' => 'assets, javascript, css, inline',
        'bugs' => 'https://github.com/getgrav/grav-plugin-assets/issues',
        'license' => 'MIT',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'Plugin status',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
