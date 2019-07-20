<?php
require_once ('vendor/autoload.php');
use \Statickidz\GoogleTranslate;

$source = 'es';
$target = 'en';
$text = 'buenos días';

$trans = new GoogleTranslate();
$result = $trans->translate($source, $target, $text);

echo $result;
?>