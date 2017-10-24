<?php
class Content{
    public $div;
    public $content;

    public function createDiv(string $content, $name = ""){
        $div = "<div class='$name'>$this->content</div>";
        return $div;
    }

    public function createContent($isText, $text = ""): string {
        if ($isText == true){
            $this->content = "<p>$text</p>";
        }
        return $this->content;
    }
}

?>
