<?php

$path = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['SCRIPT_NAME']);



// Variables
$product_name = "Jumerix";
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