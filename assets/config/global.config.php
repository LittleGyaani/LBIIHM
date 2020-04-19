<?php

//Include Obfuscate php Library
__DIR__. '/assets/tools/obfuscate/class.obfuscate.php';


//Global Declarations
$baseURI = "";
$apiEndpoint = "";
$siteStatus = "";//Production or Development
$protocol = "";
$siteHost = "";
$titleConstant = "";

$protocol = strtolower(substr($_SERVER["SERVER_PROTOCOL"], 0, 5)) == 'https' ? 'https' : 'http';

$protocol = isset($_SERVER["HTTPS"]) ? 'https://' : 'http://';

$siteHost = $_SERVER["HTTP_HOST"];

$apiEndpoint = "/api/web/v1/requests/";

$siteStatus = "DEVELOPMENT";//Current status of the Project

if($siteStatus === 'DEVELOPMENT')

    if($siteHost === 'localhost')
        $baseURI = $protocol . 'localhost/LBIIHM'; //Local Demo Website
        
    else
        $baseURI = $protocol . 'mirrordesign.tech/demo/lbiihm-new'; //Our Demo Website


else
    $baseURI = $protocol . 'lbiihm.com'; //Live Production Website

//Global Values
$baseURI = $baseURI;
$titleConstant= "Top Hospitality and Hotel Management Institute in India | LBIIHM, Delhi";