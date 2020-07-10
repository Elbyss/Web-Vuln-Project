<!DOCTYPE html>
<html>
<head>
<h2 span style='font-weight: 600'> SQL Injection  </h2>
	<title>SQL Injection</title>
	<link rel="stylesheet" href="./css/bootstrap.min.css">
	<link rel="stylesheet" href="../static/labs.css">
</head>

<script>
function vuln_click() {  
	//alert("취약한 버튼이 눌러졌습니다.");
  location.href='index';
  
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
<?php
#사용자로 로그인시 보여지는 화면을 위한 코드입니다. 
    include('dbcon.php');
    include('check.php');
	
	    if (is_login()){
        ;
	    }else
	        header("Location: index.php"); 
	
		// include('head.php');
		?>
		</script>
<button class="from-top" style='margin-left: 8px' onclick="vuln_click()";> Vulnerable
</button>

<button class="from-bottom" style='margin-top: 45px' onclick='secure_button()';> Secure</button>
</button>

<button class="from-left" onclick='home()';> Description</button>
</button>

<button class="from-right" onclick='init()';> Back</button>
</button>		
<div align="center">
<?php
	$user_id = $_SESSION['user_id'];
		
	try { 
		$stmt = $con->prepare('select * from users where username=:username');
		$stmt->bindParam(':username', $user_id);
		$stmt->execute();
		
	} catch(PDOException $e) {
		die("Database error: " . $e->getMessage()); 
	}
		
	$row = $stmt->fetch();
	echo "계정 생성 시간: ".($row['regtime']);
?>

<?php echo "<h2 span class='image blinking'>".$user_id;?> 계정으로 로그인했습니다. </h2>
</div>
<center> <button> <a href="logout.php">로그아웃</a> </button> </center> <br />
<?php echo "<center><button>".$_SESSION['user_id']."</button></center>"; ?>
</body>
</html>

