<?php

return [
    'class' => 'yii\db\Connection',
    'dsn'     => 'sqlite:' . dirname(__DIR__) . '/db/app.db',
    // 'dsn' => 'mysql:host=localhost;dbname=yii2basic',
    'username' => 'root',
    'password' => 'root',
    'charset' => 'utf8',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
