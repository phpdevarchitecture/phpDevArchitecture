
<?

class EntityItem  extends Users {
  private $itemTypes;
  public $name;
  public $columnName;
  public $type;
  public $length;
  public $fraction;
  public $isIdentity;
  public $identityStart;
  public $indexable;
  public $isNull;
  public $isUnique;
  public $response;

  public function __construct($pName,$pColumnName,$pType,$pLength) {
    $this->itemTypes=array("string","int","decimal","bigInt","float","double","char","text","byte","boolean","date","time","dateTime");
        $this->response=new Response();
        $this->type=$pType;
        $this->name=$pName;
        $this->columnName=$pColumnName;
        $this->length=$pLength;
        $this->fraction=0;
        $this->isIdentity=FALSE;
        $this->identityStart=1;
        $this->indexable=FALSE;
        $this->isNull=TRUE;
        $this->isUnique=FALSE;
     $this->admin=new UserType(true,true,true,true);
     $this->editor=new UserType(true,true,true,true);
     $this->moderator=new UserType(true,true,true,true);
     $this->guest=new UserType(true,true,true,true);
     $this->owner=new UserType(true,true,true,true);
     $this->response->success=true;
     $this->response->errors=array();

     if($this->checkName($pName)==false){
       $this->response->success=false;
       $this->response->errors[count($this->response->errors)]="Item Name cannot be used";
     }
     if($this->checkName($pColumnName)==false){
       $this->response->success=false;
       $this->response->errors[count($this->response->errors)]="Item Table Column name cannot be used";
     }
// type control start
     if($this->checkType($pType)==false){
       $this->response->success=false;
       $this->response->errors[count($this->response->errors)]="undefined item type";
     }
     else{
        switch ($pType) {
            case "string":
                if((0+$pLength)<1){
                  $this->response->success=false;
                  $this->response->errors[count($this->response->errors)]="string length must be greater than 0 ";
                }
                else if((0+$pLength)>254){
                  $this->response->success=false;
                  $this->response->errors[count($this->response->errors)]="string length must be less than 255 ";
                }
                else{
                  $this->length=0+$pLength;
                }
                break;
            case "decimal":
                $decimalLengthparts=explode(",",$pLength);
                if(count($decimalLengthparts)<1||count($decimalLengthparts)>2){
                  $this->response->success=false;
                  $this->response->errors[count($this->response->errors)]="decimal type length format un acceptable ";
                }
                else{
                  if (preg_match('/([^0-9])/', $decimalLengthparts[0])||strlen($decimalLengthparts[0])<1) {
                    $this->response->success=false;
                    $this->response->errors[count($this->response->errors)]="decimal type length format un acceptable ";
                  }
                  else if (preg_match('/([^0-9])/', $decimalLengthparts[1])||strlen($decimalLengthparts[0])<1) {
                    $this->response->success=false;
                    $this->response->errors[count($this->response->errors)]="decimal type length format fraction un acceptable ";
                  }
                  else{
                    $this->length=0+$decimalLengthparts[0];
                    $this->fraction=0+$decimalLengthparts[1];
                  }
                }
                break;
        }
     }
// type control end

   }

   private function checkName($sss){
     return true;

   }
   private function checkType($sss){
     return true;

   }
  public function getName(){

    return $this->name;
  }
}
?>
