<?php
$env = getenv('APP_ENVIRONMENT') ? getenv('APP_ENVIRONMENT') : 'production';
switch ($env) {
    case 'production':
    default:
        $yii = dirname(__FILE__) . '/../vendors/Yii/framework/yii.php';
        $config = dirname(__FILE__) . '/../app/config/main.php';
        break;
    case 'staging':
    case 'local':
        $yii = dirname(__FILE__) . '/../vendors/Yii/framework/yii.php';
        $config = dirname(__FILE__) . '/../app/config/main-local.php';
        defined('YII_DEBUG') or define('YII_DEBUG', true);
        defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL', 3);
        break;
}

require_once($yii);
Yii::createWebApplication($config)->run();