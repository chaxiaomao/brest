<?php
defined('PROJECT_ROOT') or define('PROJECT_ROOT', dirname(dirname(__DIR__)));
$venDir = PROJECT_ROOT . "/vendor";
$config = [
    'version' => '1.0.0',
    'charset' => 'UTF-8',
    'vendorPath' => $venDir,
    'components' => [
        'formatter' => [
            'timeZone' => 'UTC',
        ],
        'cache' => 'yii\caching\FileCache',
        'db' => require(__DIR__ . '/db.php'),
        'settings' => ['class' => 'common\components\Settings',],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'i18n' => [
            'translations' => [
                'app*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'fileMap' => [
                        'app' => 'app.php',
                        'app.t2' => 't2.php',
                    ],
                ],
            ],
        ],
    ],
];
return $config;
