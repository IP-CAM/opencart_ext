<?php
// HTTP
define('HTTP_SERVER', 'http://localhost:9000/');

// HTTPS
define('HTTPS_SERVER', 'http://localhost:9000/');

// DIR
define('DIR_APPLICATION', '/home/marco/projects/protocolli/opencarttest/catalog/');
define('DIR_SYSTEM', '/home/marco/projects/protocolli/opencarttest/system/');
define('DIR_IMAGE', '/home/marco/projects/protocolli/opencarttest/image/');
define('DIR_STORAGE', '/home/marco/projects/protocolli/storage_opencart/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/theme/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'opencarttest');
define('DB_PASSWORD', 'opencarttest');
define('DB_DATABASE', 'opencarttest');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');