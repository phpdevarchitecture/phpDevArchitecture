<?
$db = new PDO("mysql:host=localhost;dbname=db_name", "user_name", "password");
$db->exec("SET NAMES 'utf8'; SET CHARSET 'utf8';SET COLLATION_CONNECTION = 'utf8_turkish_ci'");

?>