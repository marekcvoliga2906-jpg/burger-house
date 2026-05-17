<?php
class Dbh
{
    protected function connect()
    {
        try {
            $username = "root";
            $password = "";
            $dbh = new PDO("mysql:host=localhost;dbname=burger_house_dbs", $username, $password);
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $dbh;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage() . "<br>";
            die();
        }
    }
}
