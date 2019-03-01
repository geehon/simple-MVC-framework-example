<?php

require __DIR__ . '/../bootstrap/autoload.php';

// config for database
$config = require __DIR__ . '/../config/db.php';

$app = require_once __DIR__ .'/../bootstrap/app.php';
// route
require __DIR__ . '/../routers/web.php';
require __DIR__ . '/../routers/api.php';





$app->run();
