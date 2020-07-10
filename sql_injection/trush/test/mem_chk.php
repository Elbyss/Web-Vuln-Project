<?php
#error_reporting(E_ALL);
#ini_set("display_errors", 1);

include "DB_con.php";

$_id = $_POST['id'];
$_pw = md5($_POST['pw']);
$_name = $_POST['name'];
$_phone = $_POST['phone'];
$_sex = $_POST['sex'];
$_email = $_POST['email'].'@'.$_POST['e_adress'];
$chkid = $_POST['chk_id2'];

$query = "insert into member_info (id, pw, name, phone, sex, email) values ('$_id', '$_pw', '$_name', '$_phone', '$_sex', '$_email')";
$result = mysqli_query($query, $con);


if($chkid==0){
	echo "<script>alert('중복확인을 눌러주세요.');history.back();</script>";}
	else {
		$query = "insert into member_info (id, pw, name, phone, sex, email) values ('$_id', '$_pw', '$_name', '$_phone', '$_sex', '$_email')";
		$result = mysqli_query($query, $con);
	
		echo "<script>alert('회원가입을 축하드립니다.');</script>";
		echo "<meta http-equiv='refresh' content='1; URL=login.php'>";
}

#$sql = $query."values('$id', '$pw', '$name', $phone, '$sex', '$email')";
#echo "<script>location.href='login.php';</script>";
?>
