<?php

error_reporting(E_ALL);
ini_set('display_errors', true);

require_once __DIR__.'/vendor/autoload.php';

$requestUri = $_SERVER['REQUEST_URI'];
$controllerResolver = new \MzChallenge\ControllerResolver($requestUri);

$controllerAndAction = $controllerResolver->getControllerAndAction();

$executer = new \MzChallenge\ControllerExecuter($controllerAndAction);
$executer->execution();
