<?php

/**
 * @author Vinícius Feitosa da Silva <viniciusfesil@gmail.com>
 * Date: 03/10/2016
 * Time: 18:50
 */

namespace Component\rightEncoding;

class RightEncoding {
    
    private $inputString;
    private $inputEncoding;
    private $outputEncoding;
    
    public function __construct($inputString, $inputEncoding, $outputEncoding) {
        $this->inputString = $inputString;
        $this->inputEncoding = $inputEncoding;
        $this->outputEncoding = $outputEncoding;   
    }
    
    public function getOldEncoding() {
        return mb_detect_encoding($this->inputString, $this->inputEncoding);
    }
    
    public function convert() { 
        try {
            $oldEncoding = $this->getOldEncoding();
            return iconv($oldEncoding, $this->outputEncoding, $this->inputString);
        } catch (Exception $objException) {
            // @todo : implement here!
        }
    }
}