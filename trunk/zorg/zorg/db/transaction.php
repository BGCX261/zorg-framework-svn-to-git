<?php
class Zorg_Db_Transaction {
    private $_connection;

    public function __construct(Zorg_Db_Connection $connection) {
        $this->_connection = $connection;
    }

    public function begin(){
        if ($this->_connection->isActive()){
            $this->_connection->getPdo()->beginTransaction();
        } else {
            throw new Zorg_Db_Exception('Connection is inactive and cannot begin transaction');
        }
    }

    public function commit(){
        if ($this->_connection->isActive()){
            $this->_connection->getPdo()->commit();
        } else {
            throw new Zorg_Db_Exception('Connection is inactive and cannot commit transaction');
        }
    }

    public function rollback(){
        if ($this->_connection->isActive()){
            $this->_connection->getPdo()->rollBack();
        } else {
            throw new Zorg_Db_Exception('Connection is inactive and cannot rollback transaction');
        }
    }

    public function getConnection() {
        return $this->_connection;
    }

    public function setConnection(Zorg_Db_Connection $_connection) {
        $this->_connection = $_connection;
    }



}
?>
