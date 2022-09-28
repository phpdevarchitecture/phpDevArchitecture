<?
require_once('core/userEntity.php');
class User {
  private $id=new EntityItem("id","id","int","0");
  private $username=new EntityItem("username","username","string","50");
  private $password=new EntityItem("password","password","string","100");
   function User() {
     this->username->setIsNull(false);
     this->username->setIsUnique(true);
     this->password->setIsNull(false);
   }


}
?>
