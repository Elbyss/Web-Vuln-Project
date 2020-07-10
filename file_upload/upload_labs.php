<meta charset='utf-8'>
<link rel='stylesheet' href='../static/labs.css'>
<link href="../static/favicon.ico" rel="shortcut icon">
<title> File Upload </title>
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
  location.href='upload_vuln';
  
}

function secure_button() {  
	location.href='upload_secure';
  
}

function home() {
  location.href='upload_labs';
}
function init() {
  location.href='https://work.j0n9hyun.xyz:8443';
}
</script>

<center> <h2 span> File Upload </span> </center>

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
<info>File Upload 취약점</info>은 서버측에서 실행될 수 있는 스크립트 파일(asp,jsp,php파일 등)을 업로드가능하고, 이 파일을 공격자가 웹을 통해 
직접 실행할 수 있는 경우 시스템 내부 명령어를 실행하거나 외부와 연결하여 시스템을 제어할 수 있다.
<br /><br />
<img src='https://image.flaticon.com/icons/svg/3064/3064048.svg' width=50px height=auto>
<red>발생 원인</red> 웹 사이트상에서 파일 업로드 시 제대로된 파일 확장자 등의 검증을 하지 않아서 발생한다.
<br /><br />

<img src='https://image.flaticon.com/icons/svg/3076/3076222.svg' width=50px height=auto>
<green> 대응 방법</green> 저장한 파일명을 해쉬화 하는 등, 엄격한 파일 검증을 거치고 업로드 전용 폴더의 실행 권한을 제거한다.