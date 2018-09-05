<?php

class Network
{
    protected $_connection;
    protected $_query;
    protected $_session;
    protected $_query_string;

    public $data;

    public function __construct()
    {
        try {
            $this->_connection = new PDO("", "", "");
        } catch (PDOException $exception) {
            // DO nothing. It should be like this
        }
        $this->_connection = null;
    }

    /**
     * @param $target_ip
     * @param $target_db
     * @param $user
     * @param string $password
     * @return $this
     */
    public function create_Connection($target_ip, $target_db, $user, $password = "")
    {
        try {
            $this->_connection = new PDO("mysql:host=$target_ip;dbname=$target_db", $user, $password);
            $this->_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "Connected successfully";
        } catch (PDOException $exception) {
            echo "Connection failed" . $exception->getMessage();
            $this->_connection = null;
        }

        return $this;
    }

    /**
     * @param $table
     * @param string $columns
     * @param string $where
     * @param string $union
     * @return $this
     */
    public function selectFrom($table, $columns = "*", $where = "id >= 1", $union = "")
    {
        try {
            $this->_query = $this->_connection->prepare("SELECT $columns FROM `$table` WHERE $where $union");
            $this->_query->execute();
            $this->_query->setFetchMode(PDO::FETCH_ASSOC);

            $this->data = $this->_query->fetch();
        } catch (PDOException $exception) {
            echo "Error: " . $exception->getMessage();
        }
        return $this;
    }

    /**
     * @param $table
     * @param string $columns
     * @param string $where
     * @return string
     */
    public function addUnionTo_Select($table, $columns = "*", $where = "true")
    {
        return "UNION SELECT $columns FROM $table WHERE $where";
    }

    /**
     * @param $table
     * @param $values
     * @param array $columns
     * @return $this
     */
    public function insertInto($table, $values, $columns = [])
    {
        $sql = "INSERT INTO $table (";
        if ($columns == []) {
            //
        } else {
            foreach ($columns as $column) {
                $sql = $columns[sizeof($columns) - 1] === $column ? $sql . "$column)" : $sql . "$column, ";
            }
        }

        $sql .= " VALUES ( ";
        if ($values != []) {
            foreach ($values as $value) {
                if (is_string($value))
                    $sql = $values[sizeof($values) - 1] === $value ? $sql . "'$value')" : $sql . "'$value', ";
                else
                    $sql = $values[sizeof($values) - 1] === $value ? $sql . "$value)" : $sql . "$value, ";
            }
        }

        try {
            $this->_query = $this->_connection->exec($sql);
        } catch (PDOException $exception) {

        }

        return $this;
    }

    /**
     * @return $this;
     */
    public function closeConnection()
    {
        if ($this->_connection != null) {
            $this->_connection = null;
        }
        return $this;
    }

    public function printQuery(){
       echo "<div style='position: sticky; left: 26.5%; top: 0;background: white; width: 800px; height: 70px; border: black solid 2px'>" . $this->_query->queryString . "</div>";
       return $this;
    }

    public function getData($column = "id"){
        $variable = $this->data;
        echo "<div class='varDump'><pre>";
        var_dump( $variable[$column]);
        echo "</div></pre>";
        return $this;
    }
}

?>
