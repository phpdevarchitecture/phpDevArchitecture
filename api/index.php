<?
session_start();
include("systemfiles/phpfunctions.php");
include("systemfiles/connect.php");
include("systemfiles/upload.php");
include("systemfiles/imageload.php");
include("systemfiles/UserEntity/users.php");

$api=get("api");

$modul="";
$action="";
$apipart=explode("_",$api);
$modul=$apipart[0];
$action=$apipart[1];

include("moduls/$modul/controllers/index.php");
?>
