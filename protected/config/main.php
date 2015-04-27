<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'My Web Application',

	// preloading 'log' component
	'preload'=>array('log'),
	'timeZone'=>'asia/jakarta',
	'language'=>'id',
	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'!@#',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
		
	),

	// application components
	'components'=>array(
	    'Smtpmail' => array(
            'class' => 'application.extensions.smtpmail.PHPMailer',
            //'Host' => "mail.budgetdesign.com.sg",
            //'Username' => 'testing@budgetdesign.com.sg',
            //'Password' => 'testing',
            'Mailer' => 'smtp',
           // 'Port' => 25,
            'SMTPAuth' => true,
        ),
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
		// uncomment the following to enable URLs in path-format
		
		'urlManager'=>array(
			'urlFormat'=>'path',
			'showScriptName'=>FALSE,
			'caseSensitive'=>FALSE,
			'rules'=>array(
				'adminosu'=>'/adminosu/auth/index',
				'adminosu/login'=>'/adminosu/auth/login',
				'adminosu/reset-password'=>'/adminosu/auth/resetpassword',
				'adminosu/send-code-to-reset-password'=>'/adminosu/auth/sendresetcode',
				'adminosu/logout'=>'/adminosu/auth/logout',
				'portfolio/<id:\d+>/<title>'=>'site/portfoliosingle',
				'blog/<slug:[\w\-]+>'=>'site/blogcategory',
				'email/subscribe-news-offers'=>'site/subscribeemail',
				'shop/single'=>'shop/singleproduct',
				//'<slug:[\w\-]+>'=>'site/index',
                '<year:\d{4}>/<month:\d{2}>/<date:\d{2}>/<id:\d+>/<title>'=>'site/blogread',
                '<year:\d{4}>/<month:\d{2}>/<date:\d{2}>/<id:\d+>'=>'site/blogread',
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		
		'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),
		// uncomment the following to use a MySQL database
		
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=toystore',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
		),
		
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
	),
);
