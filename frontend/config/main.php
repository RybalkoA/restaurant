<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    
     'modules' => [
             
               'cabinet' => [
                   'class' => 'app\modules\cabinet\CabinetModule',
                ],
        
               'yii2images' => [
                'class' => 'rico\yii2images\Module',
                //be sure, that permissions ok 
                //if you cant avoid permission errors you have to create "images" folder in web root manually and set 777 permissions
                'imagesStorePath' => '../../backend/web/upload/store', //path to origin images
                'imagesCachePath' => '../../backend/web/upload/cache', //path to resized copies
                'graphicsLibrary' => 'GD', //but really its better to use 'Imagick' 
                'placeHolderPath' => '../../backend/web/upload/placeHolder.png', // if you want to get placeholder when image not exists, string will be processed by Yii::getAlias
            ],
        
    ],
    'components' => [
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        /*
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
        */
    ],
    'params' => $params,
];
