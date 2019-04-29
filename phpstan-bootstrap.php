<?php

$rootPath = __DIR__ . '/../../../';

require_once $rootPath . 'app/bootstrap.php';

if (!in_array('phar', stream_get_wrappers()) && !empty(Phar::running())) {
    stream_wrapper_restore('phar');
}

$bootstrap = \Magento\Framework\App\Bootstrap::create(BP, $_SERVER);
$bootstrap->getObjectManager();
