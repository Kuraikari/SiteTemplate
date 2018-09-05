<?php
/**
 * Created by PhpStorm.
 * User: zwermi
 * Date: 01.07.2018
 * Time: 16:22
 */

class Connection{

    private $input = [];
    private $data = [];
    protected $network;

    public $isValidated;

    public function __construct($network)
    {
        $this->network = $network;
    }

    /**
     * @param array $columns
     * @return $this
     */
    public function validateInput($columns = []){
        $counter = 0;
        foreach ($columns as $column) {
            if (empty($columns[$counter])) break;
            if (!empty($this->network->data[$column])) {
                if (!empty($this->input)) {
                    if ($this->input[$columns[$counter]] === $this->network->data[$column] && $this->input[$columns[$counter+1]] === $this->network->data[$columns[$counter+1]]) {
                        if (($counter+2) === sizeof($columns)) {
                            $this->isValidated = true;
                            $this->data = $this->network->data;
                            return $this;
                        }
                    }
                }
            }
            $counter += 2;
        }
    }

/* Debugging is fun kekeke */
    public function getData($column = "username"){
        $variable = $this->input;
        echo "<div class='varDump'><pre>";
        var_dump( $variable[$column]);

        if ($this->isValidated){
            echo "is validated!";
        } else {
            echo "is NOT validated!";
        }

        echo "</div></pre>";
        return $this;
    }

/* Getters and Setters */

    /**
     * @param mixed $input
     * @return
     */
    public function setInput($input)
    {
        $this->input = $input;
        return $this;
    }

    /**
     * @param mixed $data
     * @return
     */
    public function setData($data)
    {
        $this->data = $data;
        return $this;
    }
    /**
     * @return mixed
     */
    public function _getData()
    {
        return $this->data;
    }
    /**
     * @return mixed
     */
    public function _getInput()
    {
        return $this->input;
    }

}