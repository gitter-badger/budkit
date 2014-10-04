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
$app->route->add("/",  "Home");

$app->route->add("/callme", "callme")
	->setValues(array(
		"action"=>function($response, $params = null)use($app){	
			//var_dump($app);
			echo "call me maybe";
		})
	);

//Grouping routes under a prefix; 
Route::attach("/blog", "blog", function($route){
	$route->setTokens(array(
	   'id'		=> '\d+',
	   'format'	=>'(\.json|\.atom|\.html)'
	));
   //subroutes
   $route->add( '{format}','browse');
   $route->add('/{id}{format}', "read");
   $route->add('/{id}/edit{format}', "edit");
   
});

//Resource routes
Route::attachResource("/protocol","protocol");


$app->execute();