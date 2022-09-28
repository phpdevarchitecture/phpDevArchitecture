<?
$username=post("username");
$password=post("password");
if(!$username||!$password){
	$scode=$_SESSION["sessioncode"];
	if($scode){
	$userq=$db->query("SELECT * FROM users WHERE sessioncode='$scode'");
    $user=$userq->fetchObject();
	}
}
else{
	$userq=$db->query("SELECT * FROM users WHERE username='$username' AND password='$password'");
    $user=$userq->fetchObject();
	if($user->id){
		$scode=md5(date("Y-m-d H:i:s").$user->username."sldfjgs08d7f");
		$_SESSION["sessioncode"]=$scode;
		$db->query("UPDATE users SET  sessioncode='$scode' WHERE id=$user->id");
	}
	else{
		$_SESSION["sessioncode"]="";
	}
}
?>