<?php

$app->route->setTokens(array('format' => '(\.[^/]+)?'));
$app->route->add("/", "Home");

//Inbox, an inbox is a collection of messages and/or notifications streams!
$app->route->attachResource("/inbox", "Inbox"); //a collection of streams;
$app->route->attachResource("/message", "Message"); //controller should extend post;
$app->route->attachResource("/notification", "Notification");
$app->route->attachResource("/task", "Task"); //tasks? tasks are a collection of protocols mark task as results?
$app->route->attachResource("/note", "Note"); //notes?
$app->route->attachResource("/calendar", "Calendar"); //collection of events
$app->route->attachResource("/event", "Event"); //multiple event types and status, e.g proposed meting
$app->route->attachResource("/stream", "Stream"); //collection of resources,
$app->route->attachResource("/person", "Person"); //persons have different roles?
$app->route->attachResource("/group", "Group"); //collection of persons?
$app->route->attachResource("/file", "File"); //collection of persons?

//Projects plugin;
$app->route->add("/projects{format}", "projects", "Project");
$app->route->attachResource("/project", "Project"); //multiple projects types and status e.g project proposal

//Protocols plugin
$app->route->add("/protocols{format}", "protocols", "Protocol");
$app->route->attachResource("/protocol", "Protocol"); //a collection of tasks

