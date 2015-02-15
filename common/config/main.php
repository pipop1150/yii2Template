<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    	'urlManager' => [
    			// here is your backend URL rules
    			'enablePrettyUrl' => true,
    			'showScriptName' => false,
    	],
    ],
];
