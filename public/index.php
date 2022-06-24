<?php

require_once __DIR__ . '/../bootstrap/app.php';

ob_start();

include __DIR__ . '/../templates/index.php';

echo ob_get_clean();