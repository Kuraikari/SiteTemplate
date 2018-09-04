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
     * @param $column
     * @return $this
     */
    public function validate_Input($column){
        if (!empty($this->network->data[$column])) {
            if (!empty($this->input)) {
                if ($this->input[$column] ===$this->network->data[$column]){
                    $this->isValidated = true;
                    return $this;
                }
            }
        }
    }

/* Debugging is fun kekeke */
    public function get_Data($column = "username"){
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
    public function getData()
    {
        return $this->data;
    }
    /**
     * @return mixed
     */
    public function getInput()
    {
        return $this->input;
    }

}