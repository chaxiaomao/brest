<?php
defined('APP_ROOT') or define('APP_ROOT', dirname(__DIR__));
defined('BREST_BACKEND_THEME_HUI') or define('BREST_BACKEND_THEME_HUI', 'hui');
//defined('IMAGE_SITE') or define('IMAGE_SITE', 'http://brest-image.tunnel.echomod.cn');
defined('IMAGE_SITE') or define('IMAGE_SITE', 'http://brest-image.brest-china.com');
defined('CHAT_ROOM_SITE') or define('CHAT_ROOM_SITE', 'http://socket.brest-china.com:55151/');

$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/params.php'
);
$config = [
    'id' => 'app-backend',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'language' => 'zh-CN',
    'bootstrap' => ['log'],
    'modules' => require(__DIR__ . '/modules.php'),
    'params' => $params,
    'components' => [
        'formatter' => [
            'dateFormat' => 'Y-M-d',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'enableStrictParsing' => false,
            'rules' => require(__DIR__ . '/seo.php'),
        ],
        'user' => [
            'identityClass' => 'backend\models\entity\AdminUser',
            'enableAutoLogin' => true,
            'identityCookie' => [
                'name' => '_identity-backend',
                'httpOnly' => true,
            ],
        ],
        'request' => [
            'csrfParam' => '_csrf-backend',
            'cookieValidationKey' => 'brest',
        ],
        'session' => [
            // this is the name of the session cookie used for login on the backend
            'name' => 'advanced-backend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
//                [
//                    'class' => 'yii\log\FileTarget',
//                    'levels' => ['error', 'warning'],
//                ],
                'backendLog' => [
                    'class' => 'yii\log\FileTarget',
                    'logFile' => "@runtime/logs/backend_info.log",
                    'categories' => ['application'],
                    'levels' => ['info', 'trace'],
                    'maxFileSize' => 0,
                    'maxLogFiles' => 0,
                ],
                'backendSql' => [
                    'class' => 'yii\log\FileTarget',
                    'logFile' => "@runtime/logs/backend_sql.log",
                    'categories' => ['yii\db\*'],
                    'levels' => ['info'],
                ]
            ],
        ],
        'view' => [
            'theme' => [
                'basePath' => '@app/themes/' . BREST_BACKEND_THEME_HUI,
                'baseUrl' => '@web/themes/' . BREST_BACKEND_THEME_HUI,
                'pathMap' => [
                    '@app/views' => ['@app/themes/' . BREST_BACKEND_THEME_HUI,],
//                    '@app/modules' => '@app/themes/' . BREST_BACKEND_THEME_HUI . '/modules', // module's theme
                    '@app/widgets' => '@app/themes/' . BREST_BACKEND_THEME_HUI . '/widgets', // widget's theme
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
            'cachePath' => '@runtime/settingCache',
        ],
    ],
];
return $config;
