<?php

/*
|--------------------------------------------------------------------------
| Define Application Paths and include the Framework
|--------------------------------------------------------------------------
|
| The $path var must include the following keys, needed by the framework
| boostrap:
|
| base:      Which points to the install root
| public:    Which points to the server root or wherever you put this index.php file
| app:       The directory which holds all your application classes and config vars
| storage:   A directory used as a file store.
| vendor:    Pointing to the vendor directory
| framework: The framework directory
|
*/
$paths   = require __DIR__ . '/../paths.php';
$app     = require $paths['framework'] . '/Budkit/Application/bootstrap.php';

/*
|--------------------------------------------------------------------------
| Use the composer loader class to define system app classes
|--------------------------------------------------------------------------
|
| The composer auto-load class can be used to add lookup directories for
| custom application classes. This class can be assessed from the app
| controller using $app->loader.
| Alternatively you may use Budkit/Utitlity/Loader
|
*/
$app->loader->add('', $paths['app'].'/controllers');
$app->loader->add('', $paths['app'].'/models');
$app->loader->add('', $paths['app']);


/*
|--------------------------------------------------------------------------
| Execute the application
|--------------------------------------------------------------------------
|
| Starts the application, Parses the request, Processes the Route to the
| Requested Action and Creates a Response which by default is auto-returned.
|
*/
$app->execute();