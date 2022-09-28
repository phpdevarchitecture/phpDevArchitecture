<?

class User extends Users {
  private $id=new EntityItem("id","id","int","0");
  private $username=new EntityItem("username","username","string","50");
  private $password=new EntityItem("password","password","string","100");
   function User() {
     this->admin.setPermission(true,true,true,true);
     this->editor.setPermission(true,true,true,true);
     this->moderator.setPermission(true,true,true,true);
     this->guest.setPermission(false,false,true,false);
     this->owner.setPermission(true,true,true,true);
     this->id->setIsIdentity(true);
     this->username->setIsNull(false);
     this->username->setIsUnique(true);
     this->password->setIsNull(false);
     this->username->owner.setPermission(false,true,true,false);
     this->username->moderator.setPermission(true,true,true,false);
     this->password->owner.setPermission(false,true,true,false);
     this->password->moderator.setPermission(true,true,false,false);
     this->password->guest.setPermission(false,false,false,false);
   }
}
?>
