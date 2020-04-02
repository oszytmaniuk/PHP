<?php
require_once 'HtmlString.php';
/*

$markup = new HtmlString();
$markup->setString('My strinnnng');
$bold = $markup->getBoldString();
$italic = $markup->getItalicString();
$both = $markup->getItalicBoldString();

echo $bold.'<br>';
echo $italic.'<br>';
echo $both;
*/
$markup = new HtmlString('My new string');
echo $markup->getBoldString();
?>