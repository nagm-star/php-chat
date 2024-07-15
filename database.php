<?php
/*
* Created By Nagm Yousif 
* nagmyousif@hotmail.com
* +249916216314
* www.nagmo.eb2a.com
*/

//// Connect to Mysql


$con = mysqli_connect('localhost','root','','shouts');

////// test connection
if(mysqli_connect_errno()) {
	echo 'Faild to connect to MySQL : '.mysqli_connect_error();
}