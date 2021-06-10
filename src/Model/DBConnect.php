<?php
namespace App\Model;
use PDO;

class DBConnect
{
    protected $dsn;
    protected $username;
    protected $password;
    public function __construct()
    {

        $this->dsn = "mysql:host =localhost;dbname=PHP_End_Test";
        $this->username = "root";
        $this->password = "123456@Abc";
    }
    public function connect()
    {
        try {
            return new \PDO($this->dsn, $this->username, $this->password);
        } catch (\Exception $e) {
            return $e->getMessage();
            exit();
        }
    }

}
