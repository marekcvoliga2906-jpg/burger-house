<?php
require_once __DIR__ . '/Autoloader.inc.php';
SessionManager::destroy();
header("location: ../index.php");
exit();
