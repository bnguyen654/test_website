<?php require('config/config.php') ?>

<!DOCTYPE html>

<?php
	$user = $_POST['user'];
	$pass = crypt($_POST['pass'],"phantastyc");
	
	if(isset($user)&& isset($password))
		if loginCheck($user, $pass)
			//do something
		
?>

<form method="post">
	<label for="user">Username:</label>
    <input type="text" name="user" id="user">
    
    <label for="pass">Password:</label>
    <input type="password" name="pass">
    
    <input type="submit" value="Login">
</form>