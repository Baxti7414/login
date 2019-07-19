<?php
session_start();
if($_GET['lang']){
    switch($_GET['lang']){
        case "ru": $_SESSION['lang'] = "ru"; break;
        case "uz": $_SESSION['lang'] = "uz"; break;
        default: $_SESSION['lang'] = "uz";
    }
}
if(isset($_SESSION['lang'])){
    $l = $_SESSION['lang'];
}else{
    $_SESSION['lang'] = "uz";
    $l = "uz";
}
$path = $_SERVER['PHP_SELF'];
if($path == '/blocks/lang.php'){
    if(isset($_GET['page']) && $_GET['page'] == 1){
        header( 'Location: /', true, 307 );
        exit();
    }
    header( 'Location: /', true, 307 );
}

?>