<?php
class Network{
    protected $_connection;
    protected $_query;
    protected $_session;
    protected $_query_string;

    public $data;

    /**
     * @param $target_ip
     * @param $target_db
     * @param $user
     * @param string $password
     * @return $this
     */
    public function create_Connection($target_ip, $target_db, $user, $password=""){
        try {
            $this->_connection = new PDO("mysql:host=$target_ip;dbname=$target_db", $user, $password);
            $this->_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully";
        }
        catch (PDOException $exception){
            echo "Connection failed" . $exception->getMessage();
            $this->_connection = null;
        }

        return $this;
    }

    /**
     * @param $table
     * @param string $columns
     * @return $this
     */
    public function select_From($table, $columns="*"){
        try {
            $this->_query = $this->_connection->prepare("SELECT $columns FROM $table");
            $this->_query->execute();

            $this->data = $this->_query->setFetchMode(PDO::FETCH_ASSOC);
        }
        catch (PDOException $exception){
            echo "Error: " . $exception->getMessage();
        }
        return $this;
    }

    /**
     *
     * @return this;
     */
    public function close_Connection(){
        if ($this->_connection != null){
            $this->_connection = null;
        }
        return this;
    }

}
?>
