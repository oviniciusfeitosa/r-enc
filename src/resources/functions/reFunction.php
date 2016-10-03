<?php
/**
 * @author Vinícius Feitosa da Silva <viniciusfesil@gmail.com>
 * Date: 03/10/2016
 * Time: 18:50
 */

use Component\rightEncoding\RightEncoding;

if (!function_exists('rEnc')) {
    function rEnc($inputString, $inputEncoding = 'UTF-8, ISO-8859-1', $outputEncoding = 'UTF-8') {
        $objRightEncoding = new \Component\rightEncoding\RightEncoding($inputString, $inputEncoding, $outputEncoding);
        return $objRightEncoding->convert();
    }
}