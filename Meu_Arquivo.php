<?php


//  $nota=a.0;


//  if ($nota < 0.0 || $nota>10.0){
//  echo "NOTA INVALIDA";

// }
// elseif ($nota >= 7.0) {
	
//   echo "sua nota final foi $nota e voce foi APROVADO";
//  }
//  else {

//  	echo "sua nota final foi $nota e voce foi REPROVADO";
//  }
// $op = 5;
// switch ($op) {
// 	case 1:
// 	echo "a opcao 1 foi selecionada";
// 	break;
// 	case 2:
// 	echo "a opcao 2 foi selecionada";
// 	break;
// 	case 3:
// 	echo "a opcao 3 foi selecionada";
// 	break;
// 	default:
// 	echo "opcao incorreta";
// 	break;
// }

echo "Escolheu a fruta desejada:\n";
echo " 1 - Banana\n";
echo " 2 - Maça\n";
echo " 3 - Melancia\n";
echo " 4 - Uva\n";
echo " 5 - Sair\n";

$op = (int) trim(fgets(STDIN));

switch ($op) {
	case 1:
		echo "A sua escolha foi banana\n";
		break;
	case 2:
		echo "a sua escolha foi maça\n";
		break;
	case 3:
		echo "a sua escolha foi melancia\n";
		break;
	case 4:
		echo "a sua escolha foi uva\n";
		break;
	default:
		echo "voce escolheu sair";
		break;		
}

