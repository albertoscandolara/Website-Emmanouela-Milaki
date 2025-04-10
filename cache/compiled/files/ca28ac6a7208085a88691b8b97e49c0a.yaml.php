<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/Users/alber/Downloads/grav-admin-v1.8.0-beta.3/grav-admin/user/plugins/custom-css/languages.yaml',
    'modified' => 1545231126,
    'size' => 1412,
    'data' => [
        'en' => [
            'PLUGIN_CUSTOM_CSS' => [
                'INLINE_CSS' => 'Inline CSS',
                'INLINE_CSS_HELP' => 'CSS that will be added inline to every page',
                'CSS_FILES' => 'CSS Files',
                'CSS_FILES_HELP' => 'CSS Files that will be loaded on every page. Use relative or absolute URLs',
                'CSS_FILES_PATH' => 'File path',
                'CSS_FILES_PATH_HELP' => 'Relative to web root',
                'CSS_FILES_PATH_PRIORITY' => 'Priority (0=Default)',
                'CSS_FILES_PATH_PRIORITY_HELP' => 'Lower means later inclusion. Negative value to add this file after the other files (that come with the theme)'
            ]
        ],
        'ru' => [
            'PLUGIN_CUSTOM_CSS' => [
                'INLINE_CSS' => 'Встроенный CSS',
                'INLINE_CSS_HELP' => 'CSS код, который будет добавлен на каждой странице',
                'CSS_FILES' => 'CSS файлы',
                'CSS_FILES_HELP' => 'CSS файлы, которые будут загружаться на каждой странице. Используйте относительные или абсолютные URL',
                'CSS_FILES_PATH' => 'Путь к файлу',
                'CSS_FILES_PATH_HELP' => 'Относительно корня',
                'CSS_FILES_PATH_PRIORITY' => 'Приоритет (0=По умолчанию)',
                'CSS_FILES_PATH_PRIORITY_HELP' => 'Меньше - файл подключается позже. Отрицательное значение для подключения этого файла после других файлов (которые поставляются с темой)'
            ]
        ]
    ]
];
