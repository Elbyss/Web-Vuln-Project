

<?php
$conn = mysqli_connect("localhost", "root", "password","userdb");
$username = $_GET['username'];
$password = $_GET['password'];
 
echo "<br>";
 
$userinfo = "SELECT * FROM users WHERE username=".$username." AND password=".$password."'";
$useridoverlap=mysqli_query($conn, $userinfo);
echo ($userinfo);
$user_db_check= mysql_fetch_array($useridoverlap);
echo ($user_db_check);

if($user_db_check){
  echo '아무말';
  echo "no: ".$user_db_check[0]."<br>";
  echo "id: ".$user_db_check[1]."<br>";
  echo "pw: ".$user_db_check[2]."<br>";
  echo "email: ".$user_db_check[3]."<br>";  
 
}
 
?>