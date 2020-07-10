<?php
include "db.php"; ?>
<!DOCTYPE html>
<head>
	<meta charset="utf-8" />
	<title> 로그인 </title>
<link rel="stylesheet" type="text/css" href="../static/style.css" />
</head>
<body>

	<div id="login_php">
		<center><h1>로그인</h1></center>
		<form method="post" action="login_chk.php">
			<table align="center" border="1" cellspacing="5" width="200">
				<tr>
					<td width="150" colspan="1">
					<input type="text" name="id" class="inph">
					</td>
					<td rowspan="2"align="center" width="150">
						<button type="submit" id="btn">로그인</buttom>
					</td>
				</tr>
				<tr>
					<td width="130" colspan="1">
					<input type="password" name="pw" class="inph">
					</td>
				</tr>
				<tr>
					<td colspan="3" align="center" class="mem">
					<a href="./member.php">회원가입</a>
					</td>
				</tr>
			</table>
		</form>
	</div>
</body>
</html>

