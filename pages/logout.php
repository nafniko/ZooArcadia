<?php
require_once __DIR__ . '/../lib/config.php';
require_once __DIR__ . '/../lib/pdo.php';
require_once __DIR__ . '/../lib/session.php';

require_once  '../lib/config.php';
require_once  '../lib/pdo.php';
require_once  '../lib/session.php';




session_destroy();
unset($_SESSION);
header('location: /pages/connexion.php');