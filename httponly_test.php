<?php
echo "Hello world!";
$name = 'foo';
$value = 'bar';
$expirationTime = 0;    // Session cookie.
$path = '/httponly_test';
$domain = 'nemrod962.github.io';
$isSecure = false;
$isHttpOnly = false;
setcookie($name, $value, $expirationTime, $path, $domain, $isSecure, $isHttpOnly);?>
