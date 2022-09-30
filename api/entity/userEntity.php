<?

class User extends Users {

  public $id;
  public $username;
  public $password;
   public function __construct()  {
     $this->id=new EntityItem("id","id","int","0");
     $this->username=new EntityItem("username","username","string","50");
     $this->password=new EntityItem("password","password","string","100");
     $this->setUsers();
     $this->admin->setPermission(true,true,true,true);
     $this->editor->setPermission(true,true,true,true);
     $this->moderator->setPermission(true,true,true,true);
     $this->guest->setPermission(false,false,true,false);
     $this->owner->setPermission(true,true,true,true);
   }



}
?>
