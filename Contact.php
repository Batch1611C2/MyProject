<?php

echo "<p>Hello World!</p>";

if(isset($_POST['send']))
{
	$name= $_POST['name'];
	$email=$_POST['email'];
	$msg=$_POST['msg'];
	//mailng code here
}


?>


<form name="form1" method="post">
<p>Name: <input type="text" name="name" required="required"/> </p>
<p>Email: <input type="email" name="email" required="required"/> </p>
<p>Message: <textarea name="msg"></textarea></p>
<p><input type="submit" name="send" value="Send" /></p>
	<p>HUzzaifaHasshim :)</p>
</form>
