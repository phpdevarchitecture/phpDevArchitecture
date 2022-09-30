<?
class Users {

  public $admin;
  public $editor;
  public $moderator;
  public $guest;
  public $owner;
  public function __construct(){
    $this->admin=new UserType(true,true,true,true);
    $this->editor=new UserType(true,true,true,true);
    $this->moderator=new UserType(true,true,true,true);
    $this->guest=new UserType(false,false,true,false);
    $this->owner=new UserType(true,true,true,true);
  }
  public function setUsers(){
    $this->admin=new UserType(true,true,true,true);
    $this->editor=new UserType(true,true,true,true);
    $this->moderator=new UserType(true,true,true,true);
    $this->guest=new UserType(false,false,true,false);
    $this->owner=new UserType(true,true,true,true);
  }



}
?>
