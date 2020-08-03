<?php

namespace MzChallenge;

class ControllerExecuter
{
    private array $controllerAndAction;

    public function __construct(array $controllerAndAction){
        $this->controllerAndAction = $controllerAndAction;
    }

    public function execution(){
        $controllerName = $this->controllerAndAction['controller'];
        $action = $this->controllerAndAction['action'];

        $controller = new $controllerName();
        echo $controller->$action();
    }
}