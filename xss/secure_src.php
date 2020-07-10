<?php
$text = urlencode($_GET['text']);
if($text)
  echo '읽힌 값: '.$text;
else {
  echo "
  <form name='xss' action='xss_secure'>
  <input type='text' name='text'>
  <input type='submit' value='Send'>
  ";
}
?>