<?php
 require_once __DIR__ . '/../vendor/autoload.php';


header("X-Frame-Options: SAMEORIGIN"); 
header("Content-Security-Policy: frame-ancestors 'self';");
header("Content-Security-Policy: default-src 'self'; style-src 'self' https://fonts.googleapis.com; script-src 'self'; font-src 'self' https://fonts.gstatic.com; img-src 'self' https://fonts.gstatic.com data:");


header("Content-Type: text/html; charset=UTF-8"); 
header("X-Content-Type-Options: nosniff"); 


header_remove("X-Powered-By");

define("_DOMAIN_", "uf63wl4z2daq9dbb.chr7pe7iynqr.eu-west-1.rds.amazonaws.com");
define("_DB_SERVER_", "	uf63wl4z2daq9dbb.chr7pe7iynqr.eu-west-1.rds.amazonaws.com");
define("_DB_NAME_", "sto2g9dado760ufv");
define("_DB_USER_", "h3wn8n8g66i1rour");
define("_DB_PASSWORD_", "i9j7we0uegcy6a5g");
define("_ASSETS_IMAGES", "/asset/");
define("_STMP_PASSWORD_", "rjUImBqN7QMgXT5P");






