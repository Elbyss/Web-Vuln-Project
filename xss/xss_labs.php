<meta charset='utf-8'>
<link rel='stylesheet' href='../static/labs.css'>
<link href="../static/favicon.ico" rel="shortcut icon">
<title> XSS </title>
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
  location.href='xss_vuln';
  
}

function secure_button() {  
	location.href='xss_secure';
  
}

function xss_home() {
  location.href='xss_labs';
}
function init() {
  location.href='https://work.j0n9hyun.xyz:8443';
}
</script>

<center> <h2 span> Cross Site Scripting </span> </center>

<button class="from-top" onclick="vuln_click()";> Vulnerable
</button>

<button class="from-bottom" onclick='secure_button()';> Secure</button>
</button>

<button class="from-left" onclick='xss_home()';> Description</button>
</button>

<button class="from-right" onclick='init()';> Back</button>
</button>

<br /><br />
<h3>
<img src='https://image.flaticon.com/icons/svg/906/906763.svg' width=50px height=auto>
<info>XSS</info>는 웹 페이지에 악성 스크립트를 삽입할 수 있는 취약점이다. 
<br /><br />
<img src='https://image.flaticon.com/icons/svg/3064/3064048.svg' width=50px height=auto>
<red>발생 원인</red> 웹 애플리케이션이 사용자로부터 입력 받은 값을 제대로 검증하지 않고 사용할 경우 나타난다.
<br /><br />

<img src='https://image.flaticon.com/icons/svg/3076/3076222.svg' width=50px height=auto>
<green> 대응 방법</green> 출력값에 대해 HTML 인코딩을 적용하여 스크립트가 동작되지 않도록 하는 등의 시큐어 코딩이 필요하다.

</h3>
