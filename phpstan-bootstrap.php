<?php

$rootPath = __DIR__ . '/../../../';

require_once $rootPath . 'app/bootstrap.php';
stream_wrapper_restore('phar');

$bootstrap = \Magento\Framework\App\Bootstrap::create(BP, $_SERVER);
$bootstrap->getObjectManager();
