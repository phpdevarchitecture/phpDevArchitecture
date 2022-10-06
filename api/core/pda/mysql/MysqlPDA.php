<?
class MysqlPDA {
  public $dbname;
  public $host;
  public $connectionUsername;
  public $connectionPassword;
  public function __construct($pdaHost,$pdaDbname,$pdaUsername,$pdaPassword){
    $this->host=$pdaHost;
    $this->dbname=$pdaDbname;
    $this->connectionUsername=$pdaUsername;
    $this->connectionPassword=$pdaPassword;
  }
  public function connect(){
      try {

        $pdo= new PDO("mysql:host=$this->host;dbname=$this->dbname","$this->connectionUsername","$this->connectionPassword");


      } catch (PDOException $e) {
      
      }
      return $pdo;
  }
}
?>
