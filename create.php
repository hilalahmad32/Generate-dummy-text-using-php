<?php

require './vendor/autoload.php';


$li = new joshtronic\LoremIpsum();

$word = $_POST["word"];
$word_tag = $_POST["word_tag"];
$sentence = $_POST["sentence"];
$sentence_tag = $_POST["sentence_tag"];
$para = $_POST["para"];
$para_tag = $_POST["para_tag"];
$output = "";

if ($word != "" || $word_tag != "") {
    $output .= "<h3>Words</h3>{$li->words($word,$word_tag)}";
}
if ($sentence != "" || $sentence_tag != "") {
    $output .= "<h3>Sentence</h3>{$li->sentences($sentence,$sentence_tag)}";
}
if ($para != "" || $para_tag != "") {
    $output .= "<h3>Paragraphs</h3>{$li->paragraphs($para,$para_tag)}";
}

echo $output;
