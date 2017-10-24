<?php

class Head {
    public $css;
    public $meta;
    public $script;

    public function __construct(CSS $css, Meta $meta, $script = " "){
        $this->css = $css;
        $this->meta = $meta;
        $this->script = $script;
    }

    public function createHead(){
      $head = "<head>" . $this->css->createCSSWithType() . $this->meta->createMeta() ."</head>";
      return $head;
    }
}

//Class for the CSS #ADD-FEATURES-LATER
class CSS{
    public $path;
    public $name;
    public $type;

    public function __construct(string $path, string $name, string $type = ""){
        $this->path = $path;
        $this->name = $name;
        $this->type = $type;
    }

    public function createCSSWithoutType(){
        return "<link rel='stylesheet' href='$path/$name'>";
    }

    public function createCSSWithType(){
        return "<link rel='stylesheet' type='". $this->type . "' href='" . $this->path . "/" . $this->name . "'>";
    }

}

//Class for the meta part of head.
class Meta{
    public $author;
    public $charset;
    public $description;
    public $keywords = array();

    public $meta;

    public function __construct(string $author, string $description, string $charset){
        $this->author = $author;
        $this->description = $description;
        $this->charset = $charset;
    }

    //Creates the meta part of the head.
    public function createMeta(){
        $this->meta .= "<meta charset='$this->charset'>";
        $this->meta .= "<meta name='author' content='$this->author'>";
        $this->meta .= "<meta name='description' content='$this->description'>";
        $this->meta .= "<meta name='keywords' content='$this->keywords'>";
        $this->meta .= $this->createViewport();

        return $this->meta;
    }

    //Creates the viewport by default.
    public function createViewport(){
        $viewport = '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
        return $viewport;
    }

    //Function to let user add keywords, separated with commas
    public function addKeywords($words){
        $arrWords = explode(',', $words);

        foreach($arrWords as $word){
            array_push($keywords, $word);
        }
    }
}

class Script{
    public $type;
}

?>
