<?php return array (
  'components' => 
  array (
    'db' => 
    array (
      'class' => 'yii\\db\\Connection',
      'dsn' => 'mysql:host=localhost;dbname=ulab',
      'username' => 'ulab',
      'password' => 'ul@b005',
      'charset' => 'utf8',
    ),
    'user' => 
    array (
    ),
    'mailer' => 
    array (
      'transport' => 
      array (
        'class' => 'Swift_SmtpTransport',
        'host' => 'mtaoutliste.u-bordeaux.fr',
        'authMode' => 'null',
        'port' => '25',
      ),
      'view' => 
      array (
        'theme' => 
        array (
          'name' => 'humhubsave1304',
          'basePath' => '/var/www/humhub/themes/humhubsave1304',
          'publishResources' => false,
        ),
      ),
    ),
    'cache' => 
    array (
      'class' => 'yii\\caching\\FileCache',
      'keyPrefix' => 'humhub',
    ),
    'view' => 
    array (
      'theme' => 
      array (
        'name' => 'humhubsave1304',
        'basePath' => '/var/www/humhub/themes/humhubsave1304',
        'publishResources' => false,
      ),
    ),
    'formatter' => 
    array (
      'defaultTimeZone' => 'Europe/Berlin',
    ),
    'formatterApp' => 
    array (
      'defaultTimeZone' => 'Europe/Berlin',
      'timeZone' => 'Europe/Berlin',
    ),
  ),
  'params' => 
  array (
    'installer' => 
    array (
      'db' => 
      array (
        'installer_hostname' => 'localhost',
        'installer_database' => 'ulab',
      ),
    ),
    'config_created_at' => 1527595243,
    'horImageScrollOnMobile' => '1',
    'databaseInstalled' => true,
    'installed' => true,
  ),
  'name' => 'U-Lab',
  'language' => 'fr',
  'timeZone' => 'Europe/Berlin',
); ?>