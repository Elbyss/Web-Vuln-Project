<meta charset='utf-8'>
<link rel='stylesheet' href='../../static/labs.css'>
<link href="../../static/favicon.ico" rel="shortcut icon">
<title> CSRF </title>
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
  location.href='csrf_vuln';
  
}

function secure_button() {  
	location.href='csrf_secure';
  
}

function home() {
  location.href='csrf_labs';
}
function init() {
  location.href='https://work.j0n9hyun.xyz:8443';
}
</script>

<center> <h2 span> Cross-Site Request Forgery </span> </center>

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
<info>CSRF</info>사용자가 자신의 의지와는 무관하게 공격자가 의도한 행위(수정, 삭제, 등록 등)를 특정 웹사이트에 요청하게 하는 공격을 말하며, 클라이언트단에서 일어나는 XSS와 달리 서버단에서 이루어지는 행위이다.
<br /><br />
<img src='https://image.flaticon.com/icons/svg/3064/3064048.svg' width=50px height=auto>
<red>발생 원인</red> 사용자 입력 값에 대한 적절한 필터링 및 인증에 대한 유효성 검증이 미흡하기 때문에 발생한다.
<br /><br />

<img src='https://image.flaticon.com/icons/svg/3076/3076222.svg' width=50px height=auto>
<green> 대응 방법</green> Referrer 검증 또는 안전한 토큰 사용 등의 방법으로 방지할 수 있다.