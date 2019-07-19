<?php
//global.inc.php
session_start();
$l = $_SESSION['lang'];
//print_r($l);
require_once 'classes/DB.class.php';
require_once 'blocks/lang.php';
require 'lang/'.$l.'.php';


//connect to the database
$db = new DB();
$db->connect();
//print_r($lang);
function lang($word){
    $l = $_SESSION['lang'];
    require 'lang/'.$l.'.php';
    $translate = $lang[$word];
    if(trim($translate) == '')$translate = $word;
    return $translate;
}
