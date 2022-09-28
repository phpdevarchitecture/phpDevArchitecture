<?

class User {
  private $id=new EntityItem("id","id","int","0");
  private $username=new EntityItem("username","username","string","50");
  private $password=new EntityItem("password","password","string","100");
  public $users=new Users();


   function User() {
     this-users->admin=new UserType(true,true,true,true);
     this-users->editor=new UserType(true,true,true,true);
     this-users->moderator=new UserType(true,true,true,true);
     this-users->guest=new UserType(true,true,true,true);
     this-users->owner=new UserType(true,true,true,true);

     this->username->setIsNull(false);
     this->username->setIsUnique(true);
     this->password->setIsNull(false);
     this->username->users->owner.setPermission(false,true,true,false);
     this->username->users->moderator.setPermission(true,true,true,false);
     this->password->users->owner.setPermission(false,true,true,false);
     this->password->users->moderator.setPermission(true,true,false,false);
     this->password->users->guest.setPermission(false,false,false,false);
   }


}
?>
