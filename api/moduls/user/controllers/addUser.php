<?

echo "addUser işlemi";
require_once('entity/userEntity.php');
$user=new User();
$mapper=new Mapper();
$mapper->mapEntity($user);
echo "sss";
?>
