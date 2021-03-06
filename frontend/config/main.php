<?php
defined('BREST_FRONTEND_THEME') or define('BREST_FRONTEND_THEME', 'brest');
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/params.php'
);
$config = [
    'id' => 'app-frontend',
    'language' => 'zh-CN',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'modules' => require(__DIR__ . '/modules.php'),
    'components' => [
        'formatter' => [
            'dateFormat' => 'Y-M-d',
        ],
        'request' => [
            'csrfParam' => '_csrf-frontend',
            'cookieValidationKey' => 'brest',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
//                [
//                    'class' => 'yii\log\FileTarget',
//                    'levels' => ['error', 'warning'],
//                ],
                'frontendLog' => [
                    'class' => 'yii\log\FileTarget',
                    'logFile' => "@runtime/logs/frontend_info.log",
                    'categories' => ['application'],
                    'levels' => ['info', 'trace'],
                    // belows setting will keep the log fresh
                    'maxFileSize' => 0,
                    'maxLogFiles' => 0,
                ],
                'frontendDebugLog' => [
                    'class' => 'yii\log\FileTarget',
                    'logFile' => "@runtime/logs/frontend_debug.log",
                    'categories' => ['debug'],
                    'levels' => ['info'],
                    // belows setting will keep the log fresh
//                    'maxFileSize' => 0,
//                    'maxLogFiles' => 0,
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'enableStrictParsing' => false,
            'rules' => require(__DIR__ . '/seo.php'),
        ],
        'view' => [
            'theme' => [
                'basePath' => '@app/themes/' . BREST_FRONTEND_THEME,
                'baseUrl' => '@web/themes/' . BREST_FRONTEND_THEME,
                'pathMap' => [
                    '@app/views' => ['@app/themes/' . BREST_FRONTEND_THEME,],
                    '@app/modules' => '@app/themes/' . BREST_FRONTEND_THEME . '/modules', // module's theme
                    '@app/widgets' => '@app/themes/' . BREST_FRONTEND_THEME . '/widgets', // widget's theme
                ],
            ],
        ],
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
    ];
    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];
}

return $config;
