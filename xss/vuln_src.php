<?php
if($word=$_GET['word'])
  echo '읽힌 값: '.$word;
else {
  echo "
  <form name='xss' action='xss_vuln'>
  <input type='text' name='word'>
  <input type='submit' value='Send'>
  ";
}
?>