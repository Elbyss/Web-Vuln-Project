<?php
#사용자가 로그아웃을 시도한 경우를 처리하기 위한 코드입니다. 
	include('dbcon.php');    
    include('check.php');

    if (is_login()){
	
	        unset($_SESSION['user_id']);
	        session_destroy();
	    }

	    header("Location: https://work.j0n9hyun.xyz:8443/sql_injection/sql_secure.php");
?>
