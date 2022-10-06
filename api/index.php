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
include('core/pda/PDA.php');

//user session,token or cookiee control
//include("userAuthentication/checkUserAuthentication.php");
$response=new Response();
$pda=new PDA("mysql","localhost","database","database_user","password");
$pda->connect();
if($pda->getStatus()){
    $api=get("api");
    if(!$api) $api=post("api");
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
}
else{
  $response->success="false";
  $response->errors[0]="Database Connection Error";
  echo json_encode($response);
}
?>
