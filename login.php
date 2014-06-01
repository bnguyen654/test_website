<?php require('config/config.php') ?>

<!DOCTYPE html>

<script>

function highlightUser(){
	$("#user").css('border', '1px solid red');
};

</script>

<?php
	if(isset($_POST['user'])){
		$user = $_POST['user'];
		echo "Your username is $user";
	} else {
			echo "Lol";
			echo("<script type=\"text/javascript\">highlightUser();</script>");
	}
?>

<form method="post">
	<label for="user">Username:</label>
    <input type="text" name="user" id="user">
    
    <label for="pass">Password:</label>
    <input type="password" name="pass">
    
    <input type="submit" value="Login">
</form>