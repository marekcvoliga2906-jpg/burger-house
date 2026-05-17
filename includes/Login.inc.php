<?php
if (isset($_POST["submit"])) {
    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];

    require_once __DIR__ . '/Autoloader.inc.php';
    $login = new Logincontr($uid, $pwd);
    $login->loginUser();
    header("location: ../index.php?error=none");
    exit();
}
