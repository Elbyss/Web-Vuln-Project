<!DOCTYPE html>
<html>
<head>
<h2 span style='font-weight: 600'> SQL Injection  </h2>
	<title>SQL Injection</title>
	<link rel="stylesheet" href="./css/bootstrap.min.css">
	<link rel="stylesheet" href="../static/labs.css">
</head>
<style>
	h3 {
		color: red
	}
	</style>
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
<h2 span class='image blinking' style='color: red; font-size:4rem'> Admin <h2 span class='image blinking' style='font-size: 3rem'>계정으로 로그인했습니다. </h2>
</div>
<center> <button> <a href="https://work.j0n9hyun.xyz:8443/sql_injection/sql_vuln">로그아웃</a> </button> </center> <br />
</body>
</html>

