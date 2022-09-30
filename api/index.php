<?
session_start();
error_reporting(1);
include("systemfiles/phpfunctions.php");
//include("systemfiles/connect.php");
include("systemfiles/upload.php");
include("systemfiles/imageload.php");
include('core/mapper/mapper.php');

include('core/response/response.php');
include('core/UserEntity/userType.php');
include('core/UserEntity/users.php');
include('core/entity/entityItem.php');

//user session,token or cookiee control
//include("userAuthentication/checkUserAuthentication.php");


$api=get("api");
$modul="";
$action="";
$apipart=explode("_",$api);
$modul=$apipart[0];
$action=$apipart[1];
$moduleRouting=true;
//modul folder and file structures outomatic construction
echo $modul;
if($modul=="generateModul") include("core/moduleGenerator/generate.php");
if($moduleRouting){
  include("moduls/$modul/controllers/index.php");
}
?>
