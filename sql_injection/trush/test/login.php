<?php
session_start(); // 세션
if($_SESSION['id']==null) { // 로그인 하지 않았다면
?>
<!DOCTYPE html>
<head>
	<meta charset="utf-8"/>
	<title> 로그인 </title>
<link rel="stylesheet" type="text/css" href="/work/static/style.css"/>
</head>
<body>
	<div id="login.php">
		<center><h1>로그인</h1></center>
		<form name="login_form" action="login_chk.php" method="post"> 
		<table align="center" border="3" cellspacing="1" width="250">
		<tr>
			<td width="50" colspan="1">
			ID<input type="text" name="id" class="inph"></td>
			<td rowspan="3" align="center" width="150">
			<button type="submit" name="login">로그인</button></td>
		</tr>
		<tr>
			<td width="50" colspan="1">
			PW<input type="password" name="pw" class="inph"></td>
		</tr>
		<tr>
			<td colspan="3" align="center" class="member">
			<a href="mem_cre.php">회원가입</a>
			</td>
		</tr>
		</table>
		</form>
	</div>
</body>
</html>

<!-- ID<input type="text" name="id"><br>
	 PW<input type="password" name="pw"><br><br>
	 <input type="submit" name="login" value="Login"> -->


<?php
	}else{
   echo "<center><br><br><br>";
   echo $_SESSION['name']."님이 로그인 하셨습니다.";
	   #"(".$_SESSION['id'].")님이 로그인 하였습니다.";
   echo "&nbsp;<a href='logout.php'><input type='button' value='Logout'></a>";
   echo "</center>";
}
?>
