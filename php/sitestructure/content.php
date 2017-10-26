<?php
class Content
{
    public $content;

    public function __construct($isSingleDiv, $isText, $name = "", $text = ""){
        $this->createDiv($isSingleDiv, $this->createContent($isText, $text), $name);
    }

    public function createDiv($isSingleDiv, $content, $name = ""){
      if ($isSingleDiv) {
        $div = "<div class='$name'>$content</div>";
      } else {
        $div = "<div class='$name'>$content";
      }
        $this->content .= $div;
    }

    public function createContent($isText, $text = "") {
        $content = "";
        if ($isText == true){
            $content .= "<p>$text</p>";
        }else{
          $content .= "$text";
        }
        $this->content .= $content;
    }

    public function addFormAndButton($formName, $formAction, $formMethod, $buttonValue = "Submit", $div = ""){
        $divPos = "<div class='$div'>";
        $endPos = "</div><";
        $pos1 = strpos($this->content, $divPos);
        $pos2 = strpos($this->content, $endPos);

        $string = "";
        $string = substr_replace($this->content, "<form action='$formAction' method='$formMethod' id='$formName'>", $pos1 + strlen($divPos),0);
        $string = substr_replace($string, "</form>", $pos2 + strlen($divPos), 0);

        $pos3 = strpos($string, "</div>", 0);
        $string = substr_replace($string, "<br><button type='submit' form='$formName' value='$buttonValue'>$buttonValue</button></div>", ($pos3), 0);

        $this->content = $string;
    }

    public function appendContent($isNewDiv, $isText, $text = "", $name = "", $endDiv = false){
      if (!$isNewDiv)
      {
        if (!$endDiv)
        {
          $this->content .= $this->createContent($isText, $text);
        } else {
          $this->content .= $this->createContent($isText, $text);
          $this->content .= "</div>";
        }

      } else {
        $this->createDiv(true, $this->createContent($isText, $text), $name);
        $this->content .= "</div>";
      }
    }
}

?>
