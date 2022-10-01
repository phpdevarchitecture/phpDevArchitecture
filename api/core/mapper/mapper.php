<?
class Mapper {
  private $mapIndex;

  public function __construct(){
    $this->mapIndex=10;

  }
  public function mapEntity($mapData){
    $myJSON = json_encode($mapData);

  }
}
?>
