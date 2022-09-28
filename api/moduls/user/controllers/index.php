<?
switch ($action) {
  case "addUser":
    include("moduls/$modul/controllers/addUser.php");
  break;
  case "getUser":
    include("moduls/$modul/controllers/getUser.php");
  break;
  case "getUsers":
    include("moduls/$modul/controllers/getUsers.php");
  break;

}
?>
