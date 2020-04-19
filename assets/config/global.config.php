<?php

//Include Obfuscate php Library
__DIR__. '/assets/tools/obfuscate/class.obfuscate.php';


//Global Declarations
$baseURI = "";//Base URL of APP
$apiEndpoint = "";//API Call handlers
$siteStatus = "";//Production or Development
$protocol = "";///HTTP or HTTPS
$siteHost = "";//localhost or live
$titleConstant = "";//Title Constant

$protocol = strtolower(substr($_SERVER["SERVER_PROTOCOL"], 0, 5)) == 'https' ? 'https' : 'http';

$protocol = isset($_SERVER["HTTPS"]) ? 'https://' : 'http://';//Set the Protocol

$siteHost = $_SERVER["HTTP_HOST"];//Find the Current Host

$apiEndpoint = "/api/web/v1/requests/";//All API requests are passed here

$siteStatus = "DEVELOPMENT";//Current status of the Project

if($siteStatus === 'DEVELOPMENT')//If Site is still under development

    if($siteHost === 'localhost')//If the Site Host is localhost
        $baseURI = $protocol . 'localhost/LBIIHM'; //Local Demo Website
        
    else
        $baseURI = $protocol . 'mirrordesign.tech/demo/lbiihm-new'; //Our Demo Website


else
    $baseURI = $protocol . 'lbiihm.com'; //Live Production Website

//Global Values
$baseURI = $baseURI;//Get the BASE URL from Variable
$titleConstant= "Top Hospitality and Hotel Management Institute in India | LBIIHM, Delhi";//Global title constant