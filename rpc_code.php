<html>
<body>
		
<?php

require_once('Students.php');

?>		

<form action="rpc_code.php" method="post">
	Request:
	<select name="request">
		<option>Get First Name</option>
		<option>Get Last Name</option>
	</select>
	
	<input type="submit" name="submit">
	
</form>

</body>
</html>