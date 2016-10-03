<?php

require("../vendor/autoload.php");

$iso88591 = file_get_contents("./files/text_charset-ISO-8859-1.txt");
$utf8 = file_get_contents("./files/text_charset-UTF-8.txt");
$win1252 = file_get_contents("./files/text_charset-WIN-CP-1252.txt");

$iso88591_converted = rEnc($iso88591);
$utf8_converted = rEnc($utf8);
$win1252_converted = rEnc($win1252);

$output = <<<OUTPUT
        
<h1>[ Begin - Conversion ]</h1>

<h2>Without RightEncoding Conversion</h2>

{$iso88591}

{$utf8}

{$win1252}

<h2>With RightEncoding Conversion </h2>

{$iso88591_converted}

{$utf8_converted}

{$win1252_converted}

OUTPUT;

echo output;