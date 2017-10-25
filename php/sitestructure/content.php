<?php
class Content
{
    public $content;

    public function __construct($isSingleDiv, $isText, $name = "", $text = ""){
        $this->content = $this->createDiv($isSingleDiv, $this->createContent($isText, $text), $name);
    }

    public function createDiv($isSingleDiv, $content, $name = ""){
      if ($isSingleDiv) {
        $div = "<div class='$name'>$this->content</div>";
      } else {
        $div = "<div class='$name'>$this->content";
      }

        return $div;
    }

    public function createContent($isText, $text = ""): string {
        if ($isText == true){
            $this->content .= "<p>$text</p>";
        }else{
          $this->content .= "$text";
        }
        return $this->content;
    }

    public function appendContent($isNewDiv, $isText, $text = "", $name = "", $endDiv = false){
      if (!$isNewDiv)
      {
        if (!$endDiv)
        {
          $this->content = $this->createContent($isText, $text);
        } else {
          $this->content = $this->createContent($isText, $text);
          $this->content .= "</div>";
        }

      } else {
        $this->content = $this->createDiv(true, $this->createContent($isText, $text), $name);
      }
    }
}

?>
