<?php
class Nav{
    public $navElements = [];
    public $navR = "";


    public function __construct($element1 = "", $element2 = "", $element3 = "", $element4 = "", $class = "nav") {
        $part = "<div  class='$class''><nav><ul>";
        for($i = 0; $i <= count(func_get_args()); $i++){
            if($i == 1)      $part .= "<li><a href='".join('', explode(' ', mb_strtolower($element1))).".php'>$element1</a></li>";
            else if($i == 2) $part .= "<li><a href='".join('', explode(' ', mb_strtolower($element2))).".php'>$element2</a></li>";
            else if($i == 3) $part .= "<li><a href='".join('', explode(' ', mb_strtolower($element3))).".php'>$element3</a></li>";
            else if($i == 4) $part .= "<li><a href='".join('', explode(' ', mb_strtolower($element4))).".php'>$element4</a></li>";
            else if(count(func_get_args()) <= 0) break;

        }
        $part .= "</ul></nav></div><br>";
        $this->navR = $part;
    }

    public function createNav() :string {
        $nav = "";
        $part = "<div class='nav'><nav><ul>";
        foreach($this->navElements as $element){
            $part .= "<li><a href='$element.php'>$element</a></li>";
        }

        $part .= "</ul></nav></div>";
        $nav = $part;
        return $nav;
    }

    public function addNewElements($element1, $element2 = "", $element3 = "", $element4 = "")
    {
        $href = mb_strtolower($element1);
        $string = "";
        if($element2 == "" && $element3 == "" && $element4 == "")
        {
            $pos = strrpos($this->navR, "</ul>");
            $elements = "<li><a href='$href.php'>$element1</a></li>";

            $string .= substr_replace($this->navR, $elements, $pos, 0);
            $this->navR = $string;
        }
        elseif($element3 == "" && $element4 == "")
        {

            $pos = strrpos($this->navR, "</ul>");
            $elements = "<li><a href='".mb_strtolower($element1).".php'>$element1</a></li>"
                       ."<li><a href='$element2.php'>".mb_strtolower($element2)."</a></li>";
            $string .= substr_replace($this->navR,$elements, $pos, 0);
            $this->navR = $string;
        }

        elseif ($element4 == "")
        {
            array_push($this->navElements, $element1, $element2, $element3);
        }

        elseif (!($element2 == "") && !($element3 == "") &&  !($element4 == ""))
        {
            array_push($this->navElements, $element1, $element2, $element3, $element4);
        }
  }
}
