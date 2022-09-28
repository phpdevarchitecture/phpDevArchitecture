<?
session_start();
include("systemfiles/phpfunctions.php");
include("systemfiles/connect.php");
include("systemfiles/upload.php");
include("systemfiles/imageload.php");
include('core/entity/entityItem.php');
include('core/UserEntity/userType.php');
include('core/UserEntity/users.php');
$api=get("api");

$modul="";
$action="";
$apipart=explode("_",$api);
$modul=$apipart[0];
$action=$apipart[1];
$moduleRouting=true;
//modul klasör ve dosyalarının otomatik oluşturulması
if($modul=="generateModul") include("core/moduleGenerator/generate.php");
if($moduleRouting){
  include("moduls/$modul/controllers/index.php");
}
?>
