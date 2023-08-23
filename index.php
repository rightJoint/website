<?php
global $mct;
$mct['start_time'] = microtime(true);

require_once 'application/core/model.php';
require_once 'application/core/view.php';
require_once 'application/core/controller.php';
require_once 'application/core/application.php';

session_start();

function throwErr($errType, $message)
{
    include "application/models/Alerts_model.php";
    include "application/controllers/Alerts_controller.php";
    $controller = new Alerts_controller();
    $controller->generateErr($errType, $message);
    exit;
}

Application::run();