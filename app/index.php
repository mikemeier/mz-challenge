<?php

use MzChallenge\Controller;

require_once __DIR__.'/vendor/autoload.php';

#var_dump($_SERVER);

$controller = new Controller();
echo $controller->indexAction();
