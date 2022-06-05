<?php
 class Database {
    protected static $_instance;

    private function __construct($hostname, $username, $password, $dbname) {
        $this->conn = mysqli_connect($hostname, $username, $password, $dbname);
    }

    public static function getInstance($hostname, $username, $password, $dbname) {
        if (self::$_instance === null) {
            self::$_instance = new self($hostname, $username, $password, $dbname);
        }
 
        return self::$_instance;
    }

    public function select_query($sql_query){
        $answer = mysqli_query($this->conn, $sql_query);

        if (!$answer)
            return false;

        $result = mysqli_fetch_all($answer, MYSQLI_ASSOC);
        return $result;
    }

    public function query($sql_query){
        $answer = mysqli_query($this->conn, $sql_query);

        return $answer;
    }
}


//$a = Database::getInstance($hostname, $username, $password, $dbname);

?>