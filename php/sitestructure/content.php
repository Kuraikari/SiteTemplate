<?php
class Content
{
    public $content;

    /**
     * Content constructor.
     * @param $isSingleDiv
     * @param $isText
     * @param string $name
     * @param string $text
     */
    public function __construct($isSingleDiv, $isText, $name = "", $text = ""){
        $this->createDiv($isSingleDiv, $this->createContent($isText, $text), $name);
    }

    /**
     * @param $isSingleDiv
     * @param $content
     * @param string $name
     */
    public function createDiv($isSingleDiv, $content, $name = ""){
      if ($isSingleDiv) {
        $div = "<div class='$name'>$content</div>";
      } else {
        $div = "<div class='$name'>$content";
      }
        $this->content .= $div;
    }

    /**
     * @param $isText
     * @param string $text
     */
    public function createContent($isText, $text = "") {
        $content = "";
        if ($isText == true){
            $content .= "<p>$text</p>";
        }else{
          $content .= "$text";
        }
        $this->content .= $content;
    }

    /**
     * @param $formName
     * @param $formAction
     * @param $formMethod
     * @param string $buttonValue
     * @param string $div
     */
    public function addFormAndButton($formName, $formAction, $formMethod, $buttonValue = "Submit", $div = ""){
        $divPos = "<div class='$div'>";
        $endPos = "</div><";
        $pos1 = strpos($this->content, $divPos);
        $pos2 = strpos($this->content, $endPos);

        $string = substr_replace($this->content, "<form action='$formAction' method='$formMethod' id='$formName'>", $pos1 + strlen($divPos),0);
        $pos3 = strpos($string, "</div>", 0);
        $string = substr_replace($string, "<br><input name='submit' class='button' type='submit' form='$formName' value='$buttonValue'></div>", ($pos3), 0);
        $string = substr_replace($string, "</form>", $pos2 + strlen($divPos), 0);




        $this->content = $string;
    }

    /**
     * @param $isNewDiv
     * @param $isText
     * @param string $text
     * @param string $name
     * @param bool $endDiv
     */
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

    /**
     * @param string $source
     * @param array $images
     * @param string $modalName
     */
    public function appendGallery($source = "", $images = [], $modalName = "myModal"){
        $imgGrid = "<div class='row'>";
        foreach($images as $img => $index){
            $imgGrid .= "<div class='column'><img src='$source/$index' onclick='openModal();currentSlide(" . intval($img+1) .")' class='hover-shadow'></div>";
        }
        $imgGrid .= "</div>";

        $imgModal = "<div id='$modalName' class='modal'><span class='close cursor' onclick='closeModal()'>&times;</span><div class='modal-content'>";
        foreach($images as $img => $index){
            $imgModal .= "<div class='mySlides'><div class='numberText'>" . intval($img+1) ." / ". count($images)
                        ."</div><img src='$source/$index' style='width:100%'></div>";
        }
        $imgModal .=     "<a class='prev' onclick='plusSlides(-1)'>&#10094;</a>
                          <a class='next' onclick='plusSlides(1)'>&#10095;</a><div class='caption-container'><p id='caption'></p></div>";
        foreach($images as $img => $index){
            $imgModal .= "<div class='column'><img class='demo' src='$source/$index' onclick='currentSlide(" . intval($img+1) .")' alt='$index'></div>";
        }
        $imgModal .= "</div></div>";
        $imgGrid .= $imgModal;
        $this->content .= $imgGrid;
    }

    /**
     * @param mixed $content
     * @return Content
     */
    public function setContent($content)
    {
        $this->content = $content;
        return $this;
    }
}

?>
