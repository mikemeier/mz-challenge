<?php

namespace MzChallenge;

use MzChallenge\Controller\Controller;

class ControllerResolver
{
    private string $requestUri;

    public function __construct(string $requestUri){
        $this->requestUri = $requestUri;
    }

    public function getControllerAndAction(): array {
        $default = ['controller' => Controller::class, 'action' => 'indexAction'];

        if(empty($this->requestUri)){
            return $default;
        }

        $uri = explode('/', $this->requestUri);
        if(!isset($uri[1]) || !isset($uri[2])){
            return $default;
        }

        $controllerUri = "\MzChallenge\\Controller\\" . $uri[1];
        $action = $uri[2] . 'Action';
        if(!class_exists($controllerUri) || !method_exists($controllerUri, $action)){
            return $default;
        }

        return ['controller' => $controllerUri, 'action' => $action];
    }
}