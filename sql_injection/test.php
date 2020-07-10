<?php
define("DB_SERVER","localhost");
define("DB_USER","root");
define("DB_PASS","password");
define("DB_NAME","injection");

$db = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);

if(!$db){
	die("DB Connection Error"); exit();
}


$id = $_GET['id'];
$pw = $_GET['pw'];
#$pw = hash('sha256',$pw);

$sql = "select * from vuln_sql where id='$id' and pw='$pw'";
$result = mysqli_fetch_array(mysqli_query($db,$sql));

if($result['id']){
        $_SESSION['id'] = $result['id'];
        mysqli_close($db);
        header("Location:result.php");
}
?>



<!DOCTYPE html>
<html>
<head>
	<title> Login </title>
	<meta charset="utf-8">
</head>
<body>
<center>
<h5> Login </h5>
<form action="" method="get">
<input type="text" name="id" placeholder="id">
<br>
<input type="password" name="pw" placeholder="pw">
<br>
<br>
<button type="submit">Login</button>
</form>
</body>
</html>
