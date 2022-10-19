<?php
/*********************************
Setari path
*********************************/
$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$config = array();

// Base URL
//
// Also update the RewriteBase at the bottom of the htaccess file if the site lives in a subdirectory
$config['base_url'] = '/';


// Server URL
//
$config['server_url'] = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];


// Menu links
//
$config['menu'] = array(
    'Acasa' => '/', 
    'Servicii' => 'servicii', 
    // 'Clienti' => 'clienti', 
    'Despre noi' => 'despre-noi', 
    'Contact' => 'contact'
);

// Services links
//
$config['services'] = array(
    'Termoprotectie cu vopseluri termospumante-intumescente' => '/termoprotectie-cu-vopsea-termospumanta', 
    'Protectie antifoc tubulatura de ventilatie' => '/protectie-antifoc-tubulatura-ventilatie', 
    'Protectii anticorozive' => '/protectie-anticoroziva', 
    'Ignifugare lemn' => '/ignifugare-lemn',
    'Termoprotectie cu mortar antifoc' => '/termoprotectie-cu-mortar-antifoc',
    'Sablare industriala' => '/sablare-industriala',
    'Etansare goluri de trecere' => '/etansare-goluri-de-trecere',
    'Protectie antifoc cu vata minerala' => '/protectie-antifoc-cu-vata-minerala'
);


// Google Analytics Web Property ID
//
// Ex. UA-XXXXX-X
$config['google_analytics_web_property_id'] = '';


?>