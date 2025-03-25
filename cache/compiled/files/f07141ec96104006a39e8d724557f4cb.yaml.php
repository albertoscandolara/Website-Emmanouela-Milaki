<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/Users/alber/Downloads/grav-admin-v1.8.0-beta.3/grav-admin/user/config/plugins/email.yaml',
    'modified' => 1742924390,
    'size' => 379,
    'data' => [
        'enabled' => true,
        'from' => 'alberto.scandolara92@gmail.com',
        'to' => 'alberto.scandolara92@gmail.com',
        'mailer' => [
            'engine' => 'smtp',
            'smtp' => [
                'server' => 'smtp.gmail.com',
                'port' => 587,
                'encryption' => 'none',
                'user' => 'alberto.scandolara92@gmail.com',
                'password' => 'nmyydtjewaprggiu'
            ],
            'sendmail' => [
                'bin' => '/usr/sbin/sendmail -bs'
            ]
        ],
        'content_type' => 'text/html',
        'debug' => false,
        'cc' => NULL,
        'bcc' => NULL,
        'reply_to' => NULL,
        'body' => NULL
    ]
];
