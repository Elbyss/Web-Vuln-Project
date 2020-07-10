<?php

if(empty($_SESSION['key'])) {
  $_SESSION['key'] = bin2hex(random_bytes(32));
}

if (isset($_POST['submit'])) {
  if(hash_equals($csrf, $_POST['csrf'])) {
    echo $msg = '정상적으로 글이 ' . $msgState . '되었습니다.';
  } else {
    echo 'Token Error';
  }
}

?>