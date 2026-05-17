<?php
if (isset($_POST["submit"])) {
    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdRepeat"];
    $email = $_POST["email"];

    require_once __DIR__ . '/Autoloader.inc.php';
    $signup = new SignupContr($uid, $pwd, $pwdRepeat, $email);
    $signup->signupUser();
    header("location: ../signup.php?signup=success");
    exit();
}
