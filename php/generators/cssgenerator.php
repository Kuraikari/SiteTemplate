<?php
include_once ('generator.php');

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
class CSSGenerator extends CC_Generator
{
    public $blocks;
    public $imports;
    public $filePath;
    public $fileName;

    /**
     * constructor
     *
     * @access public
     */
    function __construct()
    {
        $this->blocks = [];
        $this->imports = [];
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
     * @param string $path
     * @param string $file
     * @return $this
     */
    public function addImport($path = "", $file = ""){
        $this->imports[] = $path . '/' . $file;
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
        $this->blocks[(string)$name] = $properties;
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
        foreach ($this->imports as $import) {
            $string .= "@import url('$import');";
        }

        foreach ($this->blocks as $key => $properties) {
            $string .= "$key {" . "\r\n";
                foreach ($properties as $property => $value) {
                    $string .= "$property: $value;" . "\r\n";
                }
            $string .= "}";
        }
        $string .=  "\r\n";

        chown($this->filePath, 'root');
        chmod($this->filePath, 0750);
        file_put_contents($this->filePath . '/' . $this->fileName, $string);
        return $this;
    }
}

 ?>
