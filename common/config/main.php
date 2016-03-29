<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
	'urlManager' => [
            'class' => 'yii\web\UrlManager',
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            'cart/addAjax/<\d+>' => '/cart/addAjax',
            'type/view/<id:\d+>' => '/type/view',
]
        
        ],
        
        'db'=>[
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=restaurant;dbname=restoran',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
        ],
	
       
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
];
