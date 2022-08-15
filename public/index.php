<?php

session_start();

use app\engine\Render;
use app\engine\TwigRender;
use app\engine\Request;


include "../config/config.php";
require_once '../vendor/autoload.php';

try {
    $request = new Request();

    $controlerName = $request->getControllerName() ?: 'product';
    $actionName = $request->getActionName();

    $controllerClass = CONTROLLER_NAMESPACE . ucfirst($controlerName) . "Controller";

    if (class_exists($controllerClass)) {
        $controller = new $controllerClass(new Render());
        $controller->runAction($actionName);
    } else {
        die("Ошибка! Нет контроллера");
    }
} catch (PDOException $exception) {
    var_dump($exception->getMessage());
} catch (Exception $exception) {
    var_dump($exception->getMessage());
}
