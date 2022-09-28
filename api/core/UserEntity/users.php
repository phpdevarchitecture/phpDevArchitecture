<?
class Users {
  public $admin=new UserType(true,true,true,true);
  public $editor=new UserType(true,true,true,true);
  public $moderator=new UserType(true,true,true,true);
  public $guest=new UserType(false,false,true,false);
  public $owner=new UserType(true,true,true,true);
  function Users(){

  }
}
?>
//Usertype($pCreate,$pUpdate,$pRead,$pDelete);


?>
