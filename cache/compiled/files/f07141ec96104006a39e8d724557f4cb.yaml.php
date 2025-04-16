<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/Users/alber/Downloads/grav-admin-v1.8.0-beta.3/grav-admin/user/config/plugins/email.yaml',
    'modified' => 1744817353,
    'size' => 333,
    'data' => [
        'enabled' => true,
        'from' => 'alberto@alessiocurzel.dev',
        'to' => 'alberto.scandolara92@gmail.com',
        'mailer' => [
            'engine' => 'smtp',
            'smtp' => [
                'server' => '192.168.30.11',
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
        'debug' => true,
        'cc' => NULL,
        'bcc' => NULL,
        'reply_to' => NULL,
        'body' => NULL
    ]
];
