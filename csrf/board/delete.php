<?php
	require_once("dbconfig.php");

	//$_GET['bno']이 있어야만 글삭제가 가능함.
	if(isset($_GET['bno'])) {
		$bNo = $_GET['bno'];
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>자유게시판 | Kurien's Library</title>
	<link rel="stylesheet" href="./css/normalize.css" />
	<link rel="stylesheet" href="./css/board.css" />
	<link rel='stylesheet' href='../../static/labs.css'>
	<link href="../../static/favicon.ico" rel="shortcut icon">
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
		<h3>자유게시판 글삭제</h3>
		<?php
			if(isset($bNo)) {
				$sql = 'select count(b_no) as cnt from board_free where b_no = ' . $bNo;
				$result = $db->query($sql);
				$row = $result->fetch_assoc();
				if(empty($row['cnt'])) {
		?>
		<script>
			alert('글이 존재하지 않습니다.');
			history.back();
		</script>
		<?php
			exit;
				}
				
				$sql = 'select b_title from board_free where b_no = ' . $bNo;
				$result = $db->query($sql);
				$row = $result->fetch_assoc();
		?>
		<div id="boardDelete">
			<form action="./delete_update.php" method="post">
				<input type="hidden" name="bno" value="<?php echo $bNo?>">
				<table>
					<tbody>
						<tr>
							<th scope="row">글 제목</th>
							<td><?php echo $row['b_title']?></td>
						</tr>
						<tr>
							<th scope="row"><label for="bPassword">비밀번호</label></th>
							<td><input type="password" name="bPassword" id="bPassword"></td>
						</tr>
					</tbody>
				</table>

				<div class="btnSet">
					<button type="submit" class="general">삭제</button>
					<a href="https://work.j0n9hyun.xyz:8443/csrf/board/csrf_vuln" class="general">목록</a>
				</div>
			</form>
		</div>
	<?php
		//$bno이 없다면 삭제 실패
		} else {
	?>
		<script>
			alert('정상적인 경로를 이용해주세요.');
			history.back();
		</script>
	<?php
			exit;
		}
	?>
	</article> </center>
</body>
</html>
