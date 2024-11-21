<?php

setcookie('cookie_name', 'cookie_value', [
    'expires' => time() + 86400,
    'path' => '/',
    'domain' =>'uf63wl4z2daq9dbb.chr7pe7iynqr.eu-west-1.rds.amazonaws.com' ,
    'secure' => true, 
    'httponly' => true, 
    'samesite' => 'lax'
]);
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
