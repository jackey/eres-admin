<?php

defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

$frameworkDir = __DIR__.'/framework';

require($frameworkDir.'/vendor/autoload.php');
require($frameworkDir.'/vendor/yiisoft/yii2/yii.php');

$config = require(__DIR__.'/config/web.php');

(new yii\web\Application($config))->run();
