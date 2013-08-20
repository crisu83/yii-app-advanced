<?php

ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL | E_NOTICE);

defined('YII_DEBUG') or define('YII_DEBUG', true);

$rootDir = __DIR__ . '/../..';

require($rootDir . '/vendor/yiisoft/yii/framework/yii.php');
require($rootDir . '/frontend/components/WebApplication.php');
require($rootDir . '/common/helpers/global.php');
require($rootDir . '/vendor/crisu83/yii-consoletools/helpers/ConfigHelper.php');

$config = ConfigHelper::merge(
    array(
        $rootDir . '/common/config/main.php',
        $rootDir . '/frontend/config/web.php',
        $rootDir . '/common/config/main-environment.php',
        $rootDir . '/common/config/main-local.php',
        $rootDir . '/frontend/config/web-local.php',
    )
);

$app = Yii::createApplication('WebApplication', $config);
$app->run();