<?php
/**
 * Created by PhpStorm.
 * User: livingstonefultang
 * Date: 15/06/2014
 * Time: 08:58
 */

$paths 			= require __DIR__ . '/paths.php';
$autoload 		= require $paths['base'] . '/autoload.php';

//Get an instance of the app container
$app 			= new Budkit\Application\Platform;

//App framework
$paths['framework'] = $paths['vendor'].'/budkit/framework/src';

//Application bootstrap code;
//Detec env, load config etc...
require $paths['framework'].'/Budkit/Application/bootstrap.php';

//store paths in container
$app['paths'] 	= $paths;


return $app;