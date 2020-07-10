<?php

$con = mysqli_connect('localhost', 'root', 'password', 'userdb');
if (mysqli_connect_errno($con)) {
  die('failed to connect to mysql'. mysqli_connect_error());
} else {
  echo '연결 성공';
}
?>
