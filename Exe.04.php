<?php 
	
	//Atividade número 2
	//Dupla: katia / Pedro

	$num1 = 5;
	$num2 = 6;
	$num3 = 2;

	if($num1 < $num2){
		if($num2 < $num3){
			echo "$num3 <br />";
			echo "$num2 <br />";
			echo "$num1 <br />";	
		}else{
			echo "$num2 <br />";
			echo "$num3 <br />";
			echo "$num1 <br />";
		}
	}else if($num2 < $num3){
		if($num3 < $num1){
			echo "$num1 <br />";
			echo "$num3 <br />";
			echo "$num2 <br />";
		}else{
			echo "$num3 <br />";
			echo "$num1 <br />";
			echo "$num2 <br />";
		}
	}else if($num3 < $num1){
		if($num1 < $num2){
			echo "$num2 <br />";
			echo "$num1 <br />";
			echo "$num3 <br />";
		}else{
			echo "$num1 <br />";
			echo "$num2 <br />";
			echo "$num3 <br />";
		}
	}
	
 ?>