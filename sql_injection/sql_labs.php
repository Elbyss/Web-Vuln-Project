<meta charset='utf-8'>
<link rel='stylesheet' href='../static/labs.css'>
<link href="../static/favicon.ico" rel="shortcut icon">
<title> SQL Injection </title>
<style>
info {
  color: violet;
  font-size: 2.5rem;
}
red {
  color: pink;
  font-size: 2.5rem;
}

green {
  color: lightgreen;
  font-size: 2.5rem;

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

<center> <h2 span> SQL Injection </span> </center>

<button class="from-top" onclick="vuln_click()";> Vulnerable
</button>

<button class="from-bottom" onclick='secure_button()';> Secure</button>
</button>

<button class="from-left" onclick='home()';> Description</button>
</button>

<button class="from-right" onclick='init()';> Back</button>
</button>

<br /><br />
<h3>
<img src='https://image.flaticon.com/icons/svg/906/906763.svg' width=50px height=auto>
<info>SQL Injection</info>은 악의적인 SQL문을 실행되게 함으로써 데이터베이스를 비정상적으로 조작하는 코드 인젝션 공격 기법이다.
<br /><br />
<img src='https://image.flaticon.com/icons/svg/3064/3064048.svg' width=50px height=auto>
<red>발생 원인</red> SQL쿼리 입력에 대해 적절한 검증이 이루어지지 않아 발생한다. 
<br /><br />

<img src='https://image.flaticon.com/icons/svg/3076/3076222.svg' width=50px height=auto>
<green> 대응 방법</green> 준비된 선언 사용, 특수문자 이스케이프 처리
