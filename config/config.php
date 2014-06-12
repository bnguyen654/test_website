<script src="jquery.js"></script>

<?php

//db


$db_server = "localhost";
$db_name = "phantastyc";

$db_login_table = "logins";

$db_login_user = "login_handler";
$db_login_pass = "akslogins12!12";

function loginCheck($user, $pass){
		mysql_connect($db_server,$username,$password) or die(mysql_error());
		$result = mysql_query("SELECT 'password' FROM '$db_login_table' WHERE user='$user'");
		if($pass==$result)
			return true;
		else
			return false;
};

?>