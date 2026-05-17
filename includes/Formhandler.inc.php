<?php
require_once __DIR__ . '/../classes/Contact.contr.php';

$contactController = new ContactController();

$contactController->handleRequest();

$formSent = $contactController->formSent;
$formError = $contactController->formError;

$name = $contactController->name;
$phone = $contactController->phone;
$email = $contactController->email;
$message = $contactController->message;
