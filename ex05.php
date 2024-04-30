<?php 

//Atividade número 4
	//Dupla: Katia / Pedro

	$altura = 1.66;
	$idade = 52;
	$sexo = "F";

	$maiorA = 0.0;
	$menorA = 3.0;

	$soma = 0;

	$maiorI = 0;
	$menorI = 150;

	for($i=0; $i<50; $i++){
		if ($altura > $maiorA) {
			$maiorA = $altura;	
		}
		if ($altura < $menorA) {
			$menorA = $altura;
		}
		if($sexo == "F"){
			$soma = $soma + $altura;
		}
		if ($sexo == "M" && $idade > $maiorI) {
			$maiorI = $idade;
		}
		if ($sexo == "F" && $idade < $menorI) {
			$menorI = $idade;
		}
	}

	echo "A maior altura é $maiorA <br />";
	echo "<br />A menor altura é $menorA <br />";

	$media = 0.0;
	$media = $soma/$i;

	echo "<br />A média de altura das mulheres é $media<br />";

	echo "<br />A idade do homem mais velho é $maiorI<br />";
	echo "<br />A idade da mulher mais nova é $menorI<br />";

 ?>