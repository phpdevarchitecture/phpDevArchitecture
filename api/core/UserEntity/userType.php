<?
class UserType {
    private $canCreate;
    private $canUpdate;
    private $canRead;
    private $canDelete;
    public function __construct(){
      $this->canCreate=false;
      $this->canUpdate=FALSE;
      $this->canRead=FALSE;
      $this->canDelete=FALSE;

    }

    public function setPermission($pCreate,$pUpdate,$pRead,$pDelete){

      if($pCreate) $this->canCreate=true; else $this->canCreate=false;
      if($pUpdate) $this->canUpdate=true; else $this->canUpdate=false;
      if($pRead) $this->canRead=true; else $this->canRead=false;
      if($pDelete) $this->canDelete=true; else $this->canDelete=false;
    }


    function getCanCreate(){
      return 0+$this->canCreate;
    }
    function setCanCreate($sName){
      if($sName){
        $this->canCreate=true;
      }
      else $this->canCreate=false;
    }
    function getCanUpdate(){
      return $this->canUpdate;
    }
    function setCanUpdate($sName){
      if($sName){
        $this->canUpdate=true;
      }
      else $this->canUpdate=false;
    }
    function getCanRead(){
      return $this->canRead;
    }
    function setCanRead($sName){
      if($sName){
        $this->canRead=true;
      }
      else $this->canRead=false;
    }
    function getCanDelete(){
      return $this->canDelete;
    }
    function setCanDelete($sName){
      if($sName){
        $this->canDelete=true;
      }
      else $this->canDelete=false;
    }

}
?>
