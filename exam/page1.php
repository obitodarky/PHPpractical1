<html>
<head></head>
<body>
<form action="register1.php" method="POST">
	Name : <input type="text" name="name">
<br>	Company name : <input type="text" name="comp">
<br>	Product name : <input type="text" name="prod">
<br>	Product desc : <input type="text" name="desc">
<br>	Address : <input type="text" name="address">
<br>	State :<select name="state">
			<option name="">Select State</option>
			<?php
				$array1= array("1"=>"Gujarat","2"=>"Telangana","3"=>"Maharashtra","4"=>"Bihar");
				foreach($array1 as $num=>$state){
					echo "<option name=\"$num\">$state</option>";
				}
			?>
			</select>
<br>   	City : <input type="text" name="city">
			
	</select>
<br>	Pin code :<input type="text" name="pincode">
<input type="submit" value="Submit">
</form>
</body>