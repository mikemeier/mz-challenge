<?php

use MzChallenge\ControllerExecuter;
use MzChallenge\ControllerResolver;

error_reporting(E_ALL);
ini_set('display_errors', true);

require_once __DIR__.'/vendor/autoload.php';

$requestUri = $_SERVER['REQUEST_URI'];
$controllerResolver = new ControllerResolver($requestUri);

$controllerAndAction = $controllerResolver->getControllerAndAction();

$executer = new ControllerExecuter($controllerAndAction);
$executer->execution();
