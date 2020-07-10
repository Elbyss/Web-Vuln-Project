<meta charset='utf-8'>
<link rel='stylesheet' href='../static/labs.css'>
<link href="../static/favicon.ico" rel="shortcut icon">
<title> XSS </title>
<style>
  #btn {
    background-color: white;
    text-align: left;
  }
</style>

<script>
function vuln_click() {  
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

<center ><button id='btn'>
<?php
include './secure_src.php';
?>
</center>
<center> <img src='src2.png' width='700'> </center>
