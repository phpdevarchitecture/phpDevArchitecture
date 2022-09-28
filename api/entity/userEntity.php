<?
require_once('core/entity/entityItem.php');
class User {
  private $id=new EntityItem("id","id","int","0");
  private $username=new EntityItem("username","username","string","50");
  private $password=new EntityItem("password","password","string","100");
  public $userType->admin=new UserType(true,true,true,true);
  public $userType->editor=new UserType(true,true,true,true);
  public $userType->moderator=new UserType(true,true,true,true);
  public $userType->guest=new UserType(false,false,true,false);
  public $userType->owner=new UserType(true,true,true,true);

   function User() {
     this->username->setIsNull(false);
     this->username->setIsUnique(true);
     this->password->setIsNull(false);
     this->username->usertype->owner.setPermission(false,true,true,false);
     this->username->usertype->moderator.setPermission(true,true,true,false);
     this->password->usertype->owner.setPermission(false,true,true,false);
     this->password->usertype->moderator.setPermission(true,true,false,false);
     this->password->usertype->guest.setPermission(false,false,false,false);
   }


}
?>
