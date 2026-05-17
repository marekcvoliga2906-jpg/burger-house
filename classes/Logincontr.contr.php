<?php
class Logincontr extends Login
{
    private $uid;
    private $pwd;

    public function __construct($uid, $pwd)
    {
        $this->uid = $uid;
        $this->pwd = $pwd;
    }

    public function loginUser()
    {
        if ($this->emptyInput() == false) {
            header("location: ../login.php?error=emptyinput");
            exit();
        }
        $this->getUser($this->uid, $this->pwd);
    }

    public function emptyInput()
    {
        $result = false;
        if (empty($this->uid) || empty($this->pwd)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
}
