<meta charset="utf-8" />
<?php
session_start(); // 세션
include ("DB_con.php"); // DB접속

$id = $_POST['id']; // 아이디 
$pw = $_POST['pw']; // 패스워드
   
$query = "select * from member_info where id='$id' and pw='$pw'";
$result = mysqli_query($con, $query); 
$row = mysqli_fetch_array($result);


if($id==$row['id'] && $pw==$row['pw']){ // id와 pw가 맞다면 login
   $_SESSION['id']=$row['id'];
   $_SESSION['name']=$row['name'];
   echo "<script>alert('로그인 되었습니다.');</script>";
   echo "<script>location.href='login.php';</script>";
}else{ 
   echo "<script>window.alert('아이디 또는 패스워드가 틀렸습니다.');</script>";
   echo "<script>location.href='login.php';</script>";
}
?>
