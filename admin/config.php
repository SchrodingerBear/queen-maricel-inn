<?php
require_once 'vendor/autoload.php';
require_once 'class-db.php';

define('GOOGLE_CLIENT_ID', 'PASTE_CLIENT_ID_HERE');
define('GOOGLE_CLIENT_SECRET', 'PASTE_CLIENT_SECRET_HERE');

$config = [
    'callback' => 'http://localhost/hor/callback.php',
    'keys' => [
        'id' => GOOGLE_CLIENT_ID,
        'secret' => GOOGLE_CLIENT_SECRET
    ],
    'scope' => 'https://mail.google.com',
    'authorize_url_parameters' => [
        'approval_prompt' => 'force',
        'access_type' => 'offline'
    ]
];

$adapter = new Hybridauth\Provider\Google($config);