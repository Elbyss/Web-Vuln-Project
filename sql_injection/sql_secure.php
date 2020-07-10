<?php
#사이트에 처음 접속시 실행되는 php 파일입니다.  디폴트로 로그인 화면을 보여주게 되어있으며 이미 로그인한 사용자가 접근시에는 관리자는 admin.php, 사용자는 welcome.php 로 다시 돌아가게 합니다. 

#사용자가 입력한 평문 패스워드를 데이터베이스에 있는 암호화된 패스워드와 비교하기 위한 작업도 포함되어 있습니다. 

#사용자가 활성화 안된 경우 관리자에게 문의하라는 메시지도 보여줍니다. 

	include('dbcon.php'); 
	include('check.php');
	
    if(is_login()){

        if ($_SESSION['user_id'] == 'admin' && $_SESSION['is_admin']==1)
            header("Location: admin.php");
        else 
            header("Location: welcome.php");
    }
?>

<!DOCTYPE html>
<html>
<head>
<h2 span style='font-weight: 600'> SQL Injection  </h2>
	<title>SQL Injection</title>
	<link rel="stylesheet" href="./css/bootstrap1.min.css">
	<link rel="stylesheet" href="../static/labs.css">
	<link href="../static/favicon.ico" rel="shortcut icon">
</head>
<style>
.right-box {
	padding-left: 300px;
  float: right;
}
</style>

<script>
function vuln_click() {  
	//alert("취약한 버튼이 눌러졌습니다.");
  location.href='sql_vuln';
  
}

function secure_button() {  
	location.href='sql_secure';
  
}

function home() {
  location.href='sql_labs';
}
function init() {
  location.href='https://work.j0n9hyun.xyz:8443';
}
</script>

<body>
<button class="from-top" style='margin-left: 8px' onclick="vuln_click()";> Vulnerable
</button>

<button class="from-bottom" style='margin-top: 45px' onclick='secure_button()';> Secure</button>
</button>

<button class="from-left" onclick='home()';> Description</button>
</button>

<button class="from-right" onclick='init()';> Back</button>
</button>


<div class="container">
<br />

	<form class="form-horizontal" method="POST">
		<div class="form-group" style="padding: 10px 10px 10px 10px;">
			<label for="user_name">아이디:</label>
			<input type="text" name="user_name"  class="form-control" id="inputID" placeholder="아이디를 입력하세요." 
				required autocomplete="off" readonly onfocus="this.removeAttribute('readonly');" />
		</div>
		<div class="form-group" style="padding: 10px 10px 10px 10px;">
			<label for="user_password">패스워드:</label>
			<input type="password" name="user_password" class="form-control" id="inputPassword" placeholder="패스워드를 입력하세요." 
				required  autocomplete="off" readonly onfocus="this.removeAttribute('readonly');" />
		</div>
		<div class="checkbox">
			<label><input type="checkbox"> 아이디 기억</label>
		</div>
		</br>
		<div class="from-group" style="padding: 10px 10px 10px 10px;" >
			<button type="submit" name="login" class="btn btn-success">로그인</button>
			<a class="btn btn-success" href="registration.php" style="margin-left: 50px">
			<span class="glyphicon glyphicon-user"></span>&nbsp;등록
			</a>
		</div>
		</br>
	</form>
	<?php

		$login_ok = false;

    if ( ($_SERVER['REQUEST_METHOD'] == 'POST') and isset($_POST['login']) )
    {
		$username=$_POST['user_name'];  
		$userpassowrd=$_POST['user_password'];  
		if(preg_match('/[\s\t\'\;\"\=\-\-]+/', $username)) {
			echo "<script>alert('필터링된 문자가 포함되어 있습니다.')</script>";
		}	

		if(empty($username)){
			$errMSG = "아이디를 입력하세요.";
		} else if(empty($userpassowrd)){
			$errMSG = "패스워드를 입력하세요.";
		} else {
			

			try { 
				$stmt = $con->prepare('select * from users where username=:username');
				$stmt->bindParam(':username', $username);
				$stmt->execute();
			} catch(PDOException $e) {
				die("Database error. " . $e -> getMessage()); 
			}

			$row = $stmt->fetch();  
			$salt = $row['salt'];
			$password = $row['password'];
			
			$decrypted_password = decrypt(base64_decode($password), $salt);

			if ( $userpassowrd == $decrypted_password) {
				$login_ok = true;
			}
		}

		
		if(isset($errMSG)) 
			echo "<script>alert('$errMSG')</script>";
		

        if ($login_ok){

            if ($row['activate']==0)
				echo "<script>alert('$username 계정 활성이 안되었습니다. 관리자에게 문의하세요.')</script>";
            else{
					session_regenerate_id();
					$_SESSION['user_id'] = $username;
					$_SESSION['is_admin'] = $row['is_admin'];

					if ($username=='admin' && $row['is_admin']==1 )
						header('location:admin.php');
					else
						header('location:welcome.php');
					session_write_close();
			}
		}
		else{
			echo "<script>alert('$username 인증 오류')</script>";
		}
	}
?>
