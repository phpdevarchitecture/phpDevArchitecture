<?
switch ($action) {
    case "addUser":
    include("moduls/$modul/controllers/addUser.php");
    include("moduls/$modul/controllers/getUser.php");
    include("moduls/$modul/controllers/getUsers.php");
      break;
}
?>
