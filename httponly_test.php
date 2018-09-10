<?php
$name = 'foo';
$value = 'bar';
$expirationTime = 0;    // Session cookie.
$path = '/';
$domain = 'localhost';
$isSecure = false;
$isHttpOnly = false;
setcookie($name, $value, $expirationTime, $path, $domain, $isSecure, $isHttpOnly);?>
