<?php



class Database {
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $database = "users";

    protected function connect(): PDO
    {
        $dsn = "mysql:host=" . $this->host . ";dbname=" . $this->database;
        $dbObj = new PDO($dsn, $this->user, $this->password);
        $dbObj->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);

        return $dbObj;
    }
}
