<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/Users/alber/Downloads/grav-admin-v1.8.0-beta.3/grav-admin/user/plugins/custom-css/blueprints.yaml',
    'modified' => 1545231126,
    'size' => 1276,
    'data' => [
        'name' => 'Custom CSS',
        'version' => '0.2.2',
        'description' => 'Adds some custom CSS to your Grav site',
        'icon' => 'plug',
        'author' => [
            'name' => 'Team Grav',
            'email' => 'devs@getgrav.org'
        ],
        'homepage' => 'https://github.com/getgrav/grav-plugin-custom-css',
        'keywords' => 'grav, plugin, css, design',
        'bugs' => 'https://github.com/getgrav/grav-plugin-custom-css/issues',
        'readme' => 'https://github.com/getgrav/grav-plugin-custom-css/blob/develop/README.md',
        'license' => 'MIT',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_ADMIN.PLUGIN_STATUS',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'css_inline' => [
                    'type' => 'editor',
                    'codemirror' => [
                        'mode' => 'css'
                    ],
                    'label' => 'PLUGIN_CUSTOM_CSS.INLINE_CSS',
                    'help' => 'PLUGIN_CUSTOM_CSS.INLINE_CSS_HELP'
                ],
                'css_files' => [
                    'type' => 'list',
                    'label' => 'PLUGIN_CUSTOM_CSS.CSS_FILES',
                    'help' => 'PLUGIN_CUSTOM_CSS.CSS_FILES_HELP',
                    'fields' => [
                        '.path' => [
                            'type' => 'text',
                            'label' => 'PLUGIN_CUSTOM_CSS.CSS_FILES_PATH',
                            'help' => 'PLUGIN_CUSTOM_CSS.CSS_FILES_PATH_HELP'
                        ],
                        '.priority' => [
                            'type' => 'int',
                            'label' => 'PLUGIN_CUSTOM_CSS.CSS_FILES_PATH_PRIORITY',
                            'help' => 'PLUGIN_CUSTOM_CSS.CSS_FILES_PATH_PRIORITY_HELP',
                            'default' => 0
                        ]
                    ]
                ]
            ]
        ]
    ]
];
