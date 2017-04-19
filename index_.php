<?php
session_start();
if(!isset($_POST['secure']))
{
    $_SESSION['secure']=rand(1000,9999);
}
else
{
	if($_SESSION['secure']==$_POST['secure'])
		echo 'a match';
	else
	{
		echo 'incorrect ,try again';
		$_SESSION['secure']=rand(1000,9999);
    }
}
?> 
<img src="generate.php"/>
<form action="index.php" method="POST">
type the value you see:<input type="text" size="6" name="secure">
<input type="submit" value="Submit">

</form>