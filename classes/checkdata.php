// checkdata.php

<?php

$host = 'localhost';
$user = 'root';
$pass = '';

mysql_connect($host, $user, $pass);

mysql_select_db('loginregister');

if(isset($_POST['username']))
{
 $name=$_POST['username'];

 $checkdata="SELECT `user_id` FROM `users` WHERE `username` = '$username'";

 $query=mysql_query($checkdata);

 if(mysql_num_rows($query)>0)
 {
  echo "User Name Already Exist";
 }
 else
 {
  echo "OK";
 }
 exit();
}

if(isset($_POST['email']))
{
 $emailId=$_POST['email'];

 $checkdata="SELECT `user_id` FROM `users` WHERE `email` = '$email'";

 $query=mysql_query($checkdata);

 if(mysql_num_rows($query)>0)
 {
  echo "Email Already Exist";
 }
 else
 {
  echo "OK";
 }
 exit();
}
?>