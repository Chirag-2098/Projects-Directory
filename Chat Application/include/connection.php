<?php

  $localhost = 'localhost';
  $username = 'root';
  $password = '';
  $db = 'mychat';

  $con = mysqli_connect($localhost, $username, $password, $db);

 if(!$con)
 {
 	die("<script><alert>Connection Failed!</alert></script>");
 }
else{
	echo "<script><alert>Connection established!</alert></script>";
}
?>