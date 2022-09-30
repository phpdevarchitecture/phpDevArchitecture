<?
class Response {

  public $success;
  public $errors;

  public function __construct(){
    $this->success=true;
    $this->errors=array();
  }

}
?>
