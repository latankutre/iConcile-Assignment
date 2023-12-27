<?php
	
setcookie('CheckIn',$_POST['CheckIn']);
	
setcookie('CheckOut',$_POST['CheckOut']);
	
setcookie('Adults',$_POST['Adults']);
?>

<html>
	
<form action="action_page.php" method="POST"><br>
	
Enter the Customer Details:<br><br>
	
Check In:<input type=number name="CheckIn" size=3><br><br>
	
Check Out:<input type=number name="CheckOut" size=3><br><br>
	
Adults:<input type=number name="Adults" size=3><br><br>

Kids:<input type=number name="Kids" size=3><br><br>

<input type=submit value="Search availability">
	
</form>

</html>

	
