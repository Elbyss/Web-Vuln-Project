<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

$host='localhost';
$user='root';
$pw='password';
$dbname='user_info';
#include './db.php'
$mysqli = mysqli_connect($host, $user, $pw, $dbname);

$id = $_POST['id'];
$pw = md5($_POST['pw']);
$name = $_POST['name'];
$phone = $_POST['phone'];
$sex = $_POST['sex'];
$email = $_POST['email'];#.'@'.$_POST['emadress'];

$sql = "insert into user_info (id, pw, name, phone, sex, email)";
$sql = $sql."values('$id','$pw','$name','$phone','$sex','$email')";

$result = mysqli_query($mysqli, "insert into user_info (id, pw, name, phone, sex, email) values ('$id', '$pw', '$name', '$phone', '$sex', '$email')");

?>
