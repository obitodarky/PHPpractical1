<?php 

if($_SERVER['REQUEST_METHOD']=="POST"){
		//post method 
		$comp=$_POST['comp'];
		$prod=$_POST['prod'];
		$desc=$_POST['sold'];
		$val=true;
		if(empty($comp)){
			$val=false;
			echo "ERROR:Enter company name <br>";
		}
		if(is_numeric($prod)==false){
			$val=false;
			echo "ERROR: Enter products produced as a number <br>";
		}
		if(!is_numeric($desc)){
			$val=false;
			echo "ERROR: Enter sold items as a number <br>";
		}
		if($val==true){
			echo"Welcome $comp corportaion <br>";
			echo "Produced items : $prod <br>";
			echo "Sold items : $desc <br>";
//function usage 
			function remain(){
				global $prod,$desc;
				return($prod-$desc);
			}
			echo "Remaining items : ";
			echo remain();
		}
	}

?>