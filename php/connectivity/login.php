<?php
/**
 * Created by PhpStorm.
 * User: zwermi
 * Date: 01.07.2018
 * Time: 16:22
 */

require_once "../network.php";

class Connection{

    private $input;
    private $data;
    protected $network;

    public function __construct($network)
    {
        $this->network = $network;
    }

    public function validate_Input(){

    }

/* Getters and Setters */

    /**
     * @param mixed $input
     */
    public function setInput($input)
    {
        $this->input = $input;
    }
    /**
     * @param mixed $data
     */
    public function setData($data)
    {
        $this->data = $data;
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