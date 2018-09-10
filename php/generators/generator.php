<?php

/**
 *
 */
class Generator
{
    public static $id;
    public $type;
    public $name;

    function __construct()
    {
        $this::$id += 1;
    }

    public function getType() {
        return $this->type;
    }

    public function getName() {
        return $this->name;
    }

    public function setType($type) {
        $this->type = $type;
        return $this;
    }

    public function setName($name) {
        $this->name = $name;
        return $this;
    }
}
?>
