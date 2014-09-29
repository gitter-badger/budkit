<?php
/**
 * Created by PhpStorm.
 * User: livingstonefultang
 * Date: 14/06/2014
 * Time: 18:57
 */

ini_set('display_errors', 1); //temporary

$app 	= require __DIR__ . '/../bootstrap.php';

//Adding a Route;
Route::add("/",  "index");


//Grouping routes under a prefix; 
Route::attach("/blog", "blog", function($router){
	$router->setTokens(array(
	   'id'		=> '\d+',
	   'format'	=>'(\.json|\.atom|\.html)'
	));
   //subroutes
   $router->add( '{format}','browse');
   $router->add('/{id}{format}', "read");
   $router->add('/{id}/edit{format}', "edit");
   
});

//Resource routes
Route::attachResource("/protocol","protocol");


$app->execute();