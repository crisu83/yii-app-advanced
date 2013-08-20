<?php
/**
 * This is the bootstrap file for test application.
 * This file should be removed when the application is deployed for production.
 */

defined('YII_DEBUG') or define('YII_DEBUG', true);

// disable Yii error handling logic
defined('YII_ENABLE_EXCEPTION_HANDLER') or define('YII_ENABLE_EXCEPTION_HANDLER',false);
defined('YII_ENABLE_ERROR_HANDLER') or define('YII_ENABLE_ERROR_HANDLER',false);

$rootDir = __DIR__ . '/../..';

require($rootDir . '/vendor/yiisoft/yii/framework/yii.php');
require($rootDir . '/frontend/components/WebApplication.php');
require($rootDir . '/common/helpers/global.php');
require($rootDir . '/vendor/crisu83/yii-consoletools/helpers/ConfigHelper.php');

$config = ConfigHelper::merge(
    array(
        $rootDir . '/common/config/main.php',
        $rootDir . '/frontend/config/web.php',
        $rootDir . '/common/config/test.php',
        $rootDir . '/common/config/main-environment.php',
        $rootDir . '/common/config/main-local.php',
        $rootDir . '/frontend/config/web-local.php',
        $rootDir . '/common/config/test-local.php',
    )
);

$app = Yii::createApplication('WebApplication', $config);
$app->run();
