<?php
	require_once("dbconfig.php");
	$bNo = $_GET['bno'];

	if(!empty($bNo) && empty($_COOKIE['board_free_' . $bNo])) {
		$sql = 'update board_free set b_hit = b_hit + 1 where b_no = ' . $bNo;
		$result = $db->query($sql); 
		if(empty($result)) {
			?>
			<script>
				alert('오류가 발생했습니다.');
				history.back();
			</script>
			<?php 
		} else {
			setcookie('board_free_' . $bNo, TRUE, time() + (60 * 60 * 24), '/');
		}
	}
	
	$sql = 'select b_title, b_content, b_date, b_hit, b_id from board_free where b_no = ' . $bNo;
	$result = $db->query($sql);
	$row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>자유게시판</title>
	<link rel="stylesheet" href="./css/normalize.css" />
	<link rel="stylesheet" href="./css/board.css" />
	<link rel='stylesheet' href='../../static/labs.css'>
	<link href="../../static/favicon.ico" rel="shortcut icon">	
	<script src="./js/jquery-2.1.3.min.js"></script>
</head>
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
<center> <h2 span style='margin-top: 8px'> Cross-Site Request Forgery </span> </center>
<button class="from-top" style='margin-left: 8px; margin-top: 8px' onclick="vuln_click()";> Vulnerable
</button>

<button class="from-bottom" onclick='secure_button()';> Secure</button>
</button>

<button class="from-left" onclick='home()';> Description</button>
</button>

<button class="from-right" onclick='init()';> Back</button>
</button>

<br /><br />
<body> <center>
	<article class="boardArticle">
		<h3>게시판 글 작성</h3>
		<div id="boardView">
			<h3 id="boardTitle"><?php echo $row['b_title']?></h3>
			<div id="boardInfo">
				<span id="boardID">작성자: <?php echo $row['b_id']?></span> <br/>
				<span id="boardDate">날짜: <?php echo $row['b_date']?></span> <br/>
				<!-- <span id="boardHit">조회수: <?php echo $row['b_hit']?></span> -->
			</div>
			<div id="boardContent"><?php echo $row['b_content']?></div>
			<div class="btnSet">
				<a href="./write.php?bno=<?php echo $bNo?>">수정</a>
				<a href="./delete.php?bno=<?php echo $bNo?>">삭제</a>
				<a href="https://work.j0n9hyun.xyz:8443/csrf/board/csrf_vuln">목록</a>
			</div>
		<div id="boardComment">
			<?php require_once('./comment.php')?>
		</div>
		</div>
	</article> </center>
</body>
</html>
