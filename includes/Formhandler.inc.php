<?php
require_once __DIR__ . '/Autoloader.inc.php';

$contactController = new ContactController();

$contactController->handleRequest();

$formSent = $contactController->formSent;
$formError = $contactController->formError;

$name = $contactController->name;
$phone = $contactController->phone;
$email = $contactController->email;
$message = $contactController->message;
