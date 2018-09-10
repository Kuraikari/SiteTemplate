<?php



/**
 * CSSGenerator is class that inherits from the Generator model class
 *
 * CSSGenerator is a class that's used when CSS should be generated and not
 * manually edited. It helps to create the CSS nice and clean in OOP and API Fluency
 *
 * @package CSSGenerator
 * @author Zian Wermelinger
 * @version $Revision: 0.4 $
 * @access public
 * @see http://githb.com/kurailari/SiteTemplate
 */
class CSSGenerator extends Generator
{
    public $blocks;
    public $filePath;
    public $fileName;

    /**
    * constructor
    *
    * @return CSSGenerator new Instance
    * @access public
    */
    function __construct()
    {
        $blocks = [];
    }

    /**
    * factory to initialize the filePath and fileName
    *
    * @param string $path the path of the file
    * @param string $name the name of the file
    * @return CSSGenerator $this instance
    * @access public
    */
    public function factory($path = "", $name = "") {
        $this->filePath = $path;
        $this->fileName = $name;
        return $this;
    }

    /**
    * to add a new block to the css
    *
    * @param string $name the name of the file
    * @param array $properties properties for the current block
    * @return CSSGenerator $this instance
    * @access public
    */
    public function addBlock($name = "body", $properties = []) {
        foreach ($properties as $property => $value) {
            $blocks[(string)$name] = [(string)$property => (string)$value];
        }
        return $this;
    }

    /**
    * generates the css file and appends the string.
    * Side note: It won't erase the content if the file already exists.
    *
    * @return CSSGenerator $this instance
    * @access public
    */
    public function generate()
    {
        $string = '';

        foreach ($blocks as $key => $properties) {
            $string .= "$key { \n";
                foreach ($properties as $property => $value) {
                    $string .= "$property: $value; \n";
                }
            $string .= "} \n"
        }
        $string .= "\n";

        file_put_contents(dirname(__FILE__) . $this->filePath . '/' . $this->fileName, $string);
        return $this;
    }
}

 ?>
