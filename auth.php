<?php
require __DIR__ . '/vendor/autoload.php';

use Automattic\WooCommerce\Client;

$woocommerce = new Client(
    'http://localhost:8080/wordpress',
    'ck_da206800e4c0bad3703afb76026c599241437407',
    'cs_accc68a2c71b4d7c7b48a0584639bb7c3dc3bab5',
    [
        'wp_api' => true,
        'version' => 'wc/v3',
        'query_string_auth' => true // Force Basic Authentication as query string true and using under HTTPS
    ]
);
