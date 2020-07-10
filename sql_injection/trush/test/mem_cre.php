<script>
function chid(){
	document.getElementById("chk_id2").value=0;
	var id=document.getElementById("chk_id1").value;
  
	if(id==""){
		alert("빈칸을 채워주세요.");
		exit;
	}

ifrm1.location.href="mem_id_chk.php?userid="+id; 
 }
</script>

<meta charset="utf-8" />
<!DOCTYPE html>
<html>
<head>
	<title>회원가입</title>
</head>
<body>
	<form method="post" action="mem_chk.php">
	<table cellpadding=2 cellspacing=2>
	<fieldset align=center><b>회&nbsp원&nbsp가&nbsp입</b></fieldset>
	<tr>
		<td colspan=2 align=center>&nbsp입&nbsp력&nbsp사&nbsp항</td>
	</tr>
	<tr>
		<td align=center>ID</td>
		<td><input type="text" maxlength=15 name=id id="chk_id1" placeholder="아이디를 넣어주세요" required>&nbsp;&nbsp;
		<input type=button value="중복검사" onclick=chid()></td>
   		<input type=hidden id="chk_id2" name=chk_id2 value="0">
	</tr>
	<tr>
		<td align=center>패스워드</td>
		<td><input type="password" maxlength=20 name=pw placeholder="패스워드를 넣어주세요." required></td>
	</tr>
	<tr>
		<td align=center>성명</td> 
		<td><input type="text" maxlength=10 name="name" placeholder="이름을 넣어주세요." required></td>
	</tr>
	<tr>
		<td align=center>연락처</td>
		<td><input type="text" maxlength=13 name="phone" placeholder="연락처를 적어주세요." required></td>
	</tr>
	<tr>
		<td align=center>성별</td>
		<td>남자<input type="radio" name="sex" value="man"> 여자 <input type="radio" name="sex" value="female" required></td>
	</tr>
	<tr>
		<td align=center>Email</td>
		<td><input type="text" name="email" maxlength=15 required>@<select name="e_adress">
			<option value="naver.com">naver.com</option>
			<option value="daum.net">daum.net</option>
			<option value="nate.com">nate.com</option>
			<option value="gmail.com">gmail.com</option>
		</td>
	</tr>
	<tr>
		<td colspan=2 align=center><input type="reset" value="다시 작성"> <input type="submit" value="가입하기"></td>
	</tr>
	</table>
	</form>
	<iframe src="" id="ifrm1" scrolling=no frameborder=no width=0 height=0 name="ifrm1"></iframe>
</body>
</html>
