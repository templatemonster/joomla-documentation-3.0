<?php

$path = dirname($_SERVER['PHP_SELF']);

//$path = 111;

// Variables
$product_name = "Joomla 3.x";
$product_desc = "Documentation";
$doc_title = $product_name . " " . $product_desc;

$lang = 'en';
if (isset($_GET['lang'])) {
    $lang = $_GET['lang'];
}

$section_param = 'introduction';
if (isset($_GET['section'])) {
    $section_param = $_GET['section'];
}
if (isset($_GET['utm_campaign'])) {
    header('Location: index.php');
}