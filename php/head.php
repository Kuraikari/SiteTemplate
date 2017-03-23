<?php

public class Head(){
    public $css;
    public $meta = array("Author", "Version","Charset");
    public $script;

    
    public __construct(){
        
    }
}

public class CSS(){
    public $path;
    public $name;
    public $type;
    
    public css;
    
    public __construct($path, $name, $type){
        $this->path = $path;
        $this->name = $name;
        $this->type = $type;
    }
    
    public function createCSSWithoutType(){
        css = "<link rel='stylesheet' href='"$path+"/"+$name"'>";
    }
    
    public function createCSSWithType(){
        css = "<link rel='stylesheet' type='"$type"' href='"$path+"/"+$name"'>";
    }
    
}

public class Meta(){
    
}

public class Script(){
    
}

?>
