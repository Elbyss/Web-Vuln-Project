<meta charset='utf-8'>
<link rel='stylesheet' href='../static/labs.css'>
<link href="../static/favicon.ico" rel="shortcut icon">
<title> File Upload </title>
<style>
  #btn {
    background-color: white;
    text-align: left;
  }
.left-box {
  background: red;
  float: left;
}
.right-box {
  padding: 65;
  float: right;
}
</style>

<script>
function vuln_click() {  
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

<div class='right-box'>
<img src='src1.png' width='650'> 
</div>

<center><button id='btn'>
  
<?php
include './vuln_src.php';
?>
</center>
