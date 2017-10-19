<?php

public class Head{
    public $css;
    public $meta;
    public $script;

    public $head;

    public __construct(CSS $css, Meta $meta, string $script){
        $this->css = $css;
        $this->meta = $meta;
        $this->script = $script;
    }

    public function createHead(){
      $head = "<head>"+$css->css+$meta->meta+"</head>";
    }
}

//Class for the CSS #ADD-FEATURES-LATER
public class CSS{
    public $path;
    public $name;
    public $type;

    public  $css;

    public __construct(string $path, string $name, string $type){
        $this->path = $path;
        $this->name = $name;
        $this->type = $type;
    }

    public function createCSSWithoutType(){
        $css = "<link rel='stylesheet' href='"$path+"/"+$name"'>";
    }

    public function createCSSWithType(){
        $css = "<link rel='stylesheet' type='"$type"' href='"$path+"/"+$name"'>";
    }

}

//Class for the meta part of head.
public class Meta{
    public $author;
    public $charset;
    public $description;
    public $keywords[] = array();

    public $meta[] = array();

    public __construct(string $author, string $description, string $charset){
        $this->author = $author;
        $this->description = $description;
        $this->charset = $charset;
    }

    //Creates the meta part of the head.
    public function createMeta(){
        $meta[0] = "<meta charset='"$charset"' >";
        $meta[1] = "<meta name='author' content='"$author"' >";
        $meta[2] = "<meta name='description' content='"$description"' >";
        $meta[3] = "<meta name='keywords' content='"$keywords"' >";
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

public class Script{
    public $type;
}

?>
