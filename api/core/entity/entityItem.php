<?

class EntityItem  extends Users {
  private $itemTypes=array("string","int","decimal","bigInt","float","double","char","text","byte","boolean","date","time","dateTime");
  private $name="";
  private $columnName="";
  private $type="string";
  private $length=0;
  private $fraction=0;
  private $isIdentity=false;
  private $identityStart=1;
  private $indexable=false;
  private $isNull=true;
  private $isUnique=false;
  private $response->success=true;
  private $response->errors=array();


   function EntityItem($pName,$pColumnName,$pType,$pLength) {
     this->admin=new UserType(true,true,true,true);
     this->editor=new UserType(true,true,true,true);
     this->moderator=new UserType(true,true,true,true);
     this->guest=new UserType(true,true,true,true);
     this->owner=new UserType(true,true,true,true);
     this->response->success=true;
     this->response->errors=array();
     if(this->checkName($pName)==false){
       this->response->success=false;
       this->response->errors[count(this->response->errors)]="Item Name cannot be used";
     }
     if(this->checkName($pColumnName)==false){
       this->response->success=false;
       this->response->errors[count(this->response->errors)]="Item Table Column name cannot be used";
     }
// type control start
     if(this->checkType($pType)==false){
       this->response->success=false;
       this->response->errors[count(this->response->errors)]="undefined item type";
     }
     else{
        switch ($pType) {
            case "string":
                if((0+$pLength)<1){
                  this->response->success=false;
                  this->response->errors[count(this->response->errors)]="string length must be greater than 0 ";
                }
                else if((0+$pLength)>254){
                  this->response->success=false;
                  this->response->errors[count(this->response->errors)]="string length must be less than 255 ";
                }
                else{
                  this->length=0+$pLength;
                }
                break;
            case "decimal":
                $decimalLengthparts=explode(",",$pLength);
                if(count($decimalLengthparts)<1||count($decimalLengthparts)>2){
                  this->response->success=false;
                  this->response->errors[count(this->response->errors)]="decimal type length format un acceptable ";
                }
                else{
                  if (preg_match('/([^0-9])/', $decimalLengthparts[0])||strlen($decimalLengthparts[0])<1) {
                    this->response->success=false;
                    this->response->errors[count(this->response->errors)]="decimal type length format un acceptable ";
                  }
                  else if (preg_match('/([^0-9])/', $decimalLengthparts[1])||strlen($decimalLengthparts[0])<1) {
                    this->response->success=false;
                    this->response->errors[count(this->response->errors)]="decimal type length format fraction un acceptable ";
                  }
                  else{
                    this->length=0+$decimalLengthparts[0];
                    this->fraction=0+$decimalLengthparts[1];
                  }
                }
                break;
        }
     }
// type control end
   }

   function checkName($cName){
     $checkResult=true;
     if(strlen($cName)<1){ $checkResult=false; return $checkResult;}
     if (preg_match('/([^a-zA-Z0-9])/', $cName)) {
         $checkResult=false; return $checkResult;
     }
     else{
       if(0+$cName>0){
         $checkResult=false; return $checkResult;

       }
     }
       return $checkResult;

   }
   function checkType($cType){
     $tCheck=false;
     for($i=0;count(this->itemTypes);$i++){
       if(this->itemTypes[$i]==$cType) $tCheck=true;

     }
     return $tCheck;
   }

   function getName(){return this->name;}
   function setName($sValue){
     if(this->checkName($sValue)==false){
       return "Item Name un acceptable";
     }
     else{
       this->name=$sValue;
     }
   }
   function getColumnName(){return this->columnName;}
   function setColumnName($sValue){
     if(this->checkName($sValue)==false){
       return "Item ColumnName un acceptable";
     }
     else{
       this->columnName=$sValue;
     }
   }
   function getType(){return this->type;}
   function setType($sValue){

       if(this->checkType($sValue)==false){
         return "Item type un acceptable";
       }
       else{
          switch ($sValue) {
              case "string":
                  if((0+this->length)<1){
                    return "string length must be greater than 0 ";
                  }
                  else if((0+this->length)>254){
                    return "string length must be less than 255 ";
                  }
                  else{
                    this->type=$sValue;
                  }
                  break;
              case "decimal":

                  if(this->length<1){
                    return "decimal type length format un acceptable ";
                  }
                  else if(this->fraction<1){
                    return "decimal type length format un acceptable ";
                  }
                  else{
                    this->type=$sValue;
                  }

                  break;
          }
       }



   }


   function getLength(){return this->length;}
   function setLength($sValue){
       this->length=0+intval($sValue);
   }
   function getFraction(){return this->fraction;}
   function setFraction($sValue){
       this->fraction=0+intval($sValue);
   }
   function getIsIdentity(){return this->isIdentity;}
   function setIsIdentity($sValue){
      if($sValue)
         this->isIdentity=true;
      else
        this->isIdentity=false;
   }
   function getIdentityStart(){return this->identityStart;}
   function setIdentityStart($sValue){
         this->identityStart=intval(0+$sValue);
   }

   function getIndexable(){return this->indexable;}
   function setIndexable($sValue){
      if($sValue)
         this->indexable=true;
      else
        this->indexable=false;
   }

   function getIsNull(){return this->isNull;}
   function setIsNull($sValue){
      if($sValue)
         this->isNull=true;
      else
        this->isNull=false;
   }
   function getIsUnique(){return this->isUnique;}
   function setIsUnique($sValue){
      if($sValue)
         this->isUnique=true;
      else
        this->isUnique=false;
   }



}
?>
