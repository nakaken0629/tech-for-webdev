<?php
require __DIR__ . '/../vendor/autoload.php';

$request = WpOrg\Requests\Requests::get('https://www.impress.co.jp/');
var_dump($request->body); 
