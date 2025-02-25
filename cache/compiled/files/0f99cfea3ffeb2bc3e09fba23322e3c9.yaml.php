<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/Users/alber/Downloads/grav-admin-v1.8.0-beta.3/grav-admin/user/plugins/email/email.yaml',
    'modified' => 1735250275,
    'size' => 221,
    'data' => [
        'enabled' => true,
        'from' => NULL,
        'to' => NULL,
        'mailer' => [
            'engine' => 'sendmail',
            'smtp' => [
                'server' => 'localhost',
                'port' => 25,
                'encryption' => 'none',
                'user' => NULL,
                'password' => NULL
            ],
            'sendmail' => [
                'bin' => '/usr/sbin/sendmail -bs'
            ]
        ],
        'content_type' => 'text/html',
        'debug' => false
    ]
];
