<?php
if(isset($_REQUEST['submit'])) {
  $username = $_REQUEST['username'];
  $query = "select * from users where username='$username';";
  $result = mysql_query($query) or die('<pre>'.mysql_error().'</pre>');
  
  $num = mysql_numrows($result);
  $i = 0;
  while ($i < $num) {
    $first = mysql_fetch_array($result);

    echo '{$username} <br /> {$first} </br>';
    $i++;
  }
}
?>

<br />

<form method='post' action='https://work.j0n9hyun.xyz:8443/sql_injection/test2.php'>
  <input name='username' id='username'>유저명 </input>
  <input name='password' id='password'>패스워드 </input>
  <button type='submit' formmethod="POST">로그인 </button>
</form>
