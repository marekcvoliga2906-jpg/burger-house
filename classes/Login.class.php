<?php
class Login extends Dbh
{
    protected function getUser($login, $pwd)
    {
        $stmt = $this->connect()->prepare("SELECT * FROM users WHERE users_uid = ? OR users_email = ?;");

        if (!$stmt->execute(array($login, $login))) {
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }

        $userData = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if (count($userData) == 0) {
            $stmt = null;
            header("location: ../index.php?error=wronglogin");
            exit();
        }

        $checkPwd = password_verify($pwd, $userData[0]["users_pwd"]);

        if ($checkPwd == false) {
            $stmt = null;
            header("location: ../index.php?error=wrongpassword");
            exit();
        }

        session_start();
        $_SESSION["userid"] = $userData[0]["users_id"];
        $_SESSION["useruid"] = $userData[0]["users_uid"];

        $stmt = null;
    }
}
