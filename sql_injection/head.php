<html>
<!-- 주요 웹페이지의 상단에 보이는 메뉴를 위해 사용되어 집니다. -->
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <link href="../static/favicon.ico" rel="shortcut icon">
<title>SQL Injection</title>
<link rel="stylesheet" href="./css/bootstrap.min.css">
<link rel="stylesheet" href="../static/labs.css">
<script src="bootstrap/js/bootstrap.min.js"></script>
</head>

<body>
    
<nav class="navbar navbar-default navbar-static-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="http://work.j0n9hyun.xyz:8080/sql_injection/sql_labs">실험실</a>
				<ul class="nav navbar-nav">
            <li class="active"><a href="index.php">메인</a></li>
            <?php if (isset($_SESSION['user_id'])) { ?>
                <li><a href=""><?php echo $_SESSION['user_id']; ?></a></li>
                <li><a href="logout.php">로그아웃</a></li>
            <?php } else { ?>
                <li><a href="index.php">로그인</a></li>
             <?php } ?>
				</ul>
        </div>
    </div>
</nav>
