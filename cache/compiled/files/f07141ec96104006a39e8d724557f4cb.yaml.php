<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/Users/alber/Downloads/grav-admin-v1.8.0-beta.3/grav-admin/user/config/plugins/email.yaml',
    'modified' => 1742752761,
    'size' => 370,
    'data' => [
        'enabled' => true,
        'from' => 'alberto.scandolara92@gmail.com',
        'to' => 'alberto.scandolara92@gmail.com',
        'mailer' => [
            'engine' => 'smtp',
            'smtp' => [
                'server' => 'smtp.mailtrap.io',
                'port' => 25,
                'encryption' => 'none',
                'user' => '9ca0c53019ff08',
                'password' => '87f075d4e22728'
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
        'body' => 'Test email'
    ]
];
