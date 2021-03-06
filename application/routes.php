<?php

$app->route->setTokens(array('format' => '(\.[^/]+)?'));
$app->route->add("/", "Home");

//Inbox, an inbox is a collection of messages and/or notifications streams!
$app->route->attachResource("/inbox", "Inbox"); //a collection of streams;
$app->route->attachResource("/message", "Message"); //controller should extend post;
$app->route->attachResource("/notification", "Notification");

$app->route->attachResource("/note", "Note"); //notes?
$app->route->attachResource("/event", "Event"); //multiple event types and status, e.g proposed meting
$app->route->attachResource("/stream", "Stream"); //collection of resources,
$app->route->attachResource("/person", "Person"); //persons have different roles?
$app->route->attachResource("/group", "Group"); //collection of persons?
$app->route->attachResource("/file", "File"); //collection of persons?


//Protocols plugin
$app->route->add("/protocols{format}", "protocols", "Protocol");
$app->route->attachResource("/protocol", "Protocol"); //a collection of tasks

//$app->route->add("/callme", "callme")
//	->setValues(array(
//		"action"=>function($response, $params = null)use($app){
//
//			//var_dump($params);
//
//			$response->setContentType("json");
//
//			return $response->addContent("{j:s,o:n}");
//
//		})
//	);
//
////Grouping routes under a prefix;
//Route::attach("/blog", "blog", function($route){
//	$route->setTokens(array(
//	   'id'		=> '\d+',
//	   'format'	=>'(\.json|\.atom|\.html)'
//	));
//   //subroutes
//   $route->add( '{format}','browse');
//   $route->add('/{id}{format}', "read");
//   $route->add('/{id}/edit{format}', "edit");
//
//});

