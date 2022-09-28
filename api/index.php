<?
session_start();
include("systemfiles/phpfunctions.php");
include("systemfiles/connect.php");
include("systemfiles/upload.php");
include("systemfiles/imageload.php");
include('core/entity/entityItem.php');
include('core/UserEntity/userType.php');
include('core/UserEntity/users.php');

//user session,token or cookiee control
include("userAuthentication/checkUserAuthentication.php");


$api=get("api");
$modul="";
$action="";
$apipart=explode("_",$api);
$modul=$apipart[0];
$action=$apipart[1];
$moduleRouting=true;
//modul folder and file structures outomatic construction
if($modul=="generateModul") include("core/moduleGenerator/generate.php");
if($moduleRouting){
  include("moduls/$modul/controllers/index.php");
}
?>
