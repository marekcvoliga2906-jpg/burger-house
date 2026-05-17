<?php
if (isset($_POST["submit"])) {
    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdRepeat"];
    $email = $_POST["email"];

    require_once __DIR__ . '/Autoloader.inc.php';
    $signup = new Signupcontr($uid, $pwd, $pwdRepeat, $email);
    $signup->signupUser();
    header("location: ../index.php?error=none");
    exit();
}
