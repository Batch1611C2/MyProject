<?php

echo "<p>Hello World!</p>";

if(isset($_POST['send']))
{
	$name= $_POST['name'];
	$email=$_POST['email'];
	$msg=$_POST['msg'];
	mail($email,"bla bla",$msg);
}


?>


<form name="form1" method="post">
<p>Name: <input type="text" name="name"/> </p>
<p>Email: <input type="text" name="email"/> </p>
<p>Message: <textarea name="msg"></textarea></p>
<p><input type="submit" name="send" value="Send" /></p>
</form>
