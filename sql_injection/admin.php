<!DOCTYPE html>
<html>
<head>
<h2 span style='font-weight: 600'> SQL Injection  </h2>
	<title>SQL Injection</title>
	<link rel="stylesheet" href="./css/bootstrap.min.css">
	<link rel="stylesheet" href="../static/labs.css">
</head>

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
<button class="from-top" style='margin-left: 8px' onclick="vuln_click()";> Vulnerable
</button>

<button class="from-bottom" style='margin-top: 45px' onclick='secure_button()';> Secure</button>
</button>

<button class="from-left" onclick='home()';> Description</button>
</button>

<button class="from-right" onclick='init()';> Back</button>
</button>

<?php
#관리자 계정으로 로그인시 보여지는 화면입니다.  사용자를 삭제하거나 정보를 수정할 수 있습니다.
include('dbcon.php'); 
include('check.php');
   
if (is_login()){

	if ($_SESSION['user_id'] == 'admin' && $_SESSION['is_admin']==1)
		;
	else
        header("Location: welcome.php");
}else
    header("Location: index.php"); 
 
// include('head.php');
?>

<div class="container">
	<div class="page-header">
    <h1 class="h2">&nbsp; 사용자 목록</h1><hr>
    </div>
<div class="row">

    <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">  
    <thead>  
    	<tr>  
            <th>아이디</th>  
            <th>프로필</th>
            <th>계정 활성화</th>
            <th>수정</th>  
            <th>삭제</th>  
        </tr>  
	</thead>  
  
    <?php  
		$stmt = $con->prepare('SELECT * FROM users ORDER BY username DESC');
	    $stmt->execute();

	        if ($stmt->rowCount() > 0)
	        {
    	        while($row=$stmt->fetch(PDO::FETCH_ASSOC))
			    {
				    extract($row);
				      
				if ($username != 'admin'){
				?>  
					<tr>  
						<td><?php echo $username;  ?></td> 
						<td><?php echo $userprofile; ?></td>
						<td>
						<?php 
						if($activate)
						{ 
						echo "활성";
						} else{
			    		echo "비활성";
						}
						?>
						</td>
						<td><a class="btn btn-primary" href="editform.php?edit_id=<?php echo $username ?>"><span class="glyphicon glyphicon-pencil"></span> Edit</a></td> 
						<td><a class="btn btn-warning" href="delete.php?del_id=<?php echo $username ?>" onclick="return confirm('<?php echo $username ?> 사용자를 삭제할까요?')">
						<span class="glyphicon glyphicon-remove"></span>Del</a></td>
					</tr> 
		
        <?php
					}
        		}
        	}
        ?>  
        </table>  
</div>

</body>
</html>
<center> <button> <a href="logout.php">로그아웃</a> </button> </center> <br />
<?php echo "<center><button>".$_SESSION['user_id']."</button></center>"; ?>