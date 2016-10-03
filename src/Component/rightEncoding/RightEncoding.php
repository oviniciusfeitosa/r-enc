<?php

/**
 * @author Vinícius Feitosa da Silva <viniciusfesil@gmail.com>
 * Date: 03/10/2016
 * Time: 18:50
 */

namespace Component\rightEncoding;

class RightEncoding {
    
    public function __construct($inputString, $inputEncoding, $outputEncoding) {
        $oldEncoding = $this->getOldEncoding($inputString, $inputEncoding);
        return $this->convert($inputString, $oldEncoding, $outputEncoding);
    }
    
    private function getOldEncoding($inputString, $inputEncoding) {
        return mb_detect_encoding($inputString, $inputEncoding);
    }
    
    private function convert($inputString, $oldEncoding, $outputEncoding) { 
        try {
            return iconv($oldEncoding, $outputEncoding, $inputString);
        } catch (Exception $objException) {
            // @todo : implement here!
        }
    }
}