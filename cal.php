<?php

function calc($math_string){
	echo $math_string;
	
	try{
		$result = eval("return ".$math_string.";");
	}
	
	catch(ParseError $error){
		$result =  "Mind your brackets ):(";
	}
	return $result;
}

if (isset($_POST['calc'])){
	echo calc($_POST["calc"]);
}

?>    