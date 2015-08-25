<?php
class Zorg_Db_Connection {
    public $dsn;
    public $username;
    public $password;
    public $charset;
    public $prefix;

    private $_pdo;

    public function __construct($dsn = NULL, $username = NULL, $password = NULL) {
        $this->dsn = $dsn;
        $this->username = $username;
        $this->password = $password;
    }

    public function open() {
        if ($this->_pdo === NULL) {
            if (!isset($this->dsn))
                throw new Zorg_Db_Exception('Data Set Name (dsn) is not defined');
            try {
                $this->_pdo = new PDO($this->dsn, $this->username, $this->password);
            } catch (PDOException $ex) {
                throw new Zorg_Db_Exception('Cannot open the DB connection : '.$ex->getMessage());
            }
        }
    }

    public function close() {
        $this->_pdo = NULL;
    }

    public function getPdo() {
        return $this->_pdo;
    }

    public function isActive() {
        return ($this->_pdo === NULL);
    }

}
?>
