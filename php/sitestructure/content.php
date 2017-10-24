<?php
class Content{
    public $div;
    public $content;

    public function createDiv($name = ""){
        $div = "<div class='$name'>$content</div>";
        return $div;
    }

    public function createContent($isText, $text = ""){
        if ($isText == true){
            $content = "<p>$text</p>";
        }
        return $content;
    }
}

?>
