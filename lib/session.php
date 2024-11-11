<?php

setcookie('cookie_name', 'cookie_value', [
    'expires' => time() + 86400,
    'path' => '/',
    'domain' => _DOMAIN_,
    'secure' => true, 
    'httponly' => true, 
    'samesite' => 'lax'
]);
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
