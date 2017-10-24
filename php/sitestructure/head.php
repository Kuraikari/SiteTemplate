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
      $head = "<head>"+$css->createCSSWithoutType() . $meta->createMeta() ."</head>";
      return $head;
    }
}

//Class for the CSS #ADD-FEATURES-LATER
class CSS{
    public $path;
    public $name;
    public $type;

    public  $css;

    public function __construct(string $path, string $name, string $type){
        $this->path = $path;
        $this->name = $name;
        $this->type = $type;
    }

    public function createCSSWithoutType(){
        return "<link rel='stylesheet' href='$path/$name'>";
    }

    public function createCSSWithType(){
        return "<link rel='stylesheet' type='$type' href='$path/$name'>";
    }

}

//Class for the meta part of head.
class Meta{
    public $author;
    public $charset;
    public $description;
    public $keywords = array();

    public $meta = array();

    public function __construct(string $author, string $description, string $charset){
        $this->author = $author;
        $this->description = $description;
        $this->charset = $charset;
    }

    //Creates the meta part of the head.
    public function createMeta(){
        $dataset = "";
        $this->meta[0] = "<meta charset='$charset'>";
        $this->meta[1] = "<meta name='author' content='$author' >";
        $this->meta[2] = "<meta name='description' content='$description' >";
        $this->meta[3] = "<meta name='keywords' content='$keywords' >";
        $this->meta[4] = createViewport();

        foreach ($this->meta as $data) {
          $dataset .= $data;
        }

        return $dataset;
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
