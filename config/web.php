<?php

$params = require(__DIR__ . '/params.php');

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => '1234567788',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
//         'user' => [
//             'identityClass' => 'app\models\User',
//             'enableAutoLogin' => true,
//         ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
        		'class' => 'yii\swiftmailer\Mailer',
        		'viewPath' => '@app/mailer',
        		'useFileTransport' => false,
        		'transport' => [
        				'class' => 'Swift_SmtpTransport',
        				'host' => 'smtp.126.com',
        				'username' => 'xxxxxx',
        				'password' => 'xxxx',
        				'port' => '465',
        				'encryption' => 'ssl',
        		],
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
//             'useFileTransport' => true,
        ],
    	'urlManager' => [
    			'showScriptName' => false,
    			'enablePrettyUrl' => true,
    			
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
        'db' => require(__DIR__ . '/db.php'),
    	'authManager' => [
    			'class' => 'yii\rbac\DbManager', // 使用数据库管理配置文件
    			'defaultRoles'=>['guest'],
    	],
    ],
	'modules'=>[
			'user' => [
					'class' => 'dektrium\user\Module',
					'confirmWithin' => 21600,
					'cost' => 12,
					'modelMap' => [
							'User' => 'app\models\User',
					],
					'admins' => ['admin']
			],
			'admin' => [
	    		'class' => 'mdm\admin\Module',
	    		'layout' => 'left-menu',//yii2-admin的导航菜单
	    		'controllerMap' => [
	    				'assignment' => [
	    						'class' => 'mdm\admin\controllers\AssignmentController',
	    						'userClassName' => 'app\models\User',
	    						'idField' => 'id'
	    				]
	    		],
	    	],
			
    ],
	'as access' => [
			'class' => 'mdm\admin\components\AccessControl',
			'allowActions' => [//下面列出的节点，所有人都可以访问，针对未登录用户的配置也可以移至这里
					'admin/*',
// 					'cdn/api/*',
					'site/*',
					'user/*',
			]
	],
	'params' =>$params,
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
    $config['modules']['security'] = [
        'class' => 'app\module\Security',
//     	'check_md5' =>'yes'
		'params'=>[
			'a'=>1,
			'b'=>2
		]
    ];
}

return $config;
