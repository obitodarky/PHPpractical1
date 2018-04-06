<?php
	if($_SERVER['REQUEST_METHOD']=="POST"){
		//constants
		$name=$_POST['name'];
		$comp=$_POST['comp'];
		$prod=$_POST['prod'];
		$desc=$_POST['desc'];
		$add=$_POST['address'];
		$state=$_POST['state'];
		$city=$_POST['city'];
		$pin=$_POST['pincode'];
		$val=true;
		if(empty($name)){
			$val=false;
			echo "ERROR :Enter name <br>";
		}
		if(empty($comp)){
			$val=false;
			echo "ERROR:Enter company name <br>";
		}
		if(empty($prod)){
			$val=false;
			echo "ERROR: Enter product name<br>";
		}
		if(empty($add)){
			$val=false;
			echo "ERROR: Enter address<br>";
		}
		if(empty($city)){
			$val=false;
			echo "ERROR: Enter city <br>";
		}
		if($state=="Select State"){
			$val=false;
			echo "ERROR: Enter state<br>";
		}
		if(!is_numeric($pin)){
			$val=false;
			echo "ERROR : Enter pincode properly <br>";
		}
		if($val==true){
			echo"$name<br>";
			echo"$state<br>";
			echo"$city<br>";
			echo"$add<br>";
			echo"$comp<br>";
			echo"$prod<br>";
			echo"$desc<br>";
		}
	}
?>