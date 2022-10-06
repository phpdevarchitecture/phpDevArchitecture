<?

require_once('entity/userEntity.php');
$user=new User();
$mapper=new Mapper();
$mapper->mapData($user);
$response->data=$user;
echo json_encode($response);
?>
